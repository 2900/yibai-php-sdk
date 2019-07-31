<?php
namespace src\Domain;

class SmsSubmit
{
    public $mobile;
    public $message;

    public function __construct($mobile, $message)
    {
        $this->mobile = $mobile;
        $this->message = $message;
    }
}