<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MainSlider extends Controller
{
    public function indexFun(){ 
        $item = [
                    [
                        'id' => '001', 
                        'title' => 'This is First Slider', 
                        'content' => 'Classes are nothing without objects! We can create multiple objects from a class.',
                        'image' => 'asset/image/slider01.jpg'
                    ],
                    [
                        'id' => '002',
                        'title' => 'This is Second Slider', 
                        'content' => 'Sometimes you may need to define routes to a nested resource. For example, a photo resource may have multiple comments',
                        'image' => 'asset/image/slider02.jpg'
                    ],
                    [
                        'id' => '003', 
                        'title' => 'This is Third Slider', 
                        'content' => 'Often, it is not entirely necessary to have both the parent and the child IDs within a URI since the child ID is already a unique identifier.',
                        'image' => 'asset/image/slider03.jpg'
                    ],
                    [
                        'id' => '004', 
                        'title' => 'This is Forth Slider', 
                        'content' => 'When using a custom keyed implicit binding as a nested route parameter, Laravel will automatically scope the query to retrieve the nested',
                        'image' => 'asset/image/slider04.jpg'
                    ],
            
                ];
        
        return view('home',compact('item'));
    }
}
