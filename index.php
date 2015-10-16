<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration Page Validation</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
.container{
background-color: #E1E6E8;
padding-top: 5px;
width: 400px;
height: 550px;
border-radius: 10px;
}
</style>
</head>
<body>
	<br/>
<form class = "container" action="submit.php" method="post" onsubmit="return checkform();">
<center><h3 style = "color:#2E8518;font-family:arial;">Register</h3></center>
<label class="control-label ng-binding">Name:</label><input type='text' id="fname" name="fname" style = "width:250px;" class="form-control ng-scope ng-pristine ng-valid"/>
<br/><label class="control-label ng-binding">Lastname:</label><input type='text' id="lname" name="lname" style = "width:250px;" class="form-control ng-scope ng-pristine ng-valid"/><br/>
<label class="control-label ng-binding">Gender:</label><br/>
<input type="radio" name="radio" value="male"> Male<br/>
<input type="radio" name="radio" value="female"> Female<br/><br/>
<font color="#DD0000">Type the characters you see in the picture below <br/><br/></font><span id="txtCaptchaDiv" style="font-family:'Comic Sans MS', cursive, sans-serif;color:#BD0D2D;padding:5px;font-size:22px; width:250px; border-radius:5px;"></span><br/>
<input type="hidden" id="txtCaptcha" /><br/>
<input type="text" name="txtInput" id="txtInput" size="15" style = "width:250px;" class="form-control ng-scope ng-pristine ng-valid" /><br/>
<input class="btn btn-success" type="submit" id="button" value="submit"/>
<button type="reset" class="btn ">Clear</button>
</form>
<script type="text/javascript">

function checkform(){

var message = "";

if(txtInput.value == ""){
message += " Security code should not be empty.\n";
}
if(txtInput.value != ""){
if(ValidCaptcha(txtInput.value) == false){
message += " Security code did not match.\n";
}
}
if(message != ""){
alert(message);
return false;
}
}
//Generates the captcha function
var possibleCharacters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

var a = possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));
var b = possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));
var c = possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));
var d = possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));
var e = possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));
var f = possibleCharacters.charAt(Math.floor(Math.random() * possibleCharacters.length));

var code = a + b + c + d + e + f;
document.getElementById("txtCaptcha").value = code;
document.getElementById("txtCaptchaDiv").innerHTML = code;

// Validate the Entered input aganist the generated security code function
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('txtInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>
</body>
</html>