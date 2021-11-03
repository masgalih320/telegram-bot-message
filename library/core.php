<?php
include("db.php");

/* Main */
class Telebot
{
    /* Membuat variabel */
    public $apiToken = "LETAKKAN TOKEN BOT TELEGRAMMU DISINI";
    public $chatID = "LETAKKAN ID CHAT DISINI";
    public $message;

    /* Membuat Fungsi Pengiriman Pesan */
    function send($pesan)
    {
        $this->message = $pesan;

        /* Setting Postdata */
        $postdata = "chat_id=$this->chatID&disable_web_page_preview=1&text=$this->message";

        /* Curl Start */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$this->apiToken/sendMessage");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        /* Curl End */

        /* Curl Result */
        $hasil = curl_exec($ch);
        curl_close($ch);
        return $hasil;
    }
}
