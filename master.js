// ordering & showing pages 
// triggering fake-loading
// triggering timing functions

let fragebogenPages = [];
let targetAntwortBogen = [];
let aufgabenModus = false;
let zeilenSeitenCounter = 1;
let zeilenCounter = 0;
let zeilenHistory = [];
let loaderCounter = 0;
let loadingTimes = [];
let zeilenProLoader = 5;
let loaderReihenfolge = [];

function generateLoaderReihenfolge(){
    let firstloader = Math.floor(Math.random() * Math.floor(3)) + 1;
    loaderReihenfolge.push(firstloader);
    let secondloader = Math.floor(Math.random() * Math.floor(3)) + 1;
    while(secondloader == firstloader){
        secondloader = Math.floor(Math.random() * Math.floor(3)) + 1;
    }
    loaderReihenfolge.push(secondloader);
    let thirdloader = Math.floor(Math.random() * Math.floor(3)) + 1;
    while(thirdloader == firstloader || thirdloader == secondloader){
        thirdloader = Math.floor(Math.random() * Math.floor(3)) + 1;
    }
    loaderReihenfolge.push(thirdloader);

    // Fill inputs
    let loaderInputs = document.querySelectorAll('input.loaderInput');
    for(let i = 0; i < loaderReihenfolge.length; i++){
        loaderInputs[i].value = loaderReihenfolge[i];
    }
}

generateLoaderReihenfolge();

function generateLoadingTimes(n){
    let averageGoal = 8;
    // Erst random zwischen 6 und 10
    loadingTimes.push(parseFloat(((Math.random() * Math.floor(4))+6).toFixed(2)));
    for(let i = 1; i < n; i++){
        if(i+1 != n) {
            if(loadingTimes[i-1] <= parseFloat(averageGoal)){
                let rand = (Math.random() * Math.floor(2)) + 8;
                loadingTimes.push(parseFloat(rand.toFixed(2)));
            }
            if(loadingTimes[i-1] > parseFloat(averageGoal)){
                let rand = (Math.random() * Math.floor(2)) + 6;
                loadingTimes.push(parseFloat(rand.toFixed(2)));
            }
        }
        else {
            let finalLoad = averageGoal * n;
            for(let o = 0; o < n-1; o++){
                let subtraction = (n-1)-loadingTimes.length;
                finalLoad = finalLoad - loadingTimes[o-subtraction];
            }
            loadingTimes.push(finalLoad);
        }
    }
}

for(let i = 0; i < 4; i++){
    generateLoadingTimes(zeilenProLoader);
}

/* DEBUG TIMES */
/*
function DEBUGgenerateLoadingTimes(n){
    let averageGoal = 8;
    // Erst random zwischen 6 und 10
    loadingTimes.push(parseFloat(((Math.random() * Math.floor(2))).toFixed(2)));
    for(let i = 1; i < n; i++){
        let rand = (Math.random() * Math.floor(2));
        loadingTimes.push(parseFloat(rand.toFixed(2)));
    }
}

for(let i = 0; i < 4; i++){
    DEBUGgenerateLoadingTimes(zeilenProLoader);
}

*/
/* DEBUG TIMES ENDD */

function getTargetAntwortBogen(){
    let antworten = document.getElementById("zeilenAntwort").getElementsByClassName("zeilenAntwortBogen");
    for(let i = 0; i < antworten.length; i++){
        targetAntwortBogen.push(antworten[i]);
    }
}

getTargetAntwortBogen();



$('.page').each(function(i, obj) {
    fragebogenPages.push(obj);
});

function initPage() {
    if(Array.isArray(fragebogenPages) && fragebogenPages.length >= 1) {
        fragebogenPages[0].style.display = "block";
    }
    else {
        $('#content').html("Es gab ein Problem. Bitte lade die Seite erneut.");
    }
}

