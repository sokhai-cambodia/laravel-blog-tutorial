<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function tag() {
        // logic 
        
        return 'this is tag page from controller';
    }

    public function category() {
        return 'this is category page from controller';
    }

    public function blog() {
        return 'this is blog page from controller';
    }
}
