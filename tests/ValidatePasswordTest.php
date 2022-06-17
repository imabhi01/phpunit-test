<?php

use PHPUnit\Framework\TestCase;

class ValidatePasswordTest extends TestCase{

    public function testValidLength(){
        $valPass = new ValidatePassword();
        $this->assertTrue($valPass->validLength('123123'));
        $this->assertTrue($valPass->validLength('123adfasdf123'));
        $this->assertTrue($valPass->validLength('12312fasdf3'));
        // $this->assertTrue($valPass->validLength('12'));
        $this->assertTrue($valPass->validLength('123123'));
        $this->assertTrue($valPass->validLength('123123'));
    }

}