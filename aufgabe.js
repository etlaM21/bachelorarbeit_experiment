let symbolCount = 16;
let symbolSRC = [
    "symbols/symbol-01.svg",
    "symbols/symbol-02.svg",
    "symbols/symbol-03.svg",
    "symbols/symbol-04.svg",
    "symbols/symbol-05.svg",
    "symbols/symbol-06.svg",
    "symbols/symbol-07.svg",
    "symbols/symbol-08.svg",
    "symbols/symbol-09.svg",
    "symbols/symbol-10.svg",
    "symbols/symbol-11.svg",
    "symbols/symbol-12.svg",
    "symbols/symbol-13.svg",
    "symbols/symbol-14.svg",
    "symbols/symbol-15.svg",
    "symbols/symbol-16.svg",
]

class sterzingerZeile {
    constructor(first, last, length){
        this.first = first;
        this.last = last;
        this.length = length;
        this.symbols = this.generateSymbols(this.first, this.last, this.length - 1);
    }
    generateSymbols(first, last, length){
        let result = [];
        for(let i = 0; i < length; i++){
            if(i == 0) {
                result.push(first);
            }
            if(i == (length-1)) {
                result.push(last);
            }
            else {
                let randomNumber = Math.floor(Math.random() * Math.floor(symbolCount));
                result.push(randomNumber);
            }
        }
        return result;
    }
    generateHTML(){
        let result = "<div class='zeile'>";
        for(let i = 0; i < this.symbols.length; i++){
            result += "<div class='symbol'><img src='";
            result += symbolSRC[this.symbols[i]];
            result += "'></div>";
        }
        result += "</div>";
        return result;
    }
}

let zeilen = [];

function generateZeilen(n, length, target){
    zeilen = [];
    let needForTarget = false;
    if(target == true){
        needForTarget = true;
    }
    let lastSymbols = [];
    for (let i = 0; i < n; i++){
        let randomStart = Math.floor(Math.random() * Math.floor(symbolCount));
        if(lastSymbols[i-1] != null){ // If there is a last symbol aka nicht die first Zeile
            while(randomStart == lastSymbols[i-1]){
                randomStart = Math.floor(Math.random() * Math.floor(symbolCount));
            }
            if(needForTarget == true){
                // Wir generieren eine random Zahl zwischen 0 und der Anzahl an Zeilen (n) minus die Nummer der gerade generierenden Zeile (i)
                // Ist die Zahl 0, platzieren wir zwischen der neuen und der letzten Zeile das Target
                // Spätestens ganz am Ende kann nur noch 0 generiert werden, da die Chance mit jeder vergangenenen Zeile ein kleineres Maximum hat
                let chance = Math.floor(Math.random() * Math.floor(n - i));
                if(chance == 0){
                    randomStart = lastSymbols[i-1];
                    needForTarget = false;
                }
            }
        }
        let randomEnd = Math.floor(Math.random() * Math.floor(symbolCount));
        lastSymbols.push(randomEnd);
        zeilen.push(new sterzingerZeile(randomStart, randomEnd, length));
    }
    return target;
}

function displayZeilen(targetID){
    let target = document.getElementById(targetID);
    let result = "";
    for (let i = 0; i < zeilen.length; i++){
        result += zeilen[i].generateHTML();
    }
    target.innerHTML = result;
}

function start(){
    generateZeilen(10,6, true);
    displayZeilen("testDiv");
}