<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Throwable;

class FetchDemoCreditController extends Controller
{
    public function __invoke()
    {
        try {
            return response()->json(json_decode(file_get_contents(resource_path('demo-credits.json')), true));
        } catch (Throwable) {
            return response()->json();
        }
    }
}
