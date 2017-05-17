<?php

require "../../../bootstrap/bootstrap.php";

class User
{


    private $name;
    private $email;
    private $userName;
    private $password;

    private $db;

    public function __construct()
    {

        $db = ACTIVE_DB;

        $this->db = $db;

    }

    public function createUser($name, $email, $userName, $password)
    {
        $this->db->create($name, $email, $userName, $password);
    }

    public function updateUser($name, $email, $userName, $password)
    {
        $this->db->update($name, $email, $userName, $password);
    }

    public function deleteUser($id)
    {
        $this->db->delete($id);
    }

    public function listUsers()
    {
        $this->db->listAll();
    }


}

?>