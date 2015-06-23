<?php namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: Flemming
 * Date: 23/06/2015
 * Time: 17:31
 */
class UserHomeController extends Controller
{
    public function index()
    {
        return view('user.pages.home');
    }
}