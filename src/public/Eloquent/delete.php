<?php
require "init.php";
$id= $_GET['id'];

if (!empty($id)) {
    $user = User::find($id); //select .. , delete ...
    $user->delete();
    print_r($user);
//    User::destroy(123); //DELETE where id 123
}
