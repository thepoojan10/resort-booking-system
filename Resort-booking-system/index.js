function validate(){
    
    var dob = f1.dob.value;
var year = Number(dob.substr(0, 4));
var month = Number(dob.substr(4, 2)) - 1;
var day = Number(dob.substr(6, 2));
var today = new Date();
var age = today.getFullYear() - year;
if (today.getMonth() < month || (today.getMonth() == month && today.getDate() < day)) {
  age--;
}
if(age>=18){
    alert("Your age is: " + age);
}
else{

    alert("Oops! Insufficient age.");
     
}


}