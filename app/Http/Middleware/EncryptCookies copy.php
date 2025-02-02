<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

class EncryptCookies
{
    /**
     * The names of the cookies that should not be encrypted.
     *
     * @var array
     */
    protected $except = [];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->encrypt($request);

        return $next($request);
    }

    /**
     * Encrypt the cookies on the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function encrypt($request)
    {
        foreach ($request->cookies as $key => $value) {
            if (!in_array($key, $this->except)) {
                $request->cookies[$key] = Cookie::make($key, $value, null, null, null, null, true);
            }
        }
    }
}
