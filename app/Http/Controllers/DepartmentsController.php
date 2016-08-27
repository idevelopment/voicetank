<?php

namespace App\Http\Controllers;

use App\Departments;
use Illuminate\Http\Request;

use App\Http\Requests;

class DepartmentsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $data['departments'] = Departments::paginate(15);
      return view('departments/index', $data);
  }
}
