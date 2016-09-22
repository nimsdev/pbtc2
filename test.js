var compare = function (choice1, choice2) {

    
if(choice1 === choice2) {
return "The result is a tie!";
}//if choice1 tie
if(choice1 === "rock") {
if(choice2 === "scissors") {
return "rock wins";
}//ic choice 2 sciccors
    
    
    
else {
return "paper wins";
}//else
}//if choice1 rock
    
    
else if(choice1 === "paper") {
if(choice2 ==="rock") {
return "paper wins";
}//if choice2 rock 
else {
return "scissors wins";
}//else
}//else if choice1 paper
    
    
    
    
    
    
}//var compare