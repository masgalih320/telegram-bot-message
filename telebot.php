<?php
require("library/core.php");

$pesan = "Bayar Utang Wooeee!!!!";
$sender = new Telebot();
$sender->send($pesan);