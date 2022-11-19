<?php
require_once('core/init.php');
$user = DB::getInstance()->get('users',array('username','=','abdullah'));
if(!$user->count()){
echo 'NO User';
}else{
echo 'OK';
}
