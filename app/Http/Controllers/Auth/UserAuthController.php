<?php namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/**
 * Created by PhpStorm.
 * User: Flemming
 * Date: 23/06/2015
 * Time: 17:24
 */
class UserAuthController extends Controller
{
    /**
     * Create a new User authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest.user', ['except' => 'getLogout']);
    }

    /**
     * Return the Admin login view
     *
     * @return view
     */
    public function getLogin()
    {
        return view('user.layout.login');
    }

    /**
     * Attempt login as user with given credentials
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, array('email' => 'required|email', 'password' => 'required'));

        $auth = Auth::user()->attempt(array('email' => $request->get('email'),'password' => $request->get('password'), 'status' => 1));

        if(!$auth)
        {
            return back();
        }

        $userfullname = Auth::user()->get()->firstname.' '.Auth::user()->get()->lastname;

        Session::put('userfullname', $userfullname);

        return redirect('/user/home');
    }

    /**
     * Logout the admin
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function getLogout()
    {
        Auth::user()->logout();
        return redirect('/user/login');
    }
}