<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;

class WelcomeController
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return response()->json([
            'company' => 'MARTZ',
            'datetime' => Carbon::now()
        ], 200);
    }
}
