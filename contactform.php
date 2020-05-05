<?php

if(isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        
        $mailTo = "Ice4get@googlemail.com";
        $headers = "From: ".$mailFrom;
        $txt = "Du hast eine Email von".$name."bekommen.".$message;
    
        mail($mailTo, $subject, $txt, $headers);
    
        header("Location: index.html?mailsend");
    }



?>
