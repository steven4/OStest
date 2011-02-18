<?php

require_once('page_parts_.php');
require_once('forms_.php');
require_once('server.php');
require_once('enter_data_class.php');

echo fHeader('Enter Data in My Form');
$firstname=$_POST['firstname_text'];
$lastname=$_POST['lastname_text'];
$message=$_POST['message_text'];

$data= new formdata();

$data->insert_formdata($firstname, $lastname,$message);


$return_message="Thank you for your message ".$firstname." ".$lastname;

echo my_forms_page_return($return_message);

echo fFooter('');

?>


