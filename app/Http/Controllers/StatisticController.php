<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Staff;
use App\FacebookStatistic;
use Hash;
use Validator; 
use Auth;

class StatisticController extends Controller
{
    public function sendFbClick(Request $request)
    {
        $clickName = $request->get('name');
        $clickURL = $request->get('url');

        FacebookStatistic::create([
            'name' => $clickName,
            'link' => $clickURL,
        ]);
    }

    public function testing() {
        return response()->json([
            'success' => true,
            'message' => 'testing is Success!',
        ]);
    }
}
