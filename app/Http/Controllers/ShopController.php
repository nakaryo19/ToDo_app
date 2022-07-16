<?php

namespace App\Http\Controllers;
use App\Models\Stock;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() //追加
   {
        $stocks = Stock::Paginate(6);
        return view('shop',compact('stocks'));
   }
}
