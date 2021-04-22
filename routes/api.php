<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::post('auth/login', function(){
    return response()->json([
        "token" => "38389484848484.338484848484848"
    ]);
});

Route::get('movimentoCaixa/template', function(){
    return response()->json([
        [
            "id" => 1, 
            "descricao" => "Gaveta Inicial"
        ],
        ["id" => 2, "descricao" => "Sangria"],
        ["id" => 3, "descricao" => "Recebimento Crediario"]
    ]);
});

Route::get("movimentoCaixa/template/{id}/configuracao", function(){
    return response()->json([
        [
            "campo" => "serie"
        ],
        [
            "campo" => "num_documento"
        ]
    ]);
});

#Modulo (Consumir a Api) <  Middleware >   Pacote Api

#Notificacao -> send [Interface Notificao]
    #email
    #sms
    #push

##EmailNotificacao Implements Notificacao
  #  send()
#SmsNotificacao Implements Notificacao
 #   send()

