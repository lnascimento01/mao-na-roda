<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function __construct() {

      $this->middleware('auth');

    }

    public function index() {

    }
}
