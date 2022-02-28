<h1> <u>Sri lankan mobile phone number validator </u></h1>

<div>version 1.0 </div>

<p>This code is made to validate Sri Lankan mobile phone numbers 
and you can use this in your forms </p>

<p>You can use this regular expression with other languages as well here it has 
used with PHP</p>

<h5>Install this as a composer package 👇</h5>

composer require wishva/sri_lanka_mobile_number_validator

<h5>Sample code</h5>

<p>

"<?php



use MobileNumberValidation\MobileNumberValidator;

include_once 'vendor/autoload.php';

$numberValidateObj = new MobileNumberValidator();

if($numberValidateObj->mobileValidatorFunction("0772846951"))

{

    echo "yes";
    
}else{

    echo "no";
    
} "

</p>
