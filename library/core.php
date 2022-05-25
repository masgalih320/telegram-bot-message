<?php
class Telebot
{
    public int $chatID;
    public string $token;

    public function __construct($bot_token, $chat_id)
    {
        $this->chatID = $chat_id;
        $this->token = $bot_token;
    }

    function send($msg)
    {
        $postdata = "chat_id=$this->chatID&disable_web_page_preview=1&text=$msg";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$this->token/sendMessage");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_exec($ch);
        return curl_close($ch);
    }
}
