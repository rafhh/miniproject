function helloworld(message, message2) {
    alert(var3 + ':' + message + message2)
    var3 = 'kitten'
    alert(var3 + ':' + message + message2)
}

/*
var a = 33;
var b  = 10;
var c = "Test";
var linebreak = "<br />";
document.write("a + b = ");
result = a + b;
document.write(result);
document.write(linebreak);
document.write("a - b = ");
result = a - b;
document.write(result);
document.write(linebreak);
document.write("a / b = ");
result = a / b;
document.write(result);
document.write(linebreak);
document.write("a % b = ");
result = a % b;
document.write(result);
document.write(linebreak);
document.write("a + b + c = ");
result = a + b + c;
document.write(result);
document.write(linebreak);
a = a++;
document.write("a++ =");
result = a++;
document.write(result);
document.write(linebreak);
document.write("b-- = ");
b = b--;
result = b--;
document.write(result);
document.write(linebreak);
document.write(linebreak);

var age = '12' //prompt("Age?");
if (age >= 17) {
    document.write("<b>Qualifies for driving</b><br>");
} else{
    document.write("<b>Does not qualify for driving</b>");
}
document.write(linebreak);

var book = 'economic' //prompt("Which Book?");
if (book == "history") {
    document.write("<b>History Book </b>");
}
else if (book == "math" || book == "maths") {
    document.write("<b>Maths Book </b>");
}
else if (book == "economic" || book == "economics" ) {
    document.write("<b>Economics Book </b>");
}
else {
    document.write("<b>Unknown Book </b><br>");
}
document.write(linebreak);
document.write(linebreak);
// ((book == "economic" || book == "economics" ) && book == "economy")

var grade= 'A' //prompt("Which Grade?");
document. write("Entering switch block<br />");
switch (grade)
{
    case 'A' : document.write("Good job<br />");
    break;
    case 'B' : document.write("Pretty good<br />");
    break;
    case 'C' : document.write("Passed<br />");
    break;
    case 'D' : document.write("Not so good<br />");
    break;
    case 'F' : document.write("Failed<br />");
    break;
    default: document.write("Uknown grade<br />");

}
document. write("Exiting switch block<br />");
document.write(linebreak);


var count = prompt("Count?");
document.write("Starting Loop <br />");
while (count < 10) {
    document.write("Current Count : " + count + "<br/>");
    count++;
}
document.write("Loop stopped!<br />");
document.write(linebreak);


//var count;
document.write("Starting Loop" + "<br />");
for (count = 0; count < 20; count++){
document.write("Current Count : " + count);
document.write("<br />");
}
document.write("Loop stopped!");
document.write("<br />");


var x = 1; 
document.write("Entering the loop<br />");
while (x < 20) {
    if (x == 5){
        break; // breaks out of loop completely
    }

    x = x + 1;
    document.write( x + "<br />");
}
document.write("Exiting the loop!<br />");
document.write("<br />");
*/


function getConfirmation() {
    var retVal = confirm("Do you want to continue ?");
    if( retVal == true ){
        document.write ("User wants to delete?");
        return true;
    } else {
        document.write ("User does not want to continue!!");
        return false;
    }
}

function over() {
    alert("Mouse Over");
}
function myevent(name) {
    alert(name);
}