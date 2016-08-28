<?php

namespace App\Http\Controllers;

use App\Departments;
use App\Http\Requests\DepartmentValidator;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class DepartmentsController
 * @package App\Http\Controllers
 */
class DepartmentsController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @url:platform  GET|HEAD: /users/departments
     * @see:phpunit   DepartmentsTest::testOverviewDepartments()
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['departments'] = Departments::with('managers')->paginate(15);
        $data['users']       = User::all();

        return view('departments/index', $data);
    }

    /**
     * Show a specific department in the application.
     *
     * @url:platform  GET|HEAD: /users/departments/{id}
     * @see:phpunit   DepartmentsTest::testShowSpecificDepartment()
     *
     * @param   int $id The department id in the database.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
        $data['department'] = Departments::with('managers')->find($id);
        return view('departments.show', $data);
    }

    /**
     * Save a new department in the database.
     *
     * @url:platform  POST: /users/departments/save
     * @see:phpunit   Departmentstest::testInsertDepartmentsWithoutErrors()
     * @see:phpunit   DepartmentsTest::testInsertDepartmentsWithErrors()
     *
     * @param  DepartmentValidator $input
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(DepartmentValidator $input)
    {
        $department = Departments::create($input->except(['_token', 'managers']));
        Departments::find($department->id)->managers()->attach($input->manager);

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The department has been added.');

        return redirect()->back();
    }

    /**
     * Update a department in the database.
     *
     * @url:platform  POST:
     * @see:phpunit
     *
     * @param  DepartmentValidator $input
     * @param  int $id The id of the department in the database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(DepartmentValidator $input, $id)
    {
        session()->flash('class', '');
        session()->flash('message', '');

        return redirect()->back();
    }

    /**
     * Delete a department in the database
     *
     * @url:platform  GET|HEAD: /users/departments/destroy/{id}
     * @see:phpunit   DepartmentsTest::testDestroyingDepartment()
     *
     * @param  int $id The id of the department in the database
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        Departments::find($id)->managers()->sync([]);
        Departments::destroy($id);

        session()->flash('class', 'alert alert-success');
        session()->flash('message', 'The department has been deleted.');

        return redirect()->back();
    }
}
