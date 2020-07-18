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
        $this->asserRegExp(FILTER_VALIDATE_EMAIL, $email);
    }

    public function TestValidPhoneNumber()
    {

    }

}