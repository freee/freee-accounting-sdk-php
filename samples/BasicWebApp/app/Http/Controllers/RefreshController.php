<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Freee\Accounting\Laravel\Facades\Freee;

class RefreshController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function __invoke(Request $request)
    {
        $response = Freee::refreshToken($request->user()->refresh_token);

        $request->user()->fill([
            'token' => $response['access_token'] ?? '',
            'refresh_token' => $response['refresh_token'] ?? '',
            'expired_at' => now()->addSeconds($response['expires_in']),
        ])->save();

        return back();
    }
}
