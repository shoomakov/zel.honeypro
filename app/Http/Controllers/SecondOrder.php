<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\CleanController;

class SecondOrder extends Controller
{
  public function sending() {

    $data['success'] = true;

    $name_ = Input::get('name');
    $email_ = Input::get('email');
    $quantity = Input::get('secondQuantity');
    $price_ = ($quantity/1.5)*600;

    if($name_ == "")
      $data['success'] = false;

    if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email_))
      $data['success'] = false;

    Mail::send(
      'email.second-order',
      [
        'name' => $name_,
        'email' => $email_,
        'quantity' => $quantity,
        'price' => $price_
      ],
      function($message) use ($name_, $email_, $price_, $quantity) {
        $message->to('zakaz@honeypro.ru')->subject('Заявка на мёд!');
      }
    );

    $data['success'] = true;
    return response()->json(['message' => 'succes']);

  }
}
