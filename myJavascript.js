// This is a single line comment

/* This is a multi-line comment */
 document.write("Hello world this Michael Alao");
 document.write("Hello world this 'Michael Alao'");
 document.write("<b>Hello world this Michael Alao</b>");

 // Confirmation with options
 var c = confirm("OK or Cancel");
 if (c) {
    alert("You pressed \"OK\".");
 } else {
   alert('You clicked "Cancel".');
 }

/* Prompt is used to request input from the user*/
var p = prompt ("How old are you?", ""); //blank default values
if (p) {
  // This is the true statement
  alert(p + " is your age");
} else {
  //This is the false statement
  alert("No input was typed");
}

/* Adding sentences together*/
var Name = "Michael"; // My Name
var Age = " and I am 33 years old!";
document.write("My name is " + Name + Age);

/* Adding numbers*/
 var myAge = 33; // No quotes needed for numbers
 var NextYear = 1;
 var Total = myAge + NextYear;
 document.write("Next year I will be " + Total + " years old!");

 // Modulus
 var Ten = 10; // Our numbers
 var Mod = Ten % 3; // Our Modulus
 alert(Mod);

 // Redirecting users and openning new windows
 /*
 window.location = "index.html";
 */

 /* String manipulation*/
 var book = "Great Leadership"; //Capitalized, but not all uppercase
document.write(book.toUpperCase()); // writes our string in uppercase.

var pangram = "The Quick Brown Fox Jumps Over The Lazy Dog";
document.write(pangram.toLowerCase());

var p = prompt ("What is the password?", "");
if (p.toLowerCase()=="password" && p.length == 8) {
  alert ("Acess granted!");
} else {
  alert (p.toUpperCase() + " is wrong!");
}

/*Logical Operators (comparing variables)
== means EQUAL TO, && means AND (and all variable must be true), || means OR (at least one must be true), ! means NOT TRUE or FALSE
*/
/* Example with ! NOT or FALSE */
var Breathing = 0; // 0 means false , 1 means true.
if (!Breathing) {
  alert("Not breathing!");
}

/* Example with && AND */
var Age = 2; // Integer
var Name = "Peculiar"; // String
if (Age <= 3 && Name == "Peculiar") { // Returns true because Age is 2 AND Name is Peculiar
    document.write("Peculiar is " + Age + "  years or older.");
}
/* Example with || OR */
var Age = 2; // Integer
var Name = "Peculiar"; // String
if (Age <= 3 || Name == "Peculiar") { // Returns true because Age is 2 AND Name is Peculiar
    document.write("Age is " + Age + " or Name is " + Name);
}

/* Else if Statement , with compacted alert. */
var Name = "Michael";
if (Name ==" Lekan"){
  var FutureAlert = "Hello, Lekan!";
}
else if (Name ="Michael") {
  var FutureAlert = "Hello, Michael!";
}
else {
var FutureAlert = "Hey there, guest user!";
}
alert(FutureAlert);

/* Switch statement*/
var Name = prompt("What is your name?","");
switch (Name) {
  case "Michael":
    alert("Your name is Michael!");
    break;
  case "Peculiar":
      alert("Your name is Peculiar!");
      break;
  case "Esther":
        alert("DING! This is what we want!");
        break;
  default:
    alert("The name Variable does not match anything above");
    break;
}

/* Function declaration and calling.
 function functionName (param1, param2,param3,...) {}
 param are optional.
 */
// Declaration
function Name()
{
  alert('My name is Alao Michael');
}
// calling the function
Name();

// Function Declaration
function Name(name1, name2)
{
  if (name1==undefined || name2 == undefined) // check if any param is mising
  {
    var message = "Missing one parameter";
  } else {
    var message = name1 + " is the first name\n" +
              name2 + " is the second name";
  }
  alert (message);
}
// calling the function
Name ("Peculiar", "Student");


// Addititon function
function AddThis(num1,num2)
{
  var total = num1 + num2;
  return total;
}
// alert() the total: Will alert "3"
alert(AddThis(1,2));
// document.write() the total: Will write "3"
document.write(AddThis(1,2));

// Put the total in a variable:
// Does nothing.
// var T = 4
var T = AddThis(1,3);

// function declaration
function NameOrAge (type, value)
{
  type = type.toLowerCase ();
  if(type =="age")
  {
    return value + value; // addition arithmetic; double your age.
  }
  else if (type == "name")
  {
  // to conjugate,create a new variable first.
  // Then return the variable
  var newString = "Your name is " + value;
  return newString;
  }
  else {
    // you can return full string. Remember to escape qoutes inside quotes.
    return "Type did not match \"age\" or \"name\"";
  }

  alert (NameOrAge("age","22"));
  alert (NameOrAge("name","Michael"));
  alert (NameOrAge("anything else","some value"));
}


// Event Declaration
function DblClick(txt)
{
  alert(txt);
}

// Selecting HTML elements using getElementById()
// change the value in input element
var MyID = document.getElementById("MyID");
MyID.value = "JS put this value in here";

// Selecting HTML elements using getElementById()
// change the value in the innerHTML
document.getElementById("test").innerHTML= "<b> New HTML in here!</b>";
