<?php 
require_once __DIR__.'\src\SayHello.php';
use nggthanhlong\sayhello\SayHello;
$hello = new SayHello();
$hello->world();
echo '123';
?>