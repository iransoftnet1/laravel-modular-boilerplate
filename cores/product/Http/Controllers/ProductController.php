<?php

namespace Product\Http\Controllers;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function index()
    {
        return $this->resourceData(['foo'=> 'bar'],201);
    }

}
