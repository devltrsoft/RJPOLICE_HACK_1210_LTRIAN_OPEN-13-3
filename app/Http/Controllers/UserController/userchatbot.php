<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;
use Session;
class userchatbot extends Controller
{
    public function index(){

        $locale = Session::get('locale');
        App::setLocale($locale);
        
        $botman=app("botman");
        $botman->hears('hi',function($bot){
            $bot->reply('hello user');
        });
        $botman->hears('hello',function($bot){
            $bot->reply('how are you');
        });
        $botman->listen();
    }
}
