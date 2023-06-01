<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Owner;

class OwnerController extends Controller
{
  public function inform(){
    $inform = Owner::find(1)->inform;
  }
}