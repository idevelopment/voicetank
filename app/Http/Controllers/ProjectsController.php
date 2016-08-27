<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProjectsController extends Controller
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
      return view('projects/list');
  }

  /**
   * Show the details from the project.
   *
   * @return \Illuminate\Http\Response
   */
  public function details()
  {
      return view('projects/edit');
  }
}
