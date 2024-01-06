<?php

namespace App\Exceptions;

use Exception;

class ProductNotFoundException extends Exception
{
    public function render($request)
    {
        return response()->view('product.error');
    }
}
