<?php

$EmailFrom = Trim(stripslashes($_POST['Email']));
$EmailTo = "hrd.sandstone@gmail.com";
$Subject = "Leave Request Form";
$Name = Trim(stripslashes($_POST['Name']));
$Email = Trim(stripslashes($_POST['Email']));
$location = Trim(stripslashes($_POST['location']));
$todaydate = Trim(stripslashes($_POST['todaydate']));
$dateleave = Trim(stripslashes($_POST['dateleave']));
$datereturn = Trim(stripslashes($_POST['datereturn']));
$reason = Trim(stripslashes($_POST['reason']));
$Explanation = Trim(stripslashes($_POST['Explanation'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .="Location: ";
$Body .= $location;
$Body .= "\n";
$Body .= "Today's Date: ";
$Body .= $todaydate;
$Body .= "\n";
$Body .= "Date of Leave: ";
$Body .= $dateleave;
$Body .= "\n";
$Body .= "Date of Retrun: ";
$Body .= $datereturn;
$Body .= "\n";
$Body .= "Using: ";
$Body .= $reason;
$Body .= "\n";
$Body .= "Explanation: ";
$Body .= $Explanation;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://employee.sandstonehousing.com/hr_thanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>