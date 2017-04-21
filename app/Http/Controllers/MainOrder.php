<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class MainOrder extends Controller
{
  public function sending() {
    $data['success'] = true;

    $name_ = Input::get('userName');
    $phone_ = Input::get('userPhone');
    $quantity = Input::get('quantity');
    $price_ = ($quantity/1.5)*600;

    if($name_ == "")
      $data['success'] = false;

    // if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email_))
    //   $data['success'] = false;

    Mail::send(
      'email.main-order',
      [
        'name' => $name_,
        'phone' => $phone_,
        'quantity' => $quantity,
        'price' => $price_
      ],
      function($message) use ($name_, $phone_, $price_, $quantity) {
        $message->to('zakaz@honeypro.ru')->subject('Заявка на мёд!');
      }
    );

    $data['success'] = true;
    return response()->json(['message' => 'succes']);
  }
}
