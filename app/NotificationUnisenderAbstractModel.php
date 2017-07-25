<?php

namespace App;


abstract class NotificationUnisenderAbstractModel{


    const METHOD_NAME_SEND_EMAIL = 'sendEmail';



    /**
     * setVars - Установка параметров
     */
    abstract protected function setVars($vars);


    /**
     * run - Исполняет действие
     */
    abstract protected function run();



    /**
     * getResult - возвращает результат
     */
    abstract protected function getResult();



    /**
     * curlSend - Сама отправка
     */
    abstract protected function curlSend($url, $post_data = null);



    /**
     * getUrl - возвращает url API сервиса
     */
    abstract protected function getApiUrl($method_name = self::METHOD_NAME_SEND_EMAIL, $format = 'json');



    /**
     * getApiKey - возвращает ключ API
     */
    abstract protected function getApiKey();











}
