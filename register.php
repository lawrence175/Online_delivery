<?php
session_start();
$conn = mysqli_connect("127.0.0.1","root","cyber","shakazulu");
if(!$conn){  
  die('Could not connect: '.mysqli_connect_error());  
}
if (isset($_POST['submit']))
{
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$location=$_REQUEST['location'];
$mob=$_REQUEST['mob'];
$addr=$_REQUEST['addr'];
$email=$_REQUEST['email'];
$pw=$_REQUEST['pw'];
$cpw=$_REQUEST['cpw'];
$sql = "INSERT INTO user(`fname`,`lname`,`location`,`mob`,`addr`,`email`,`pw`,`cpw`) VALUES ('$fname', '$lname', '$location', '$mob', '$addr', '$email', '$pw', '$cpw');";
	if(mysqli_query($conn, $sql))
{  
	$message = "You have been successfully registered,Now you can login and place order";
}
else
{  
	$message = "Could not insert record"; 
}
	echo "<script type='text/javascript'>alert('$message');</script>";
	$sql1 = "INSERT INTO php_users_login(`email`, `password`) VALUES ('$email', '$pw');";
	if(mysqli_query($conn, $sql1))
	{  
		$message1 = "Added to shaka Zulu Customer Management ";
	}
	else
	{  
		$message1 = "Could not insert record";
	}	 
	echo "<script type='text/javascript'>alert('$message1');</script>";}
