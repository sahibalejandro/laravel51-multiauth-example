<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: Flemming
 * Date: 23/06/2015
 * Time: 16:57
 */
class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.pages.home');
    }
}