
 <?php
 error_reporting(E_ERROR | E_PARSE);
 $first = $_POST["firstname"]."\n";
 $last = $_POST["lastname"]."\n";
 $eadd = $_POST["email"]."\n";
 $contact = $_POST["phone"]."\n";
 $details = $_POST["subject"]."\n";
 ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: comic sans MS;}
 {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  box-shadow:0 0 15px 4px rgba(0,0,0,0.06);
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=text], textarea{
box-shadow:0 0 4px rgba(0,0,0,0.5);
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 10px;
  background-color: #f2f2f2;
  padding: 5px;
  width: 50%;
}
label.required:after{
color: red;
content: " *";
}
</style>
</head>
<body onload='document.form1.fname.focus()'>

<h3>Contact Form</h3>

<div class="container">
  <form name = "form1" method="post" >
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

   <label for="email" class="required">Email Address</label>
    <input type="text" id="email" name="email" placeholder="Your Email Address.." required/>

<label for="phone">Contact Number</label>
    <input type="text" id="phone" name="phone" placeholder="Add Country Code at the beginning">

    <label for="subject" class="required">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" name="submit" value="Submit" onclick="ValidateEmail(document.form1.email)">
  </form>
</div>
<script>
function ValidateEmail(inputText)
{
var mailformat = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
if(!inputText.value.match(mailformat))
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
}
}

//function alertfunc()
//{
//alert ("Your form has been submitted successfully!");
//document.form1.reset();
//}
</script>
 <?php
 $f_data = '
FirstName: '.$first.'
LastName: '.$last.'
Email: '.$eadd.'
Phone: '.$contact.'
Subject: '.$details.'
====================================================
';

	 $file=fopen("output.txt", "a");
	 fwrite($file,$f_data);


fclose($file);
if (isset($_POST['submit'])) { 
    echo "<script type='text/javascript'>alert('Your form has been submitted sucessfully!');</script>"; 
} 

 //}
?>
</body>
</html>
