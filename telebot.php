<?php
require("library/core.php");

$message = "This is Telegram BOT Message Sender TEST on 2023 with PHP 8\nBy masgalih.net";
$bot_token = "6138391147:AAFFS46kha8ZiK3zf0MY-eKf8OvpG8thATw";
$chat_id = "1048455855";
$sendMessage = new Telebot($bot_token, $chat_id);
$sendMessage->send($message);
