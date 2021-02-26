<?php
namespace App\Models;

class UserModel
{
    private $firstName;
    private $lastName;
    private $email;
    private $password;
    
    // Class Constructor
    public function __construct($firstName, $lastName, $email, $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }
    
    /**
     *
     * Getter Method -> firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }
    
    /**
     *
     * Getter Method -> lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }
    
    /**
     *
     * Getter Method -> email
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     *
     * Getter Method -> password
     */
    public function getPassword()
    {
        return $this->password;
    }
}