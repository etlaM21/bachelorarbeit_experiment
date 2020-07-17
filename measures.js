// timing functions
// measured in milliseconds

let pagetimes = []

let pagetimer;

function startPagetimer() {
    pagetimer = performance.now();
}

function endPagetimer() {
    pagetimer = performance.now() - pagetimer;
    if(isNaN(pagetimer) == false){
        pagetimes.push(pagetimer);
    }
}

function fillTimeInputs() {
    let timeInputs = document.querySelectorAll('input.timeInput');
    for(let i = 0; i < pagetimes.length; i++){
        timeInputs[i].value = pagetimes[i];
    }
}