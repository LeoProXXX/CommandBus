<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Cart\CartService;

class HelloController extends Controller
{
    public function index(){
        $tmp = new CartService();
        $tmp->generateOrder(['user_id'=>4,'payment_method'=>'qw','bonus'=>456, 'plates'=>48]);
    }
}
