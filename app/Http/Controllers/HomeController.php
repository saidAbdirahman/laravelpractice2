<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $all = Author::with('book')->get();
        // dd($all->toArray());
        foreach($all as $item){
            echo $item->name. '<br>';
            foreach($item->book as $item2){
                echo $item2->title. '<br>';
        }
        echo '<br>';
    }

    }
}