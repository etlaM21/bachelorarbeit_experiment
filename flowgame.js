let targetSymbol;
let optionSymbols = [];
let score = 0;
let scored = false;

function generateGame(){
    targetSymbol = Math.floor(Math.random() * Math.floor(symbolCount));
    optionSymbols = [];
    optionSymbols.push(targetSymbol);
    let secondOption = Math.floor(Math.random() * Math.floor(symbolCount));
    while(secondOption == targetSymbol) {
        secondOption = Math.floor(Math.random() * Math.floor(symbolCount));
    }
    optionSymbols.push(secondOption);
    let thirdOption = Math.floor(Math.random() * Math.floor(symbolCount));
    while(thirdOption == targetSymbol || thirdOption == secondOption) {
        thirdOption = Math.floor(Math.random() * Math.floor(symbolCount));
    }
    optionSymbols.push(thirdOption);
}

function generateHTML(){
    document.getElementById("flowscore").getElementsByTagName("p")[1].innerHTML = score;

    document.getElementById("flowtarget").innerHTML = "<img src='" + symbolSRC[targetSymbol] + "' style='opacity: 1;'>"
    
    // Generate Random Order
    let order = [];
    let first = Math.floor(Math.random() * Math.floor(3));
    order.push(first);
    let second = Math.floor(Math.random() * Math.floor(3));
    while(second == first) {
        second = Math.floor(Math.random() * Math.floor(3));
    }
    order.push(second);
    let third = Math.floor(Math.random() * Math.floor(3));
    while(third == first || third == second) {
        third = Math.floor(Math.random() * Math.floor(3));
    }
    order.push(third);
    let optionHTML = "";
    for (let i = 0; i < optionSymbols.length; i++){
        optionHTML += "<img onclick='optionSelect(" + optionSymbols[order[i]] + ", " + i + ")' src='" + symbolSRC[optionSymbols[order[i]]] + "' style='opacity: 1;'>"
    }
    document.getElementById("flowoptions").innerHTML = optionHTML;
}

function optionSelect(index, order){
    if(index == targetSymbol && scored == false){
        score++;
        document.getElementById("flowgamescore").value = score.toString();
    }
    scored = true;
    let optionImages = document.getElementById("flowoptions").getElementsByTagName("img");
    for(let i = 0; i < optionImages.length; i++) {
        if(i != order){
            optionImages[i].style.opacity = "0";
            optionImages[i].addEventListener("transitionend", function(){
                document.getElementById("flowtarget").getElementsByTagName("img")[0].style.opacity = "0";
                document.getElementById("flowtarget").addEventListener("transitionend", function(){
                    optionImages[order].style.opacity = "0";
                    optionImages[order].addEventListener("transitionend", function(){
                        generateGame();
                        generateHTML();
                        scored = false;
                    }, (true))
                }, (true))
            }, (true)); 
        }
    }
}
document.getElementById("flowgamescore").value = score.toString();
generateGame();
generateHTML();