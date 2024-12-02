<?php

namespace App\Http\Controllers;

use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PodcastController extends Controller
{
    //
    public function showAllPodcasts(Request $request){
        $podcasts = DB::table('podcasts')
        ->select('id', 'name', 'description', 'logoUrl')->get();
        return response()->json($podcasts);
    }

    public function findPodcast(Request $request, $searchItem){
        $podcasts = Podcast::where('name', 'like', $searchItem)->get()
            ->makeHidden(["id", "created_at", "updated_at"]);
        return response()->json(
            $podcasts
        );
    }

    public function showPodcast(Request $request, $id){
        $podcast = Podcast::where('id','like',$id)->get()
            ->makeHidden(["id", "created_at", "updated_at"]);
        return response()->json($podcast);
    }
}
