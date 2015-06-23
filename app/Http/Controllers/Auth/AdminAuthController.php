<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Created by PhpStorm.
 * User: Flemming
 * Date: 22/06/2015
 * Time: 20:22
 *
 * Class AdminAuthController
 * @package App\Http\Controllers\Auth
 */
class AdminAuthController extends Controller
{
    /**
     * Create a new Admin authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest.admin', ['except' => 'getLogout']);
    }

    /**
     * Return the Admin login view
     *
     * @return view
     */
    public function getLogin()
    {
        return view('admin.layout.login');
    }

    /**
     * Attempt login as admin with given credentials
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, array('email' => 'required|email', 'password' => 'required'));

        $auth = Auth::admin()->attempt(array('email' => $request->get('email'),'password' => $request->get('password'),'status' => 1));

        if(!$auth)
        {
            return back();
        }

        $adminfullname = Auth::admin()->get()->firstname.' '.Auth::admin()->get()->lastname;

        Session::put('adminfullname', $adminfullname);

        return redirect('/admin/home');
    }

    /**
     * Logout the admin
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getLogout()
    {
        Auth::admin()->logout();
        return redirect('/admin/login');
    }
}