<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function category1() {
        return "Marbel Edu Games";
    }

    public function category2() {
        return "Marbel and Friends Kids Games";
    }

    public function category3() {
        return "Riri Story Books";
    }

    public function category4() {
        return "Kolak Kids Songs";
    }
}
