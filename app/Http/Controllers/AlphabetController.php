<?php

namespace App\Http\Controllers;

use App\Models\Alphabet;
use Illuminate\Http\Request;

class AlphabetController extends Controller
{
    public function alphabet($page = null){
        $alpha = Alphabet::all();
        $number_of_result = $alpha->count();
        if ($page === null){
            $page = 1;
        }
        else{

        }
        $results_per_page = 5;
        $page_first_result = ($page-1) * $results_per_page;
        $number_of_page = ceil ($number_of_result / $results_per_page);
        $alphabet = Alphabet::offset($page_first_result)->limit($results_per_page)->get();
        return view('home',['alphabet'=>$alphabet,'number_of_page'=>$number_of_page]);
    }
}