function nextPage(measureTime) {
    endPagetimer();
    let currentPage;
    for(i = 0; i < fragebogenPages.length; i++){
        if(fragebogenPages[i].style.display == "block"){
            currentPage = i;
        }
    }
    // Input Field Validation
    let pageInputs = fragebogenPages[currentPage].querySelectorAll('input.pflichtfeld');
    let filledInputs = [];
    for(let o = 0; o < pageInputs.length; o++){
        if(pageInputs[o].type === 'text' && pageInputs[o].value != ""){
            filledInputs.push(pageInputs[o]);
        }
        if (pageInputs[o].type === 'radio' && pageInputs[o].checked) {
            filledInputs.push(pageInputs[o]);     
        }
    }
    let needdedInputs = [];
    for(let p = 0; p < pageInputs.length; p++){
        needdedInputs.push(pageInputs[p].name);
    } 
    for(let a = 0; a < needdedInputs.length; a++){
        let inputName = needdedInputs[a];
        for (let s = 0; s < needdedInputs.length; s++){
            if(s != a && inputName == needdedInputs[s]){
                needdedInputs.splice(s, 1);
                s--;
            }
        }
    }
    if(needdedInputs.length == filledInputs.length) {
        if(fragebogenPages.length > currentPage + 1) {
            fragebogenPages[currentPage].style.display = "none";
            loadPage(fragebogenPages[currentPage+1], 0, 0, measureTime);
        }
    }
    else {
        fragebogenPages[currentPage].getElementsByClassName("inputwarnung")[0].style.display = "block";
    }
}

function nextTutorialZeilen(measureTime) {
    endPagetimer();
    let currentPage;
    for(i = 0; i < fragebogenPages.length; i++){
        if(fragebogenPages[i].style.display == "block"){
            currentPage = i;
        }
    }
    if(zeilenSeitenCounter == 1){
        fragebogenPages[currentPage].style.display = "none";
        document.getElementById("TutorialZeilenAufgabe").getElementsByTagName("h1")[0].innerHTML = "Zweite Seite";
        zeilenSeitenCounter++;
        loadPage(fragebogenPages[currentPage], 2, 3000, measureTime);
        let targetVorhanden = Math.round(Math.random());
        if(targetVorhanden == 0){
            generateZeilen(8,6, false);
        }
        if(targetVorhanden == 1){
            generateZeilen(8,6, true);
        }
        displayZeilen("TutorialZeilenDiv");
    }
    else {
        document.getElementById("TutorialZeilenAufgabe").getElementsByTagName("h1")[0].innerHTML = "Erste Seite";
        zeilenSeitenCounter = 1;
        document.getElementById("TutorialZeilenAufgabe").style.display = "none";
        document.getElementById("TutorialZeilenAntwort").style.display = "block";
    }
}

function restartTutorial(){
    endPagetimer();
    let currentPage;
    for(i = 0; i < fragebogenPages.length; i++){
        if(fragebogenPages[i].style.display == "block"){
            currentPage = i;
        }
    }
    fragebogenPages[currentPage].style.display = "none";
    loadPage(fragebogenPages[currentPage-1], 2, 0, false);
    document.getElementById("TutorialZeilenAufgabe").style.display = "block";
    document.getElementById("TutorialZeilenAntwort").style.display = "none";
    generateZeilen(8,6, true);
    displayZeilen("TutorialZeilenDiv");
}

