<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next ,$type1,$type2): Response
    public function handle(Request $request, Closure $next ,...$types): Response
    {
        // $user=Auth::user();
        $user = $request->user();
        // if ($user->type != $type1&&$user->type != $type2)
        //بدي ابحث عن طريق مصفوفة
        if (! in_array($user->type,$types)) {
            abort(403, 'You are Not Admin');
        }
        return $next($request);
    }
}
