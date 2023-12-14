<?php
require_once __DIR__ ."./../classes/users_class.php";


function createusers_ctr($first_name, $last_name, $middle_name, $email, $nationality, $password, $picture)
{
    $user = new users_class;
    return $user->createusers_cls($first_name, $last_name, $middle_name,  $email, $nationality, $password, $picture);
}

function delete_users($user_id){
      $user = new users_class;
    return $user->delete_users($user_id);


}

function select_one_users_ctr($user_id)
{
    $user = new users_class;
 
    return $user->select_one_user($user_id);
}
// function update_users($user_id, $new_name, $middle_name, $email, $nationality, $password, $picture){
//     $user = new users_class;    
//     return $user->update_users($user_id, $new_name, $middle_name, $email, $nationality, $password, $picture);
// }

function select_one_users_email_ctr($email){
    $user = new users_class;
    return $user->select_one_user_email_cls($email);
}

function select_all_users(){
    $user = new users_class;
    return $user->select_all_users();
}

// print_r(select_one_users_email_ctr('bellasodoken93@gmail.com'));
?>