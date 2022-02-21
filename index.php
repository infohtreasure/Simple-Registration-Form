<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="Robots" content="index,follow" />
<title>Afe Babalola University Recruitment Processing Online-Form</title>
<link rel="shortcut icon" href="http://abuad.edu.ng/new/wp-content/uploads/2014/10/logo.png" type="image/x-icon" />
<meta name="author" content="Afe Babalola University Recruitment Processing Online-Form" />
<meta name="description" content="Afe Babalola University Recruitment Processing Online-Form">
<meta name="keywords" content="Afe Babalola University Recruitment Processing Online-Form">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
</style>
<body>
<div id="container">
	<div class="content">
	<img src="slide_1.jpg" width="750" height="120" alt="Afe Babalola University"/>
		<form action="index.php" method="post" enctype="multipart/form-data">
        <fieldset>
     	<table width="700" border="0" align="left">
   		<legend>
		<h1>Afe Babalola University E-testing Registration Form</h1>
		
		<a>Welcome to Afe Babalola university e-testing portal, we assume that you have uploaded your CV at our recruitment portal if not please do so now by following this link <a target="_blank" href="http://abuad.edu.ng/vacancy/" class="btn btn-primary"><b>submit CV</b></a> and register for the online test here.</a></br></br>
		
		<center><a><b>After this exercise an sms will be sent to your phone confirming your registration</b></a></center>
		
		  <tr><td><label>First Name <span class="required">*</span></label></td>
		  <td align="left"><input type="text" name="fname" placeholder="First Name"></br></td></tr>
	
          <tr><td><label>Last Name<span class="required">*</span></label></td>
		  <td align="left"><input type="text" name="lname" placeholder="Last Name"></br></td></tr>
		  
          <tr><td><label>E-mail<span class="required">*</span></label></td>
		  <td align="left"><input type="text" name="mi" placeholder="email address"></br></td></td>
		  
          <tr><td><label>Date of Birth<span class="required">*</span></label></td>
		  <td align="left"><input type="text" name="dob" class="input-small" placeholder="(Feb 20)"></br></td></tr>
		  
          <tr><td><label>Tel No.<span class="required">*</span></label></td>
		  <td align="left"><input type="text" name="tel" class="input-xlarge" placeholder="08012345678"></br></td></tr>
		  
		  <tr><td><label for="edit-name">Post applied for:<span class="required">*</span></label></td>
				<td align="left"><select class="select" name="papl" >
					<option value="select-one" >select-one</option>
					<option value="Senior Lecturer (Computer Engineering)">Senior Lecturer (Computer Engineering)</option>
					<option value="Senior Lecturer (Civil Engineering)">Senior Lecturer (Civil Engineering)</option>
					<option value="Senior Lecturer (Electrical / Electronics Engineering)">Senior Lecturer (Electrical / Electronics Engineering)</option>
					<option value="Senior Lecturer (Nursing)">Senior Lecturer (Nursing)</option>
					<option value="Senior Lecturer (Pharmacology)">Senior Lecturer (Pharmacology)</option>
					<option value="Senior Lecturer (Chemical Pathology)">Senior Lecturer (Chemical Pathology)</option>
					<option value="Senior Lecturer (Medical Microbiology &amp; Parasitology)">Senior Lecturer (Medical Microbiology &amp; Parasitology)</option>
					<option value="Senior Lecturer (Morbid Anatomy &amp; Histopathology)">Senior Lecturer (Morbid Anatomy &amp; Histopathology)</option>
					<option value="Senior Lecturer (Community Medicine)">Senior Lecturer (Community Medicine)</option>
					<option value="Senior Lecturer (Haematology)">Senior Lecturer (Haematology)</option>
					<option value="Lecturer I (Medical Microbiology &amp; Parasitology)">Lecturer I (Medical Microbiology &amp; Parasitology)</option>
					<option value="Lecturer I (Morbid Anatomy &amp; Histopathology)">Lecturer I (Morbid Anatomy &amp; Histopathology)</option>
					<option value="Lecturer I (Haematology)">Lecturer I (Haematology)</option>
					<option value="Lecturer I (Chemical Pathology)">Lecturer I (Chemical Pathology)</option>
					<option value="Lecturer I (Community Medicine)">Lecturer I (Community Medicine)</option>
					<option value="Lecturer I (Pharmacology)">Lecturer I (Pharmacology)</option>
					<option value="Lecturer I (Nursing)">Lecturer I (Nursing)</option>
					<option value="Principal Assistant Registrar">Principal Assistant Registrar</option>
					<option value="Senior Assistant Registrar">Senior Assistant Registrar</option>
					<option value="Technologists (Sciences)">Technologists (Sciences)</option>
					<option value="Administrative Officers">Administrative Officers</option>
					<option value="Nurses (Health Centre)">Nurses (Health Centre)</option>
					<option value="Abuad Farm (Production Manager)">Abuad Farm (Production Manager)</option>
					<option value="Abuad Farm (Supervisor and Sales manager)">Abuad Farm (Supervisor and Sales manager)</option>
					<option value="Secretaries">Secretaries</option>
					<option value="Security">Security</option>
					<option value="Porters">Porters</option>
					<option value="others">Others</option>
                </select></br></td></tr>
		  
          <tr><td><label for="file">Upload Picture:<span class="required">*</span> <b>(below 50kb size)</b></label></td>
		  <td align="left"><input type="file" name="file" id="file"><br></td></tr>  
          <tr><td> &nbsp; </td></tr>
		<tr><td colspan="2" align="center"><button type="submit" name="submit" class="btn">Submit</button>
		</td></tr>
        
