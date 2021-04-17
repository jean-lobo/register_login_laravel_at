<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;
use App\Http\Controllers\RegistrationController;
class CustomAuth
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
$path= $request->path();
if (($path=="login" || $path=="register")&&(Session::get('user'))){

    return redirect('home');
}
else if($path!='login'&& Session::get('user')&& $path!='register' && Session::get('user')){

return redirect('/login');


}
        return $next($request);
    }
}
