<?php 
namespace App;



class User
{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $birthday;
    private float $height;
    private bool $clubMember;

    // GET METHODS
    public function getAllUsers(){
        echo('I am working biatch');
    }
    // SET METHODS
    public function setFirstName(string $title)
    {
        $this->firstName = $firstName;
    }

    public function setlastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    // CRUD OPERATIONS
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}