function nextZeilen(measureTime) {
    endPagetimer();
    let currentPage;
    for(let i = 0; i < fragebogenPages.length; i++){
        if(fragebogenPages[i].style.display == "block"){
            currentPage = i;
        }
    }
    if(zeilenSeitenCounter == 1){
        fragebogenPages[currentPage].style.display = "none";
        document.getElementById("zeilenAufgabe").getElementsByTagName("h1")[0].innerHTML = "Zweite Seite";
        zeilenSeitenCounter++;
        loadPage(fragebogenPages[currentPage], loaderReihenfolge[loaderCounter], loadingTimes[Math.round(zeilenHistory.length / 2)-1]*1000, measureTime);
        let targetVorhanden = Math.round(Math.random());
        if(targetVorhanden == 0){
            zeilenHistory.push(generateZeilen(8,6, false));
        }
        if(targetVorhanden == 1){
            zeilenHistory.push(generateZeilen(8,6, true));
        }
        displayZeilen("zeilenDiv");
    }
    else {
        document.getElementById("zeilenAufgabe").getElementsByTagName("h1")[0].innerHTML = "Erste Seite";
        zeilenSeitenCounter = 1;
        document.getElementById("zeilenAufgabe").style.display = "none";
        document.getElementById("zeilenAntwort").style.display = "block";
        for(let i = 0; i < targetAntwortBogen.length; i++){
            targetAntwortBogen[i].style.display = "none";
        }
        targetAntwortBogen[Math.round(zeilenHistory.length / 2)-1].getElementsByTagName("input")[2].value = zeilenHistory[zeilenHistory.length-2];
        targetAntwortBogen[Math.round(zeilenHistory.length / 2)-1].getElementsByTagName("input")[5].value = zeilenHistory[zeilenHistory.length-1];
        targetAntwortBogen[Math.round(zeilenHistory.length / 2)-1].style.display = "block";
    }
}

function finishZeilen(measureTime) {
    endPagetimer();
    console.log("zeilenCounter = " + zeilenCounter)
    zeilenCounter++;
    console.log("zeilenCounter++ macht " + zeilenCounter)
    let currentPage;
    for(i = 0; i < fragebogenPages.length; i++){
        if(fragebogenPages[i].style.display == "block"){
            currentPage = i;
        }
    }
    let currentAntwortBogen;
    let possibleAntwortBogen = fragebogenPages[currentPage].getElementsByClassName("zeilenAntwortBogen");
    for(u = 0; u < possibleAntwortBogen.length; u++){
        if(possibleAntwortBogen[u].style.display == "block"){
            currentAntwortBogen = u;
        }
    }
    // Input Field Validation
    let pageInputs = possibleAntwortBogen[currentAntwortBogen].querySelectorAll('input.pflichtfeld');
    
    let filledInputs = [];
    for(let o = 0; o < pageInputs.length; o++){
        if(pageInputs[o].type === 'text' && pageInputs[o].value != ""){
            filledInputs.push(pageInputs[o]);
        }
        if (pageInputs[o].type === 'radio' && pageInputs[o].checked) {
            filledInputs.push(pageInputs[o]);     
        }
    }
    let needdedInputs = [];
    for(let p = 0; p < pageInputs.length; p++){
        needdedInputs.push(pageInputs[p].name);
    } 
    for(let a = 0; a < needdedInputs.length; a++){
        let inputName = needdedInputs[a];
        for (let s = 0; s < needdedInputs.length; s++){
            if(s != a && inputName == needdedInputs[s]){
                needdedInputs.splice(s, 1);
                s--;
            }
        }
    }
    console.log("needdedInputs.length == filledInputs.length " + (needdedInputs.length == filledInputs.length))
    if(needdedInputs.length == filledInputs.length) {
        console.log("fragebogenPages.length > currentPage + 1 " + (fragebogenPages.length > currentPage + 1))
        if(fragebogenPages.length > currentPage + 1) {
            console.log("zeilenCounter == zeilenProLoader " + (zeilenCounter == zeilenProLoader))
            console.log("zeilenCounter == zeilenProLoader * 2" + (zeilenCounter == zeilenProLoader * 2))
            console.log("zeilenCounter == zeilenProLoader || zeilenCounter == (zeilenProLoader * 2)" + (zeilenCounter == zeilenProLoader || zeilenCounter == (zeilenProLoader * 2)))
            if(zeilenCounter == zeilenProLoader || zeilenCounter == (zeilenProLoader * 2) || zeilenCounter == (zeilenProLoader * 3)) {
                // NEW LOADER
                // FRAGEBOGEN
                fragebogenPages[currentPage].style.display = "none";
                loadPage(fragebogenPages[currentPage+1], 0, 0, measureTime);
                let loaderfrageBogen = [];
                loaderfrageBogen = document.getElementById("LoaderFragebogen").getElementsByClassName("loaderBogen");
                for (let i = 0; i < loaderfrageBogen.length; i++){
                    loaderfrageBogen[i].style.display = "none";
                }
                loaderfrageBogen[loaderCounter].style.display = "block";
                loaderCounter++;
            }
            else {
                initTest();
                fragebogenPages[currentPage].style.display = "none";
                document.getElementById("zeilenAufgabe").style.display = "block";
                document.getElementById("zeilenAntwort").style.display = "none";
                
                
                Math.round(zeilenHistory.length / 2)
                loadPage(fragebogenPages[currentPage], 0, 0, measureTime);
            }
        }
    }
    else {
        possibleAntwortBogen[currentAntwortBogen].getElementsByClassName("inputwarnung")[0].style.display = "block";
    }
}

