/*var inputBirthday = document.getElementsByTagName("input");
var outputAge = document.getElementsByTagName("p");
var buttonCalculateAge = document.getElementsByTagName("input");

buttonCalculateAge[0].onclick = function () {
    var today = new Date();
    var birthday = inputBirthday.innerHTML.split('.');
    
    var age = birthday[2] - today.getFullYear();
    outputAge.innerHTML = "Alter = " + age;
};*/

var birthday = prompt("Year of birth:");
var today = new Date(); // current date initialized

// TODO: extend with regular expressions for "full year"
birthday = birthday.split('.')[2];
var age = today.getFullYear() - birthday;
alert("Age +/- 1 = " + age);
