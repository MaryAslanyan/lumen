<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Requests\RegisterRequest;

class RegisterConroller extends \App\Http\Controllers\Controller
{
    /**
     * @param RegisterRequest $request
     * @return json
     */
    public function register(RegisterRequest $request)
    {
        dd($request);
        return response()->json([]);
    }
}