function restartZeilen(measureTime) {
    let currentPage;
    for(i = 0; i < fragebogenPages.length; i++){
        if(fragebogenPages[i].style.display == "block"){
            currentPage = i;
        }
    }
    let currentAntwortBogen;
    let possibleAntwortBogen = fragebogenPages[currentPage].getElementsByClassName("loaderBogen");
    for(u = 0; u < possibleAntwortBogen.length; u++){
        if(possibleAntwortBogen[u].style.display == "block"){
            currentAntwortBogen = u;
        }
    }
    console.log("currentAntwortBogen: " + currentAntwortBogen);
    console.log("possibleAntwortBogen[currentAntwortBogen]: " + possibleAntwortBogen[currentAntwortBogen]);
    // Input Field Validation
    let pageInputs = possibleAntwortBogen[currentAntwortBogen].querySelectorAll('input.pflichtfeld');
    
    let filledInputs = [];
    for(let o = 0; o < pageInputs.length; o++){
        if(pageInputs[o].type === 'text' && pageInputs[o].value != ""){
            filledInputs.push(pageInputs[o]);
        }
        if (pageInputs[o].type === 'radio' && pageInputs[o].checked) {
            filledInputs.push(pageInputs[o]);     
        }
    }
    console.log("filledInputs: " + filledInputs.length);
    let needdedInputs = [];
    for(let p = 0; p < pageInputs.length; p++){
        needdedInputs.push(pageInputs[p].name);
    } 
    for(let a = 0; a < needdedInputs.length; a++){
        let inputName = needdedInputs[a];
        console.log("inputName: " + inputName);
        for (let s = 0; s < needdedInputs.length; s++){
            console.log("needdedInputs[s]: " + needdedInputs[s]);
            if(s != a && inputName == needdedInputs[s]){
                needdedInputs.splice(s, 1);
                s--;
            }
        }
    }
    console.log("needdedInputs: " + needdedInputs.length);
    if(needdedInputs.length == filledInputs.length) {
        if(fragebogenPages.length > currentPage + 1) {
            endPagetimer();
            fragebogenPages[currentPage].style.display = "none";
            loadPage(fragebogenPages[currentPage-1], 2, 0, measureTime);
            document.getElementById("zeilenAufgabe").style.display = "block";
            document.getElementById("zeilenAntwort").style.display = "none";
            let targetVorhanden = Math.round(Math.random());
            if(targetVorhanden == 0){
                zeilenHistory.push(generateZeilen(8,6, false));
            }
            if(targetVorhanden == 1){
                zeilenHistory.push(generateZeilen(8,6, true));
            }
            displayZeilen("zeilenDiv"); 
        }
    }
    else {
        possibleAntwortBogen[currentAntwortBogen].getElementsByClassName("inputwarnung")[0].style.display = "block";
    }
    /*
    endPagetimer();
    let currentPage;
    for(i = 0; i < fragebogenPages.length; i++){
        if(fragebogenPages[i].style.display == "block"){
            currentPage = i;
        }
    }
    fragebogenPages[currentPage].style.display = "none";
    loadPage(fragebogenPages[currentPage-1], 2, 0, measureTime);
    document.getElementById("zeilenAufgabe").style.display = "block";
    document.getElementById("zeilenAntwort").style.display = "none";
    let targetVorhanden = Math.round(Math.random());
    if(targetVorhanden == 0){
        zeilenHistory.push(generateZeilen(8,6, false));
    }
    if(targetVorhanden == 1){
        zeilenHistory.push(generateZeilen(8,6, true));
    }
    displayZeilen("zeilenDiv"); */
}

