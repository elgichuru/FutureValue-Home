<?php
//get data from the form
$investment= filter_input(INPUT_POST,'investment',FILTER_VALIDATE_FLOAT);
$interest_rate=filter_input(INPUT_POST,'Interest_rate',FILTER_VALIDATE_FLOAT);
$years= filter_input(INPUT_POST,'years',FILTER_VALIDATE_INT);
//validate investment
if ($investment===false){
    $error_message='Investment must be a valid number';
}else if ($investment<=0){
    $error_message='Investment must be greater than 0';
    //validate interest rate
}else if($interest_rate===false){
    $error_message='Interest rate must be a valid number.';
}else if($interest_rate<=0){
    $error_message='Interest must be greater than 0.';
    //validate years
}else if ($years===false){
    $error_message='years must be a valid number.';    
}else if ($years<=0){
    $error_message='Years must be greater than 0.';
}else if($years>30){
    $error_message='Years must notbe greater than 31.';
}else{
    $error_message='';
}           
//if an error occurs go to the index page.
if($error_message !=''){
    
}
?>

