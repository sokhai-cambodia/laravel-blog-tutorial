<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function tag() {
        // logic 
        $tags = ['sports', 'national', 'funny'];
        // $ul_tag = '<ul>';
        // foreach($tags as $tag) {
        //     $ul_tag .= "<li>$tag</li>";
        // }
        // $ul_tag .= '<ul>';
        // $html = "
        // <!DOCTYPE html>
        //     <html>
        //     <head>
        //     <title>Page Title</title>
        //     </head>
        //     <body>
            
        //     <h1>This is a Heading</h1>
        //     $ul_tag
            
        //     </body>
        //     </html>
        // ";

        // return $html;
        return view('tag', ['tags' => $tags]);
    }

    public function category() {
        return 'this is category page from controller';
    }

    public function blog() {
        return 'this is blog page from controller';
    }
}
