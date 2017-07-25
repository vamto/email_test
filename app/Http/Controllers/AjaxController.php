<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NotificationUnisenderModel;

class AjaxController extends Controller
{
    /**
     * actionSendUnisender - отсылка через сервис Unisender
     *
     * ВАЖНО! Изменение кода в теле метода Запрещено!
     */
    public function actionSendUnisender(){
        $send_result = (new NotificationUnisenderModel())
            ->setVars($_POST)
            ->run()
            ->getResult();

        echo json_encode($send_result);

    }
}
