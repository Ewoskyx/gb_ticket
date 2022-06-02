<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Fortify\Http\Responses\LogoutResponse;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;

class PanelLoginController extends AuthenticatedSessionController
{
    public function destroy(Request $request): LogoutResponse
    {
        $this->guard->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return app(LogoutResponse::class);
    }
}
