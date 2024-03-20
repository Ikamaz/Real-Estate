<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
