<?php

 
// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'delivery');

// to read data from form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
  $contact = mysqli_real_escape_string($db, $_POST['contact']);
  $add1 = mysqli_real_escape_string($db, $_POST['street address 1']);
  $add2 = mysqli_real_escape_string($db, $_POST['address2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  
  // insert that data in database
  
	$query = "INSERT INTO orders (firstname,lastname,city,state,zipcode,contact,add1,add2,phone) 
  			  VALUES('$firstname', '$lastname', '$city','$state','$zipcode','$contact','$add1','$add2','$phone')";
  	mysqli_query($db, $query);
  	