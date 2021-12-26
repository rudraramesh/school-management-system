<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControllerTwo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function adminhome2()
    {
        return view('admin2.adminhome2');
    }

    public function home2()
    {
        return view('admin2.home2');
    }


    public function parentshome()
    {
        return view('admin2.home_parents');
    }


    public function teacherhome()
    {
        return view('admin2.home_teacher');
    }



    public function allstudent()
    {
        return view('admin2.all_student');
    }

    public function studentdetails()
    {
        return view('admin2.student_details');
    }


    public function admissionform()
    {
        return view('admin2.admission_form');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
