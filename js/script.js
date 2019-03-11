
//function that check the name
function nameValidation(){
    var fname = myForm.fName.value;
    var p1 = document.getElementById("resultname");
    if(fname == ""){
        p1.innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
        document.getElementById("imgname").src="images/wrong.png";
    }else if(!isNaN(fname)){
        p1.innerHTML=("Το πεδίο δεν μπορεί να είναι αριθμός!");
        document.getElementById("imgname").src="images/wrong.png";
    }else{
        document.getElementById("imgname").src="images/correct.png";
        p1.innerHTML="";
    }
}
//function that check the surname
function snmValidation(){
    var lname = myForm.lName.value;
    var p2 = document.getElementById("resultsname");
    if(lname == ""){
        p2.innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
        document.getElementById("imgsname").src="images/wrong.png";
    }else if(!isNaN(lname)){
        p2.innerHTML=("Το πεδίο δεν μπορεί να είναι αριθμός!");
        document.getElementById("imgsname").src="images/wrong.png";
    }else{
        document.getElementById("imgsname").src="images/correct.png";
        p2.innerHTML="";
    }
}
//function that check the email
function emailValidation(){
    var email = myForm.Email.value;
    var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if(email == ""){
        document.getElementById("resultemail").innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
        document.getElementById("imgemail").src="images/wrong.png";
    }else if (pattern.test(email)==false){
        document.getElementById("resultemail").innerHTML=("Το email δεν έχει τι σωστή μορφή!");
        document.getElementById("imgemail").src="images/wrong.png";
    }else{
        document.getElementById("imgemail").src="images/correct.png";
        document.getElementById("resultemail").innerHTML="";
    }
}
//function that check that the email confirmation is the same
function emailValidation2(){
    var email = myForm.Email.value;
    var email2 = myForm.Email2.value;
    if(email2 == ""){
        document.getElementById("resultemail2").innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
        document.getElementById("imgemail2").src="images/wrong.png";
    }else if(email2 != email){
        document.getElementById("resultemail2").innerHTML=("Πρέπει να είναι ίδιο το email!");
    }else{
        document.getElementById("imgemail2").src="images/correct.png";
        document.getElementById("resultemail2").innerHTML="";
    }
}
//function that check the phone
function phoneValidation(){
    var phone = myForm.Phone.value;
    var PLength = phone.length;
    var pattern=/^[2,6]{1}[0-9]{9}$/;
    var checkString = pattern.test(phone);
    var p = document.getElementById("resultphone");
    if(phone == ""){
        p.innerHTML=("Δεν πρέπει να είναι κενό το πεδίο!");
        document.getElementById("imgphone").src="images/wrong.png";
    }else if(PLength!=10){                
        p.innerHTML=("Το νούμερο πρέπει να είναι 10 αριθμοί!");
        document.getElementById("imgphone").src="images/wrong.png";
    }else if(pattern.test(phone)==false){
        p.innerHTML="Το πεδίο πρέπει να ξεκινάει απο 2 ή 6!";
        document.getElementById("imgphone").src="images/wrong.png";
    }else{
        document.getElementById("imgphone").src="images/correct.png";
        p.innerHTML="";
    }
}