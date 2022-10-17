<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCommentWords
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
        $forbiddenWords = ['hate', 'idiot', 'stupid'];

        foreach($forbiddenWords as $word) {
            if(str_contains($request->content, $word)) {
                return response(view('auth.forbidden-check-comment-words'));
            }

        }
        return $next($request);
    }
}