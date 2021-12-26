<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\RegisterValidation;
use App\AddCourse;
use App\AddProfessor;
use App\CourseOrder;



class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

          public function __construct(){
         $this->middleware('auth:web');
         $this->middleware('verified');
             }


    public function home()
    {
        return view('admin.home');
    }

    public function courseedit()
    {
        return view('admin.course-edit');
    }


    public function home2()
    {
        return view('admin.home2');
    }

    public function home3()
    {
        return view('admin.home3');
    }


    public function events()
    {
        return view('admin.events');
    }



    public function allprofessor()
    {
        return view('admin.all_professors');
    }

    public function userprofile()
    {
        return view('admin.user_profile');
    }


    public function lockscreen()
    {
        return view('admin.lock_screen');
    }


    public function registerform()
    {
        return view('admin.register');
    }

    public function register(RegisterValidation $request)
    {
        $image=null;// for image insert
         if($request->hasFile('image'))
         {
            $file=$request->file('image');
            // random number ganerate
            $image=mt_rand(1001,999999999).'.'.$file->getClientOriginalName();
            $file->move('admin/registerimage',$image);
         
        }

        User::create([
            'fname'=>$request->get('fname'),
            'lname'=>$request->get('lname'),
            'username'=>$request->get('username'),
            'email'=>$request->get('email'),
            'phone'=>$request->get('phone'),
            'address'=>$request->get('address'),
            'gender'=>$request->get('gender'),
            'image'=>$image,
            'password'=>bcrypt($request->get('password')),
        ]);

        $request->session()->flash('message','Admin inserted Successfully');
        return redirect()->back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function addcourse()
    {
        return view('admin.add_course');
    }

    public function addcourseform(Request $request)
    {
       
        $image=null;// for image insert
         if($request->hasFile('image'))
         {
            $file=$request->file('image');
            // random number ganerate
            $image=mt_rand(1001,999999999).'.'.$file->getClientOriginalName();
            $file->move('admin/courseimage',$image);
         
        }

        AddCourse::create([
            'course_name'=>$request->get('cname'),
            'course_code'=>$request->get('ccode'),
            'course_details'=>$request->get('cdetails'),
            'course_date'=>$request->get('cdate'),
            'course_length'=>$request->get('clength'),
            'course_price'=>$request->get('cprice'),
            'course_professor'=>$request->get('cprofessor'),
            'max_student_number'=>$request->get('maxstudent'),
            'phone'=>$request->get('phone'),
            'image'=>$image,
        ]);

        $request->session()->flash('message','Course inserted Successfully');
        return redirect()->back();

    }




    public function addprofessor()
    {
        return view('admin.add_professor');
    }

 public function addprofessorform(Request $request)
    {
       
        $image=null;// for image insert
         if($request->hasFile('image'))
         {
            $file=$request->file('image');
            // random number ganerate
            $image=mt_rand(1001,999999999).'.'.$file->getClientOriginalName();
            $file->move('admin/addprofessorimage',$image);
         
        }

        AddProfessor::create([
            'professor_first_name'=>$request->get('fname'),
            'professor_last_name'=>$request->get('lname'),
            'email'=>$request->get('email'),
            'joining_date'=>$request->get('joining_date'),
            'password'=>$request->get('password'),
            'designation'=>$request->get('designation'),
            'department'=>$request->get('department'),
            'gender'=>$request->get('gender'),
            'phone'=>$request->get('phone'),
            'date_of_birth'=>$request->get('date_of_birth'),
            'address'=>$request->get('address'),
            'image'=>$image,
            'education'=>$request->get('education'),

        ]);

        $request->session()->flash('message','Add Professor Successfully');
        return redirect()->back();

    }



 // public function editprofessor($id)
 //    {
 //        $edit=AddProfessor::find($id);
 //        return view('admin.edit_professor',compact('edit_professor'));
 //    }


 //  public function updateprfessor(Request $request, $id)
 //    {
 //        $update=AddProfessor::Find($id);
 //        $update->update([
 //            'professor_first_name'=>$request->get('fname'),
 //            'professor_last_name'=>$request->get('lname'),
 //            'email'=>$request->get('email'),
 //            'joining_date'=>$request->get('joining_date'),
 //            'password'=>$request->get('password'),
 //            'designation'=>$request->get('designation'),
 //            'department'=>$request->get('department'),
 //            'gender'=>$request->get('gender'),
 //            'phone'=>$request->get('phone'),
 //            'date_of_birth'=>$request->get('date_of_birth'),
 //            'address'=>$request->get('address'),
 //            'image'=>$request->get('image'),
 //            'education'=>$request->get('education')
 //        ]);
 //          if (!$update) {
 //            $request->session()->flash('msg','data updated faild');
 //        }

 //        $request->session()->flash('msg','data updated');
 //        return redirect()->route('show.form');

 //    }





    public function allcourse()
    {
       $showcourse=AddCourse::orderBy('id','desc')->get();
         return view('admin.All_Course',['showcourse'=>$showcourse]);
    }



      public function readmorecourse($id)
    {
          $singlecourse=AddCourse::find($id);
        return view('admin.readmore_course',compact('singlecourse')); 
    }




    public function order()
    {
        $showoder=CourseOrder::orderBy('id','desc')->get();
       return view('admin.Order_Course',['showoder'=>$showoder]);
    }


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
