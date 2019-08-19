<?php
require_once 'DatabaseConnection.php';

class RegistrationClass
{
    public $object;

    public function __construct()
    {
        $this->object = (new DatabaseConnection())->connect();
    }

    public function registrationAction($post)
    {
        try {
            $first_name_value = $post['first_name'];
            $last_name_value = $post['last_name'];
            $email_value = $post['email'];
            $password_value = $post['password'];
            $repeat_password_value = $post['repeat_password'];
            $sql = "INSERT INTO user_registration (firstname, lastname,email,password,repeatpassword) VALUES ('$first_name_value','$last_name_value','$email_value','$password_value','$repeat_password_value')";
            if ($this->object->query($sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $this->object->error;
            }

        } catch (Exception $e) {
            print_r($e);
            die;
        }
    }


}