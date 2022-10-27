<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Podcasts;
use Illuminate\Http\Request;

class PodcastControllerAPI extends Controller
{
    //
    function getAll()
    {
        return Podcasts::latest('created_at')->get();
    }
}
