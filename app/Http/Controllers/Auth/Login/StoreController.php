<?php

namespace App\Http\Controllers\Auth\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Login\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \App\Http\Requests\Auth\Login\LoginRequest  $request
     * @return \Illuminate\Http\Response|string
     */
    public function __invoke (LoginRequest $request): \Illuminate\Http\Response|string
    {
        $validated = $request->validated();

        if (Auth::attempt($validated)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back();

    }
}
