// Security Gaurd, allows people to enter to a party, only people between 18 and 35 years old can enter the party
// Loop through number of people.
do {
    // ask each user about his/her age.
    function fun(){
    let age = prompt("What is your age?");
    // if younger than 18, print: you are too young
    if (age<18) {
        greeting = "you are too young";
      } 
    
    // if older than 35, print: you are too old
    else if (age>35) {
        greeting = "you are too old";
      }
    // if between 18 and 35, ask the user about his/her name and welcome the user to the party.
   else {
        greeting = "welcome to the party";
      }
    }
    fun();
} while (confirm("is there anyone else?"));
console.log(1);
