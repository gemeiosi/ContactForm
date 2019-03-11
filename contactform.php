<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

//variable to check & send mail
$value = 0;

//variables of all fields
$name = $_POST["fName"];
$sname = $_POST["lName"];
$email = $_POST["Email"];
$phone = $_POST["Phone"];
$subject = $_POST["Subject"];
$message = $_POST["comments"];

//validation for empty fields 
if(empty($name && $sname && $email && $phone)){
    echo "ΔΕΝ ΜΠΟΡΕΙ ΝΑ ΕΙΝΑΙ ΚΑΠΟΙΟ ΑΠ'ΤΑ ΠΕΔΙΑ ΚΕΝΟ!"."<br/>";
    $value--;
}else{
    $value++;
}
if(empty($subject)){
    echo "Το θέμα είναι υποχρεωτίκο!"."<br/>";
    $value--;
}else{
    $value++;
}
if(empty($message)){
    echo "Το κείμενο είναι υποχρεωτίκο!"."<br/>";
    $value--;
}else{
    $value++;
}

//validation for name
if (!preg_match("/^[a-zA-Zα-ωΑ-Ω ]*$/",$name)) {
    $value--;
    echo "ΤΟ ΟΝΟΜΑ ΣΑΣ ΜΠΟΡΕΙ ΝΑ ΠΕΡΙΕΧΕΙ ΜΟΝΟ ΓΡΑΜΜΑΤΑ!"."<br/>"; 
}else{
    $value++;  
}

//validation for surname
if (!preg_match("/^[a-zA-Zα-ωΑ-Ω ]*$/",$sname)) {
    $value--;
    echo "ΤΟ ΕΠΙΘΕΤΟ ΣΑΣ ΜΠΟΡΕΙ ΝΑ ΠΕΡΙΕΧΕΙ ΜΟΝΟ ΓΡΑΜΜΑΤΑ!"."<br/>"; 
}else{
    $value++;
}

//validation for email
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
    $value--;
    echo "ΤΟ E-mail ΠΟΥ ΚΑΤΑΧΩΡΗΣΑΤΕ ΔΕΝ ΕΙΝΑΙ ΑΠΟΔΕΚΤΟ!"."<br/>";
}else{
    $value++;
}

//validation for phone number
if (!preg_match("/^[2,6]{1}[0-9]{9}$/", $phone)){
    $value--;
    echo "Ο αριθμός τηλεφώνου δεν είναι σωστός!"."<br/>";
}else{
    $value++;  
}

if($value==7){
//Php mailer
  
 require 'PHPMailer/src/Exception.php';
 require 'PHPMailer/src/PHPMailer.php';
 require 'PHPMailer/src/SMTP.php';

//create new PHPMailer instance
 $mail = new PHPMailer;
 $mail -> isSMTP();
 $mail -> SMTPDebug=0;
 $mail -> Host = "titan.indns.gr";
 $mail -> Port = 465;
 $mail -> SMTPAuth = true; 
 $mail -> SMTPSecure = true;
 $mail -> Username = "info@webstartup.gr"; 
 $mail -> Password = "saeprojects2018@@";
 $mail -> setFrom("info@webstartup.gr","Info - Webstartup");
 $mail -> AddAddress($email,$name.$sname);
 $mail -> Subject=$subject;
 $mail -> msgHTML("<h2>ΕΥΧΑΡΙΣΤΟΥΜΕ ΓΙΑ ΤΗΝ ΕΠΙΚΟΙΝΩΝΙΑ</h2>"."<br/>".$message);
if(!$mail->send()){
    echo "Mailer error: ".$mail->ErrorInfo;
 }else{
    echo "ΕΥΧΑΡΙΣΤΟΥΜΕ ΓΙΑ ΤΗΝ ΕΠΙΚΟΙΝΩΝΙΑ";
 }
}

?>