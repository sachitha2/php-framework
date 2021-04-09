<?php
namespace app\models;
use app\core\Model;

class RegisterModel extends Model{
    public string $firstName;
    public string $lName;
    public string $email;
    public string $pass;
    public string $passConfirm;


    public function register()
    {
        echo "Creating new user";
    }

}

?>