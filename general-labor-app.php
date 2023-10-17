<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us - Oneliance Property Maintenance Group</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/animation.css">

<script src="js/responsive-nav.js"></script>
    <link rel="stylesheet" href="css/responsive-grid.css" />
    <link rel="stylesheet" href="css/main.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="http://oneliance.com/img/favicon.ico" />
    <link rel="stylesheet" href="css/responsive-nav.css">
<link rel="stylesheet" href="css/nav-styles.css">
    <script src="js/vendor/modernizr.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/ajax-contact.js"></script>
    <script src="js/vendor/modernizr-2.7.1.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <meta name="description" content="Want to get in touch with us to learn more about our services? Contact Us and we will 
get back with you as quickly as possible.">
  </head>
  <body>

  <div class="headwrap contain-to-grid sticky">
    <div class="row">
      <a class="nav-logo" href="http://oneliance.com">
        <img class="main-logo" alt="" src="http://oneliance.com/img/main-logo.png">
      </a>
      <nav class="nav-collapse" data-topbar role="navigation" data-options="sticky_on: large">
        <ul>
          <li><a href="about">ABOUT</a></li>
          <li><a href="services">SERVICES</a></li>
          <li><a href="employment">EMPLOYMENT</a></li>
          <!--<li><a href="partners">PARTNERS</a></li>-->
          <li><a href="#">CONTACT</a></li>
          <li><a href="#" class="btn-nav">FREE ESTIMATE</a></li>
        </ul>
      </nav>
    </div>
  </div>

<div class="wrapper">

<div class="hero">
  <div class="content">
  </div>
</div> 



<?php
require('fpdf.php');


class PDF extends FPDF
{
    function ChapterBody($file)
{
    // Read text file
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Arial','',12);
    // Output justified text
    $this->MultiCell(0,5,$txt);
    // Line break
    $this->Ln();
    // Mention in italics
    $this->SetFont('Arial','I');
    $this->Cell(0,5,'(end of excerpt)');
}

function PrintChapter($num, $title, $file)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
}
}

