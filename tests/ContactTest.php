<?php
namespace App\Tests;

use App\Entity\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    private $contact;

    public function testSomething()
    {
        $this->assertTrue(true);
    }

    public function initContact()
    {
        $this->contact = new Contact();
        $this->contact->create(
            'MyFirstname',
            'Mylastname',
            'email@email.com',
            '0600000000',
            'JAVA DEV');
    }

    public function FistnameNotEmpty()
    {
        $this->assertNotEmpty($this->contact->getLastname());
    }

    public function testLastnameNotEmpty()
    {
        $this->assertNotEmpty($this->contact->getLastname());
    }

    public function testemailNotEmpty()
    {
        $this->assetNotEmpty($this->contact->getEmail());
    }

    public function testTagNotEmpty()
    {
        $this->$this->assetNotEmpty($this->contact->getTag());
    }

    public function TestValidEmail()
    {
        $email = $this->contact->getEmail();
        $this->assertRegExp(FILTER_VALIDATE_EMAIL, $email);
    }

    public function TestValidPhoneNumber()
    {
         $this->assertRegExp('/^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$/', $this->contact->getPhonenumber());
         $this->contact->setPhoneNumber('+33323000000');
         $this->assertRegExp('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\0-9]*$/', $this->contact->getPhoneNumber());

          $this->contact->setPhoneNumber('03-23-00-00-00');
          $this->assertRegExp('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\0-9]*$/', $this->contact->getPhoneNumber());
    }

}