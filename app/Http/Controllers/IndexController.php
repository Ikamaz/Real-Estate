<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class IndexController extends Controller
{
    public function index()
    {    
        return inertia(
            'Index/Index',
            [
                'message' => "Laravel Message!"
            ]
        );
    }
    public function show()
    {
        return inertia('Index/Show');
    }
}
