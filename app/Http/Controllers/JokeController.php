<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JokeController extends Controller
{
    private $jokeApiUrl = "https://sv443.net/jokeapi/v2/joke/Any";

    public function getRandomJoke(Request $request)
    {
        $category = $request->input('category');
        $url = $this->jokeApiUrl . "?category=$category";

        $response = Http::get($url);

        $ret =  $response->json();
        return view("joke", compact("ret"));
    }

}
