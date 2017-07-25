<?php

namespace App;


class NotificationUnisenderModel extends NotificationUnisenderAbstractModel
{
    private $email,
            $sender_name,
            $sender_email,
            $subject,
            $body,
            $api_key="6511eyhgtf9sh9crwdustq77qky41ortkpemucye",
            $list_id="10509729",
            $result;

    public function setVars($vars)
    {
        $this->email=$vars["email"];
        $this->sender_name=$vars["sender_name"];
        $this->sender_email=$vars["sender_email"];
        $this->subject=$vars["subject"];
        $this->body=$vars["body"];

        return $this;
    }

    public function run()
    {
        $post_data=[
            'api_key' => $this->getApiKey(),
            'email' => $this->email,
            'sender_name' => $this->sender_name,
            'sender_email' => $this->sender_email,
            'subject' => $this->subject,
            'body' => $this->body,
            'list_id' => $this->list_id,
        ];

        $this->result=$this->curlSend($this->getApiUrl(),$post_data);

        return $this;
    }

    public function getResult()
    {
        return $this->result;
    }

    public function curlSend($url, $post_data = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_URL, $url);

        return curl_exec($ch);
    }

    public function getApiUrl($method_name = self::METHOD_NAME_SEND_EMAIL, $format = 'json')
    {
        return "https://api.unisender.com/ru/api/$method_name?format=$format";
    }

    public function getApiKey()
    {
        return $this->api_key;
    }



}
