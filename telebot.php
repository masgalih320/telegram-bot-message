<?php
require("library/core.php");

$message = "WRITE YOUR MESSAGE HERE";
$bot_token = "PASTE BOT TOKEN HERE";
$chat_id = "PASTE CHAT ID HERE";
$sendMessage = new Telebot($bot_token, $chat_id);
$sendMessage->send($message);
