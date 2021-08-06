<?php

namespace App\Http\Middleware\Supplier;

use Closure;
use Illuminate\Http\Request;

class SupplierExistMIddleware
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
        if (!empty(auth()->user()->supplier)) {
            return redirect('home');
        }
        return $next($request);
    }
}
