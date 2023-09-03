<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Capital;
use App\Models\Country;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function OneToOne(){
    //     $country = Country::find(1)->country;
    //     dd($country);
    // }

    public function index2(Request $request)
    {
        $cont = Country::find(2)->name;
  
        dd($cont);
    }


}
