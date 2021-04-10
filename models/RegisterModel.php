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

    public function rules(): array
    {
        return [
            'firstName' => [self::RULE_REQUIRED],
            'lName' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED,self::RULE_EMAIL],
            'pass' => [self::RULE_REQUIRED,[self::RULE_MIN,'min'=>8],[self::RULE_MAX,'max'=>24]],
            'passConfirm' => [self::RULE_REQUIRED,[self::RULE_MATCH,'match'=>'pass']],
        ];
    }

}

?>