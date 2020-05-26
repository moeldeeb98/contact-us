<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\messages\Store;
use App\models\Message;

class HomeController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function store(Store $request){
        Message::create($request->all());
        return redirect()->route('contact-us.index')->with('alert', 'The message has been sent successfully');
    }
}
