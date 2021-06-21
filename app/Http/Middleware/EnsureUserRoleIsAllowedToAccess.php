<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//indes, first, provinsi, data_kabupaten, kecamatan, desa, datacovid

class EnsureUserRoleIsAllowedToAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        try {
                $userRole = auth()->user()->role;
                $currentRouteName= Route::currentRouteName();
            
                if(in_array($currentRouteName, $this->userAccesRole()[$userRole])){
                    return $next($request);
                } else {
                    abort(403, 'anda tidak memiliki akses ke halaman ini');
                }
            } catch (\Throwable $th) {
                // abort(403, 'anda tidak memiliki akses ke halaman ini');
                return redirect('/first');
            }

        
       
    }

    private function userAccesRole()
    {
        
        return [
            'user' => [
                'dashboard','first', 'index'
            ],

            'admin' => [
                'dashboard','index', 'first', 'provinsi', 'data_kabupaten', 'kecamatan', 'desa', 'datacovid'
            ]
        ];
    }


}
