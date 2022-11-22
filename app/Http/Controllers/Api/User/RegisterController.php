<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Requests\Request;
use App\Repositories\Interfaces\UserRepositoryInterface;
use Illuminate\Http\JsonResponse;

class RegisterController extends \App\Http\Controllers\Controller
{
    public function __construct(private UserRepositoryInterface $userRepository)
    { }

    /**
     * @param RegisterRequest $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        dd($request);
        $name = $request->get('name');
        return response()->json([]);
    }
}
