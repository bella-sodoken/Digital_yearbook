<?php
require_once __DIR__ ."./../settings/db_class.php";
class users_class extends db_connection
{

    public function createusers_cls($first_name, $last_name, $middle_name, $email, $nationality, $password, $picture)
    {

        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `middle_name`, `email`, `nationality`, `password`, `picture`) VALUES ('$first_name', '$last_name', '$middle_name', '$email', '$nationality', '$password', '$picture');";

        return $this->db_query($sql);
    }

    public function delete_users($user_id)
    {
        $sql = "DELETE FROM `users` WHERE user_id = $user_id";

        return $this->db_query($sql);
    }

    function select_one_user_email_cls($email){
        $sql = "SELECT * FROM users WHERE email='$email'";

        // return $this->db_fetch_one($sql);
        // return $sql;
        $this->db_query($sql);
return $this->db_fetch_one();

    }

    public function select_one_user($user_id)
    {
        $sql = "SELECT `first_name`, `last_name`, `middle_name`, `email`, `nationality`, `password`, `picture` FROM `users` WHERE `user_id` = $user_id";
        $this->db_query($sql);
        return $this->db_fetch_one();
    }

    

    public function select_all_users()
    {
        $sql = "SELECT * FROM `users`";
        $this->db_query($sql);
        return $this->db_fetch_all();
    }
}

// $users = new users_class;

// echo $users->createusers_cls('first_name', 'last_name', 'middle_name', 'email', 'nationality', 'password', 'picture');

// print_r($users->select_all_users());
