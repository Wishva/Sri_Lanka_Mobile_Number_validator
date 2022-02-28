<?php


namespace MobileNumberValidation;


class MobileNumberValidator
{
    private $mobileNumber;


    function mobileValidatorFunction($number)
    {
        $this->mobileNumber = htmlspecialchars($number, ENT_QUOTES);

        if (preg_match("/^(07[1,2,5,6,7,8][0-9]\d\d\d\d\d\d)$/", $this->mobileNumber)) {
            return true;
        } else {
            return false;
        }
    }


}