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
    include 'index.php';
    exit();
}
//calculate future value
$future_value=$investment;
for($i=1;$i<=$years;$i++){
    $future_value=$future_value+($future_value+$interest_rate*0.01);
}
$investment_f='$'. number_format($investment,2);
$yearly_rate_f=$interest_rate.'%';
$future_value_f='$'.number_format($future_value,2);
?>
<!doctype html>
<head>
    <title>Future Value Calculator.</title>
    <link rel="stylesheet" type='text/css' href="main.css"/>
    <link rel='icon' type="x-icon/image" href='favico.ico'>
    </head>
    <body>
        <main>
            <h1>Future Value Calculator</h1>
            <label>Investment:</label>
            <span><?php $investment_f; ?></span><br>
            <label>Yearly Interest Rate:</label>
            <span><?php $yearly_rate_f; ?></span><br>
            <label>Future Value:</label>
            <span>$future_value_f</span><br>
        </main>
    </body>

