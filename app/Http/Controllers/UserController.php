<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddCourse;
use App\CourseOrder;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homepage()
    {

 $coursehome=AddCourse::orderBy('id','desc')->limit(3)->get();
         return view('user.homepage',['coursehome'=>$coursehome]);
        // return view('user.homepage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('user.about');
    }

     public function course()
    {
         $showcourse=AddCourse::orderBy('id','desc')->get();
         return view('user.course',['showcourse'=>$showcourse]);
    }


      public function blog()
    {
        return view('user.blog');
    }

      public function elements()
    {
        return view('user.elements');
    }

      public function singleblog()
    {
        return view('user.single-blog');
    }

      public function contact()
    {
        return view('user.contact');
    }

      public function coursedetails($id)
    {
          $singlecourse=AddCourse::find($id);
        return view('user.course-details',compact('singlecourse')); 
        // $show=AddCourse::find($id);

        // return view('user.course-details',compact('show'));
        // return view('user.course-details',['show'=>$show]);
    }
   


       public function courseodr($id)
     {
        $s=AddCourse::find($id);
        return view('user.course_order',compact('s'));


         // return view('user.course_order');
     }
    

    // public function or($id)
    // {
    //     date_default_timezone_set('Asia/Kathmandu');
    //     $t=date('Y-m-d  h-i-s');
    // }

 public function courseorder(Request $request)
    {
        CourseOrder::create([
            'first_name'=>$request->get('fname'),
            'last_name'=>$request->get('lname'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
            'address'=>$request->get('address'),
            'city'=>$request->get('city'),
            'country'=>$request->get('country'),
            'course_id'=>$request->get('course_id'),
        ]);

        $request->session()->flash('message','Order has been created');
        return redirect()->back();
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
