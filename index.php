<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>ΦΟΡΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/script.js">
    </script>
    <!---recaptcha link---->
    <script src="https://www.google.com/recaptcha/api.js" async defer>
    </script>
    
</head>
    
    <body>
        <div id="wrapper">
            <h2>ΕΠΙΚΟΙΝΩΝΙΑ ΜΑΖΙ ΜΑΣ</h2>
            <form action="contactform.php" name="myForm" method="POST">
                ΟΝΟΜΑ : <input type="text" onkeyup="nameValidation()" name="fName">
                <img  src="images/wrong.png" id="imgname"/>
                <span class="color" id="resultname"></span><br/>

                ΕΠΙΘΕΤΟ : <input type="text" onkeyup="snmValidation()" name="lName">
                <img  src="images/wrong.png" id="imgsname"/>
                <span class="color" id="resultsname"></span><br/>

                EMAIL : <input type="text" onkeyup="emailValidation()" name="Email">
                <img  src="images/wrong.png" id="imgemail"/>
                <span class="color" id="resultemail"></span><br/>

                Retype EMAIL : <input type="text" onkeyup="emailValidation2()" name="Email2">
                <img  src="images/wrong.png" id="imgemail2"/>
                <span class="color" id="resultemail2"></span><br/>

                ΤΗΛΕΦΩΝΟ : <input type="text" onkeyup="phoneValidation()" name="Phone">
                <img  src="images/wrong.png" id="imgphone"/>
                <span class="color" id="resultphone"></span><br/>

                ΘΕΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ : <input type="text" name="Subject">
                <br/>
                
                ΚΕΙΜΕΝΟ :<br/>
                <textarea  name="comments" maxlength="1000" cols="60" rows="6"></textarea><br/>
                
                <div class="g-recaptcha" data-sitekey="6LdxPVYUAAAAAGJ1C1Z3zSu9LJWx1lSCNmKHAkMR"></div>
                <br/>

                <input type="submit" value="Αποστολή">
                <input type="reset" value="Καθαρισμός">
            </form>
        </div>
    </body>
    
</html>