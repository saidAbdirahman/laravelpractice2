<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    //     $all = Author::with('book')->get();
    //     // dd($all->toArray());
    //     foreach($all as $item){
    //         echo $item->name. '<br>';
    //         foreach($item->book as $item2){
    //             echo $item2->title. '<br>';
    //     }
    //     echo '<br>';
    // }

    // $single = Author::with('book')->where('id',1)->first();
    // echo $single->name.'<br>';
    // foreach($single->book as $item){$all
    //     echo $item->title . '<br>';
    // }

//     $all =  Book::with('author')->get();
//     // dd($all->toArray());
//     foreach($all as $item){
//         echo $item->title. '<br>';
//     foreach($item->author as $item){
//         echo $item->name. '<br>';
//     }
//     echo '<br>';
// }
$single = Book::with('author')->where('id',1)->first();
    echo $single->title.'<br>';
    foreach($single->author as $item)
        echo $item->name . '<br>';
    }
}
