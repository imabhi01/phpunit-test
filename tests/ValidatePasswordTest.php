<?php

use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase{

    public function testValidLength(){
        $valPass = new ValidatePassword();
        $this->assertTrue($valPass->validLength('123123'));
    }

}