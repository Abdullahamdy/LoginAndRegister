<?php
require_once('core/init.php');
$user = DB::getInstance()->update('users',4,array(
    'name'=>'bodyelgayar',
    'password'=>'newpassword',
));