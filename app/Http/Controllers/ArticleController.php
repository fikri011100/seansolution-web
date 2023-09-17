<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ArticleController extends Controller
{
    //
    public function showData() {

    }

    public function add_process(Request $article)
    {
        $currentTimestamp = now();
        $currentTimestampFormatted = now()->format('Y-m-d H:i:s');
        DB::table('article')->insert([
            'title'=>$article->title,
            'image'=>$article->image,
            'date'=> $currentTimestamp,
            'desc'=>$article->desc,
        ]);
 
        return redirect()->action('ArticleController@showData');
    }
}