$logoFile = "img/logo.png";
$logoXPos = 10;
$logoYPos = 10;
$logoWidth = 50;
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mi = $_POST['mi'];
$date = $_POST['date'];
$streetaddress = $_POST['streetaddress'];
$aptnum = $_POST['aptnum'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$dateavailable = $_POST['dateavailable'];
$desiredsalary = $_POST['desiredsalary'];
$preferredfield = $_POST['preferredfield'];
$position = $_POST['position'];
$uscitizenyes = $_POST['uscitizenyes'];
$uscitizenno = $_POST['uscitizenno'];
$authorizedyes = $_POST['authorizedyes'];
$authorizedno = $_POST['authorizedno'];
$prevemployeeyes = $_POST['prevemployeeyes'];
$prevemployeeno = $_POST['prevemployeeno'];
$whenprev = $_POST['whenprev'];
$felonyyes = $_POST['felonyyes'];
$felonyno = $_POST['felonyno'];
$explainfel = $_POST['explainfel'];
$hs = $_POST['hs'];
$hsaddress = $_POST['hsaddress'];
$hsfrom = $_POST['hsfrom'];
$hsto = $_POST['hsto'];
$hsgradyes = $_POST['hsgradyes'];
$hsgradno = $_POST['hsgradno'];
$diploma = $_POST['diploma'];
$college = $_POST['college'];
$collegeaddress = $_POST['collegeaddress'];
$collegefrom = $_POST['collegefrom'];
$collegeto = $_POST['collegeto'];
$collgradyes = $_POST['collgradyes'];
$collgradno = $_POST['collgradno'];
$degree = $_POST['degree'];
$other = $_POST['other'];
$otheraddress = $_POST['otheraddress'];
$otherfrom = $_POST['otherfrom'];
$otherto = $_POST['otherto'];
$othgradyes = $_POST['othgradyes'];
$othgradno = $_POST['othgradno'];
$otherdegree = $_POST['otherdegree'];
$refname = $_POST['refname'];
$refrelationship = $_POST['refrelationship'];
$refcompany = $_POST['refcompany'];
$refphone = $_POST['refphone'];
$refaddress = $_POST['refaddress'];
$refnametwo = $_POST['refnametwo'];
$refrelationshiptwo = $_POST['refrelationshiptwo'];
$refcompanytwo = $_POST['refcompanytwo'];
$refphonetwo = $_POST['refphonetwo'];
$refaddresstwo = $_POST['refaddresstwo'];
$refnamethree = $_POST['refnamethree'];
$refrelationshipthree = $_POST['refrelationshipthree'];
$refcompanythree = $_POST['refcompanythree'];
$refphonethree = $_POST['refphonethree'];
$refaddressthree = $_POST['refaddressthree'];
$prevcompany = $_POST['prevcompany'];
$prevcompphone = $_POST['prevcompphone'];
$prevcompaddress = $_POST['prevcompaddress'];
$supervisor = $_POST['supervisor'];
$jobtitle = $_POST['jobtitle'];
$startingsalary = $_POST['startingsalary'];
$endingsalary = $_POST['endingsalary'];
$responsibilities = $_POST['responsibilities'];
$jobfrom = $_POST['jobfrom'];
$jobto = $_POST['jobto'];
$reasonforleaving = $_POST['reasonforleaving'];
$contactemployeryes = $_POST['contactemployeryes'];
$contactemployerno = $_POST['contactemployerno'];
$prevcompanytwo = $_POST['prevcompanytwo'];
$prevcompphonetwo = $_POST['prevcompphonetwo'];
$prevcompaddresstwo = $_POST['prevcompaddresstwo'];
$supervisortwo = $_POST['supervisortwo'];
$jobtitletwo = $_POST['jobtitletwo'];
$startingsalarytwo = $_POST['startingsalarytwo'];
$endingsalarytwo = $_POST['endingsalarytwo'];
$responsibilitiestwo = $_POST['responsibilitiestwo'];
$jobfromtwo = $_POST['jobfromtwo'];
$jobtotwo = $_POST['jobtotwo'];
$reasonforleavingtwo = $_POST['reasonforleavingtwo'];
$contactemployertwoyes = $_POST['contactemployertwoyes'];
$contactemployertwono = $_POST['contactemployertwono'];
$militarybranch = $_POST['militarybranch'];
$militaryfrom = $_POST['militaryfrom'];
$militaryto = $_POST['militaryto'];
$rankdischarge = $_POST['rankdischarge'];
$typedischarge = $_POST['typedischarge'];
$explaindischarge = $_POST['explaindischarge'];
$militarybranch = $_POST['militarybranch'];
$signature = $_POST['signature'];
$sigdate = $_POST['sigdate'];


$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image( $logoFile, $logoXPos, $logoYPos, $logoWidth );
$pdf->SetFont('Helvetica','B',14);
$pdf->Multicell(0,2,"\n\n\n\n\n\n\n\n");
$pdf->SetTextColor(0,61,113);
$pdf->Cell(0,0,"General Labor Application", 0, 1, 'C');
$pdf->Multicell(0,2,"\n\n\n\n\n");
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Helvetica','B',13);
$pdf->Cell(40,10,"Application Information",0,2);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"First Name: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(35,10,"$firstname",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Last Name: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$lastname",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(22,10,"Middle initial: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$mi",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(10,10,"Date: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$date",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(26,10,"Street address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(100,10,"$streetaddress",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(29,10,"Apartment/Unit #: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$aptnum",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(9,10,"City: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(50,10,"$city",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"State: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(50,10,"$state",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(18,10,"ZIP Code: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$zip",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(13,10,"Phone: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(35,10,"$phone",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"Email: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(90,10,"$email",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(25,10,"Date Available: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$dateavailable",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(26,10,"Desired Salary: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$desiredsalary",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(90,10,"$preferredfield",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(33,10,"Position Applied for: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(100,10,"$position",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(62,10,"Are you a citizen of the United States? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$uscitizenyes $uscitizenno",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(71,10,"If no, are you authorized to work in the U.S.? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$authorizedyes $authorizedno",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(65,10,"Have you ever worked for this company? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$prevemployeeyes $prevemployeeno",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(22,10,"If yes, when? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->MultiCell(0,5, "$whenprev\n\n\n", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(67,10,"Have you ever been convicted of a felony? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$felonyyes $felonyno",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(24,10,"If yes, explain: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->MultiCell(0,5, "$explainfel\n\n\n", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','B',13);
$pdf->Cell(40,10,"Education",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(24,10,"High School: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(50,10,"$hs",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$hsaddress",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"From: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$hsfrom",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(7,10,"To: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$hsto",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(32,10,"Did you graduate? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$hsgradyes $hsgradno",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(16,10,"Diploma: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$diploma",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(15,10,"College: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(50,10,"$college",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$collegeaddress",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"From: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$collegefrom",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(7,10,"To: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$collegeto",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(32,10,"Did you graduate? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$collgradyes $collgradno",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(14,10,"Degree: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$degree",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(15,10,"Other: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(50,10,"$other",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$otheraddress",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"From: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$otherfrom",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(7,10,"To: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$otherto",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(32,10,"Did you graduate? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$othgradyes $othgradno",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(14,10,"Degree: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$otherdegree",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->SetFont('Helvetica','B',13);
$pdf->Cell(40,10,"References",0,2);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"Please list three professional references.",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Full Name: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(45,10,"$refname",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(24,10,"Relationship: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$refrelationship",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Company: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(60,10,"$refcompany",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(13,10,"Phone: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(35,10,"$refphone",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$refaddress",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Full Name: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(45,10,"$refnametwo",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(24,10,"Relationship: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$refrelationshiptwo",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Company: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(60,10,"$refcompanytwo",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(13,10,"Phone: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(35,10,"$refphonetwo",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$refaddresstwo",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Full Name: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(45,10,"$refnamethree",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(24,10,"Relationship: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$refrelationshipthree",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Company: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(60,10,"$refcompanythree",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(13,10,"Phone: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(35,10,"$refphonethree",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$refaddressthree",0,1);
$pdf->SetFont('Helvetica','B',13);
$pdf->Cell(40,10,"Previous Employment",0,2);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Company: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(60,10,"$prevcompany",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(13,10,"Phone: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(35,10,"$prevcompphone",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(95,10,"$prevcompaddress",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(21,10,"Supervisor: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$supervisor",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Job Title: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(45,10,"$jobtitle",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(28,10,"Starting Salary: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$startingsalary",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(26,10,"Ending Salary: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$endingsalary",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(30,10,"Responsibilities: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->MultiCell(0,5, "$responsibilities\n\n\n", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"From: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$jobfrom",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(7,10,"To: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$jobto",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(35,10,"Reason for leaving: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->MultiCell(0,5, "$reasonforleaving\n\n\n", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(95,10,"May we contact your previous supervisor for a reference? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$contactemployeryes $contactemployerno",0,1);

$pdf->SetFont('Helvetica','',10);
$pdf->Cell(20,10,"Company: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(60,10,"$prevcompanytwo",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(13,10,"Phone: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(35,10,"$prevcompphonetwo",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Address: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(95,10,"$prevcompaddresstwo",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(21,10,"Supervisor: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$supervisortwo",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(17,10,"Job Title: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(45,10,"$jobtitletwo",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(28,10,"Starting Salary: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$startingsalarytwo",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(26,10,"Ending Salary: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(20,10,"$endingsalarytwo",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(30,10,"Responsibilities: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->MultiCell(0,5, "$responsibilitiestwo\n\n\n", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"From: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$jobfromtwo",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(7,10,"To: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$jobtotwo",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(35,10,"Reason for leaving: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->MultiCell(0,5, "$reasonforleavingtwo\n\n\n", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(95,10,"May we contact your previous supervisor for a reference? ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(10,10,"$contactemployertwoyes $contactemployertwono",0,1);


$pdf->SetFont('Helvetica','B',13);
$pdf->Cell(40,10,"Military Service",0,2);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(15,10,"Branch: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(65,10,"$militarybranch",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(11,10,"From: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$militaryfrom",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(7,10,"To: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(22,10,"$militaryto",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(33,10,"Rank at Discharge: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$typedischarge",0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(55,10,"If other than honorable, explain: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->MultiCell(0,5, "$explaindischarge\n\n\n", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','B',13);
$pdf->Cell(40,10,"Disclaimer and Signature",0,2);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"I certify that my answers are true and complete to the best of my knowledge.",0,2);
$pdf->MultiCell(0,5, "If this application leads to employment, I understand that false or misleading information in my application or interview may result in my release.", 0, 'J', 0,1);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(19,10,"Signature: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(50,10,"$signature",0,0);
$pdf->SetFont('Helvetica','',10);
$pdf->Cell(10,10,"Date: ",0,0);
$pdf->SetFont('Helvetica','B',10);
$pdf->Cell(40,10,"$sigdate",0,2);

$pdf->Output();
?>

</body></html>