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
      $this->middleware('lang');
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
   * Show the form to create a newx project.
   *
   * @return \Illuminate\Http\Response
   */
  public function register()
  {
      return view('projects/register');
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
