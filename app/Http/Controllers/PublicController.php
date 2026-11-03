<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {

    $cards = [
        [
            'id' => 1,
            'title'=>'The Beauty of Discovery',
            'quote' => "Travel is not just about reaching a destination; it's about discovering the beauty hidden along the way."
        ],
        [
            'id' => 2,
            'title'=>'Beyond the Horizon',
            'quote' => "Life begins where your comfort zone ends. Take the road less traveled and let adventure find you."
        ],
        [
            'id' => 3,
            'title'=>'Collect Moments',
            'quote' => "Don't collect things, collect moments, explore places, meet people, and create memories that last forever."
        ]
    ];

    return view('Homepage', compact('cards'));

}
}
