<?php
//Connecting to sql db.
$connect = mysqli_connect("localhost","giftcard_ppdhelp","passhere","giftcard_ppdhelp");
//Sending form data to sql db.
mysqli_query($connect,"INSERT INTO networks (name, offer, image, intructions)
VALUES ('$_POST[post_name]', '$_POST[post_offer]', '$_POST[post_image]', '$_POST[post_intructions]')";
?>