<?php
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;

  use App\Product;
  use App\Category;
  use App\Prod_cat;

  class NUserController extends Controller{
    public function one(){
      return view('test.users', [
        'categories' => Category::all(),
      ]);
    }

  }
