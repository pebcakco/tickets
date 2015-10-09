<?php

namespace Tickets\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Tickets\Http\Requests;
use Tickets\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Logged in as ' . Auth::user()->name;
    }
}
