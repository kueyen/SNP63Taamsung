<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;

class BillController extends Controller
{
  public function addBill(Request $request){
      return Bill::create($request->all());
  }
}
