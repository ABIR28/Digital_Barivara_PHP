<?php

$xml = simplexml_load_file('feedback.xml');
foreach($xml->userdata as $userdata){
   echo $userdata->Name."<br>"; 
   echo $userdata->email."<br>"; 
   echo $userdata->phone."<br>"; 
   echo $userdata->comment."<br>"; 
}
?>