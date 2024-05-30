<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckConditions
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
        // Add your conditions here
        if ($this->checkYourConditions($request)) {
            return $next($request);
        }

        // If the conditions are not met, return a 403 Forbidden response
        return response()->json(['message' => 'Forbidden'], 403);
    }

    /**
     * Define your custom condition checks here.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    protected function checkYourConditions(Request $request)
    {
        // Example condition
        // Replace this with your actual condition
        return $request->has('your_condition_key');
    }
}
