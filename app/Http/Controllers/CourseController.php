<?php

namespace App\Http\Controllers;
use Auth;
use App\Course;
use App\Http\Controllers\Controller;
use DB;


use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('coursereg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showCourse()
    {
        $courses = DB::table('courses')->get();
        return view('courses', compact('courses'));
        
    }


    public function showAdminCourse()
    {
        // $course = Course::where('user_id', Auth::user()->id);
        $course = DB::table('courses')->get()->where('user_id', Auth::user()->id);

        return view('admincourse', compact('course'));
        
    }
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if(Auth::check())
        //     {
        //         $course = Course::create([


        //              'course_name' => $request->input('course_name'),
        //              'course_code' => $request->input('course_code'),
        //              'batch' => $request->input('batch'),
        //              'credit' => $request->input('credit'),
        //              'user_id' => $request->Auth::user()->id,
                     
                     


        //         ]);
        //     }
        $this->validate($request, [

          'course_name' => 'required |max:255',
          'course_code' => 'required |max:255',
           'batch' => 'required |max:255',
          'credit' => 'required |max:255',
          

        ]);
              
       $course = new Course();


         
         
         $course->course_name= $request->course_name;
        $course->course_code = $request->course_code;
        $course->batch= $request->batch;
        $course->credit = $request->credit;
         $course->user_id = Auth::user()->id;
       
         
        
        $course->save();

        return back()->with('success', 'Course Created Succefully');
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