?>
<HTML>
<HEAD>
<TITLE>ShakaZulu Foods</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<LINK REL="STYLESHEET" HREF="style.css">
<SCRIPT type="text/javascript">
function validate()
{
	var fname=document.getElementById("fname");
	var lname=document.getElementById("lname");
	var location=document.getElementById("location");
	var mob=document.getElementById("mob");
	var addr=document.getElementById("addr");
	var EmailId=document.getElementById("email");
	var pw=document.getElementById("pw");
	var cpw=document.getElementById("cpw");
	var alphaExp = /^[a-zA-Z]+$/;
	var atpos = EmailId.value.indexOf("@");
    var dotpos = EmailId.value.lastIndexOf(".");
 	if(pw.value.length< 8 || cpw.value.length< 8)
	{
		alert("Please enter a password of atleast 8 characters");
		pw.focus();
		return false;
	}
	else if (pw.value.length != cpw.value.length) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	else if (pw.value != cpw.value) 
	{
		alert("Passwords do not match.");
		pw.focus();
        return false;
    }
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=EmailId.value.length) 
	{
        alert("Enter valid email-ID");
		EmailId.focus();
        return false;
   	}
	if(fname.value==null || fname.value=="")
	{
		fname.focus();
		alert("Enter valid first name");
		return false;
	}
	if(fname.value.match(alphaExp)){}
	else{
		alert("First name can have only letters");
		fname.focus();
		return false;
	}
	if(lname.value==null || lname.value=="")
	{
		lname.focus();
		alert("Enter valid last name");
		return false;
	}
	if(lname.value.match(alphaExp)){}
	else{
		alert("Last name can have only letters");
		lname.focus();
		return false;
	}
	if(mob.value==null || mob.value==" ")
	{
		alert("Please Enter Mobile Number");
		mob.focus();
		return false;
	}
	if (isNaN(mob.value))
	{
		alert(" Your Mobile Number must be Integers");
		mob.focus();
		return false;
	}
	if((mob.value.length!= 10))
	{
		alert("Enter the valid Mobile Number(Like : 9669666999)");
		mob.focus();
		return false;
	}
	if(location.selectedIndex==0)
	{
		alert("Please select location");
		location.focus();
		return false;		
	}
	if(addr.value==" " || addr.value=="")
	{
		alert("Please Enter Your Address");
		addr.focus();
		return false;
	}
	if (confirm("Do you want to submit your details?") == true) {} 
	else 
	{
       return false;
    }
    var survey=prompt("How did you hear about us? (Used only for survey)");
	return true;
}
</SCRIPT>
</HEAD>
<BODY  background="ads.jpg" link="white" alink="white" vlink="white">
<FONT size="4"><NAV align="right">
<A HREF="index.php">Home</A>&nbsp&nbsp&nbsp
&nbsp<A HREF="help.php">Help</A>&nbsp&nbsp&nbsp<A HREF="howItworks.php">How It Works</A>&nbsp&nbsp&nbsp
<A HREF="register.php">Login/SignUp</A></FONT></NAV>
<FORM name="register" method="post" action="register.php" onsubmit="return validate()">
<TABLE border="1" bordercolor="white">
<CAPTION><FONT size="6" color="WHITE">Enter your details:</FONT></CAPTION>
<TR class="left">
<TD><FONT size="5" color="WHITE">First name:</FONT></TD>
<TD><INPUT name="fname" type="TEXT" placeholder="Enter your first name" size="30" maxlength="30" align="center" id="fname"></TD>
</TR>
<TR class="left">
<TD><FONT size="5" color="WHITE">Last name:</FONT></TD>
<TD><INPUT type="TEXT" name="lname" align="center" size="30" maxlength="30" placeholder="Enter your last name" id="lname"></TD>
</TR>
<TR class="left">
<TD><FONT size="5" color="WHITE">Location:</FONT></TD>
<TD><SELECT name="location" id="location" style="color:#d3d3d3;" onchange="document.postElementById('location').style.color='black';">
<OPTION VALUE="none" disabled selected>-------SELECT YOUR LOCATION-------</OPTION>
<OPTION VALUE="Bugolobi" style="color:black;">Bugolobi</OPTION>
<OPTION VALUE="Kololo" style="color:black;">Kololo</OPTION>
<OPTION VALUE="Nakawa" style="color:black;">Nakawa</OPTION>
<OPTION VALUE="Nakasero" style="color:black;">Nakasero</OPTION>
<OPTION VALUE="Bukoto" style="color:black;">Bukoto</OPTION>
<OPTION VALUE="Mutungo" style="color:black;">Mutungo</OPTION>
<OPTION VALUE="Mbuya" style="color:black;">Mbuya</OPTION>
</SELECT></TD>
</TR>
<TR class="left">
<TD><FONT size="5" color="WHITE">Mobile Number:</FONT></TD>
<TD><INPUT type="TEXT" name="mob" size="30" maxlength="10" placeholder="Enter your mobile number" id="mob"></TD>
</TR>
<TR class="left">
<TD><FONT size="5" color="WHITE">Address:</FONT></TD>
<TD class="left"><TEXTAREA rows="7" cols="33" wrap="physical" placeholder="Enter your Street address or plot number" id="addr" name="addr"></TEXTAREA></TD>
</TR>
<TR class="left">
<TD><FONT size="5" color="WHITE">E-Mail ID:</FONT></TD>
<TD><INPUT name="email" type="TEXT" id="email" placeholder="Enter your E-Mail ID" size="30" maxlength="30"></TD>
</TR>
<TR class="left">
<TD><FONT size="5" color="WHITE">Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="pw" size="30"  id="pw"></TD>
</TR>
<TR class="left">
<TD><FONT size="5" color="WHITE">Confirm Password:</FONT></TD>
<TD><INPUT type="PASSWORD" name="cpw" size="30" id="cpw"></TD>
</TR>
<TR class="left">
<TD colspan="2"><FONT size="4" color="WHITE">
<INPUT type="checkbox" name="tc" value="tc">
I have read and accepted the Terms and Conditions and <BR>&nbsp&nbsp&nbsp&nbsp&nbspPrivacy Policy</FONT></TD>
</TR>
</TABLE>
<P><INPUT TYPE="Submit" value="Submit" name="submit" id="submit" class="button" onclick="if(!this.form.tc.checked){alert('You must agree to the terms first.');return false}">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="Reset" value="Reset" id="reset" class="button"></P></FORM>
<HR width="1000">
<FORM action="login.php">
<P align="CENTER"><FONT size="6" color="white" face="Arial">
Already have an account with us?<BR></FONT>
<INPUT TYPE="submit" value="Login" id="login" class="button">
</P>
</FORM>
</BODY>
<footer><font color="white" face="Arial" size="3">All rights reserved 2019 - ShakaZulu - Foods</font></footer>
</HTML>
