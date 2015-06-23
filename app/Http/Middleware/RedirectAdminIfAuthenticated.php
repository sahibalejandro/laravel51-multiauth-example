<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Guard;

/**
 * Created by PhpStorm.
 * User: Flemming
 * Date: 23/06/2015
 * Time: 16:36
 */
class RedirectAdminIfAuthenticated
{
    /**
     * The Guard implementation.
     *
     * @var Guard
     */
    protected $auth;

    /**
     * Create a new filter instance.
     */
    public function __construct()
    {
        $this->auth = Auth::admin();
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->check()) {
            return redirect('/admin/home');
        }

        return $next($request);
    }
}