<tr><td colspan="2"> &nbsp </td></tr>      
<tr><td colspan="2" align="left">        
<?php
$thankyou="index.php";

if(isset($_REQUEST['submit']))
{
$con=mysqli_connect("localhost","examsabu_reg","u%))WK0EvC-t","examsabu_reg");
		// Check connection
		if (mysqli_connect_errno())
		  {
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
		  }
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["file"]["name"]);
		$extension = end($temp);
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$mi=$_POST['mi'];
		$dob=$_POST['dob'];
		$tel=$_POST['tel'];
		$papl=$_POST['papl'];
		$file=$_FILES["file"]["name"];
		$size= $_FILES["file"]["size"];
       
if( empty($lname) || empty($mi) || empty($dob) || empty($tel) || empty($file))
{
	echo "<label class='err'>All field is required</label>";
}
	elseif($size >90000)
	{
		echo "<label class='err'> Image size must not greater than 90kb </label>";
	}
		if ((($_FILES["file"]["type"] == "image/gif")
		|| ($_FILES["file"]["type"] == "image/jpeg")
		|| ($_FILES["file"]["type"] == "image/jpg")
		|| ($_FILES["file"]["type"] == "image/pjpeg")
		|| ($_FILES["file"]["type"] == "image/x-png")
		|| ($_FILES["file"]["type"] == "image/png"))
		&& ($_FILES["file"]["size"] < 90000)
		&& in_array($extension, $allowedExts)) 
		{
		  if ($_FILES["file"]["error"] > 0) 
		  {
			echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
		  } 
		  
				if (file_exists("upload/" . $_FILES["file"]["name"])) 
				{
				  echo " Error <b>&nbsp" . $_FILES["file"]["name"] . " </b> &nbsp&nbsp Another candidate has uploaded an image with this name, rename your picture and upload again. ";
    			} 
				else
				{
				  move_uploaded_file($_FILES["file"]["tmp_name"],
				  "upload/" . $_FILES["file"]["name"]);
				  mysqli_query($con,"INSERT INTO examsabu_reg (fname, lname, mi, dob, tel, papl, filename)
					VALUES ('$fname', '$lname', '$mi', '$dob', '$tel', '$papl', '$file')");
				echo "Data Entered Successfully Saved!";
    			}
				if (file_exists)
				{
				?>

				<?PHP
				/********************************************************************************
				SMS through HTTP API.
				********************************************************************************/
				/* Variables with the values to be sent. */
				$owneremail="info@htreasure.com";
				$subacct="HTREASURE2013";
				$subacctpwd="htreasure2013";
				$sendto=$_POST['tel'];
				$sender="ABUAD E-REG";
				$message="Afe Babalola University E-testing, your registration has been successfuly submited, your username,password,exam date and time will be sent to you soon";
				$thankyou="index.php";
				/* destination number */
				/* sender id */
				/* message to be sent */
				/* create the required URL */
				$url = "http://www.smslive247.com/http/index.aspx?"
				. "cmd=sendquickmsg"
				. "&owneremail=" . UrlEncode($owneremail)
				. "&subacct=" . UrlEncode($subacct)
				. "&subacctpwd=" . UrlEncode($subacctpwd)
				. "&message=" . UrlEncode($message)
				. "&sender=" . UrlEncode($sender)
				. "&sendto=" . UrlEncode($sendto)
				. "&msgtype" . UrlEncode(0);
				/* call the URL */
				if ($f = @fopen($url, "r"))
				{
				$answer = fgets($f, 255);
				if (substr($answer, 0, 1) == "+")
				{
				echo "SMS to $dnr was successful.";
				}
				else
				{
				?>
				<script>location.replace('<?php echo $thankyou;?>')</script>
				<?php
				}
				}
				else
				{
				echo "Error: URL could not be opened.";
				}
				?>
				<?php
				}
		}
	mysqli_close($con);
}
?>
</td></tr>
        </legend>
        </table>
        </fieldset>
		</form>
		<div class="footer"> Copyright © <?php print(date("Y")); ?> <a target="_blank" href="http://abuad.edu.ng" class="btn btn-primary">ABUAD ICT</a> <a target="_blank" href="http://itforum.abuad.edu.ng/index.php/topic,18.msg82.html#new" class="btn btn-primary">Exam date and time</a></div>
    </div>
</div>
</body>
</html>
