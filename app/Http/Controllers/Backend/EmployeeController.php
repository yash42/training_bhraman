<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Officename;
use App\Models\Employee;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $count = 1;
        $data = Employee::orderBy('id', 'DESC')->paginate(5);
        return view('backend.employee.index', compact('data', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $validated = $request->validate([
            'sanketno_np' => 'required|unique:employees|max:10',
            'emp_name_np' => 'required',
            'emp_post_np' => 'required',
            'contact_no_np' => 'required',
            'office_name_np' => 'required',
            'emp_type_np' => 'required'
        ]);
        $data = new Employee();
        //Data in Nepali saved in Database
        $data->sanketno_np = request('sanketno_np');
        $data->emp_name_np = request('emp_name_np');
        $data->emp_post_np = request('emp_post_np');
        $data->contact_no_np = request('contact_no_np');
        $data->office_name_np = request('office_name_np');
        $data->emp_type_np = request('emp_type_np');
        //Data in English saved in Database
        $data->sanketno = request('sanketno');
        $data->emp_name = request('emp_name');
        $data->emp_post = request('emp_post');
        $data->contact_no = request('contact_no');
        $data->office_name = request('office_name');
        $data->emp_type = request('emp_type');
        $data->save();
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
