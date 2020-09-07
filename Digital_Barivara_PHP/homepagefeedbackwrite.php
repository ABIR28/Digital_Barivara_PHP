<?php

$Name=$_POST['Name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comment=$_POST['comment'];
$submit=$_POST['submit'];

$filename="feedback.xml";
$xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
	
      $xml->startElement('information');
         $xml->startElement("userdata");
	     $xml->writeElement("Name",$Name);
	     $xml->writeElement("email",$email);
	     $xml->writeElement("phone",$phone);
	     $xml->writeElement("comment",$comment);
      $xml->endElement();

    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file,FILE_APPEND);
    
    //$xml->flush(); //print on screen no file output

echo " <h2>Feedback submit successfuly!</h2>
</br>
<a href='index.php'>go back</a>";
$xml->endElement();

    $xml->endDocument();
?>