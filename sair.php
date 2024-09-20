<?php
$pg_atual = 'sair';
session_start();
session_destroy();
header("Location: novo.php");
exit();