function loadPage(pageElement, loaderType, time, measureTime){
    /* 4 Loader Types:
    0 = no loader
    1 = static loader
    2 = progress loader
    3 = flow loader */
    let loader = document.getElementById("loader");
    loader.style.display = "block";
    if(loaderType == 0){
        setTimeout(function(){ 
            pageElement.style.display = "block";
            loader.style.display = "none";
            if(measureTime == true) {
                startPagetimer();
            }
            }, time); 
    }
    if(loaderType == 1){
        let loader01 = document.getElementById("loader01");
        loader01.style.display = "block";
        setTimeout(function(){ 
            loader.style.display = "none";
            pageElement.style.display = "block";
            loader01.style.display = "none";
            if(measureTime == true) {
                startPagetimer();
            } }, time); 
    }
    if(loaderType == 2){
        let loader02 = document.getElementById("loader02");
        loader02.style.display = "block";
        let loadingBar = document.getElementById("loader-progress");
        let loaderContainer = document.getElementById("loader-container");
        loaderContainer.style.display = "block";
        loadingBar.style.transitionDuration = time + "ms";
        setTimeout(function(){ 
            loadingBar.style.width = "100%";
        }, 10);
        setTimeout(function(){ 
            loader.style.display = "none";
            pageElement.style.display = "block";
            loader02.style.display = "none";

            loadingBar.style.transitionDuration = time + "ms";
            loadingBar.style.width = "0%";
            loaderContainer.style.display = "none";
            if(measureTime == true) {
                startPagetimer();
            } }, time); 
    }
    if(loaderType == 3){
        let loader03 = document.getElementById("loader03");
        loader03.style.display = "block";
        let continueButton = document.getElementById("flow-loader-continue");
        let flowLoadingBar = document.getElementById("flow-loader-progress");
        flowLoadingBar.style.transitionDuration = time + "ms";
        setTimeout(function(){ 
            flowLoadingBar.style.width = "100%";
        }, 10);
        setTimeout(function(){ 
            continueButton.innerHTML = "Weiter"
            continueButton.disabled = false;
            continueButton.addEventListener("click", function(){
                continueButton.innerHTML = "Lädt";
                continueButton.disabled = true;

                loader.style.display = "none";
                pageElement.style.display = "block";
                loader03.style.display = "none";

                flowLoadingBar.style.transitionDuration = time + "ms";
                flowLoadingBar.style.width = "0%";
                if(measureTime == true) {
                    startPagetimer();
                    }
                }, (true));
            }, time);  
    }
}

function initTutorial(){
    generateZeilen(8,6, true);
    displayZeilen("TutorialZeilenDiv");
}

function initTest(){
    let targetVorhanden = Math.round(Math.random());
    if(targetVorhanden == 0){
        zeilenHistory.push(generateZeilen(8,6, false));
    }
    if(targetVorhanden == 1){
        zeilenHistory.push(generateZeilen(8,6, true));
    }
    displayZeilen("zeilenDiv");
}

initPage();