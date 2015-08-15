<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NoticesController extends Controller
{

	/*CREATE NEW NOTICES CONTROLLER INSTANCE*/

	public function __construct() {

		$this->middleware('auth');

	}

	/*SHOW ALL NOTICES*/

    public function index() {

    	return "all notices";

    }

    /*SHOW A PAGE TO CREATE A NEW NOTICE*/

    public function create() {

    	//get list of providers

    	//load a view to create a new notice
    	return view('notices.create');

    }
}
