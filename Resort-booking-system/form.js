function formValidation()
{
    //For Nickname
var nname=f1.first_name.value;
var pat=/^[a-z,A-Z]{5}$/;
    if(!pat.test(nname)){
       alert("Nick Name must have only 5 letters")
       f1.first_name.focus();
    }

    //for lastname
var lname=f1.last_name.value;
    if(lname==0){
       alert("Last Name must not be empty")
    }
    var pat=/\d/;
    if(pat.test(lname)){
       alert("Last name should have only letters")
    }

    //firstname
    var fname=f1.nick_name.value;
    if(fname==0){
       alert("Fist Name must not be empty")
    }
    var pat=/\d/;
    if(pat.test(fname)){
       alert("First name should have only letters") 
    }
    //email
    var email=f1.uname.value;
    var pat4= /(\w)+@\w+.\w{2,3}/;
    var pat4result=pat4.test(email);
    if(email==""){
        alert("Enter email")
        
    }
    else if(!pat4result){
        alert("Use alphabets, @ and .")
    }

    //dateofbirth
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
//Loction
var loc=f1.location.value;
    if(loc==0){
       alert("Select Your Paradise")
    }

//Mobile NUmber
var num=f1.cpwd.value;
var pat=/^[0-9]{10}$/;
    if(!pat.test(num)){
       alert("Mobile number must be 10 digits")
    }

    }