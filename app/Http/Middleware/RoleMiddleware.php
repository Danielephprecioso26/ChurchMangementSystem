<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param  Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        $user = Auth::user();

        if ($user && $this->hasRole($user, $role)) {
            return $next($request);
        }

        abort(403, 'Unauthorized action.');
    }

    /**
     * Check if the user has the specified role.
     *
     * @param  mixed  $user
     * @param  string  $role
     * @return bool
     */
    private function hasRole($user, string $role): bool
    {
        switch ($role) {
            case 'admin':
                return $user->is_admin;
            case 'staff1':
                return $user->is_staff1;
            case 'staff2':
                return $user->is_staff2;
            default:
                return false;
        }
    }
}
