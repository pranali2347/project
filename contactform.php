<?php
   
  if (isset($_post['submit'])) {
    $name = $_post['name'];
    $subject = $_post['subject'];
    $mailFrom = $_post['mail'];
    $message = $_post['message'];
      
     $mailTo = "nidhipatil671@gmail.com";
     $hearders = "From: ".$mailFrom;
     $txt = "You have received an email from ".$name.".\n\n".$message;

     mail($mailTo, $subject, $txt, $hearders);
     header("Location: index.php?mailsend");
   }