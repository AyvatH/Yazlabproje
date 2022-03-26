<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class Danoturumkontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(url('dngiris'));
        if(Session()->has("dan") && (url('ogrgiris')==$request->url()||url('dngiris')==$request->url()||url('admingiris')==$request->url()||url('/')==$request->url()))
        {
            return back();
        }
        return $next($request);
    }
}
