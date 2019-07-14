<?php

namespace App\Http\Controllers;
use Auth;
use App\Team;

use Illuminate\Http\Request;
use DB;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = DB::table('teams')->get();
        return view('team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = DB::table('courses')->get()->where('user_id', Auth::user()->id);
        return view('addteam', compact('courses'));
    }

public function teamslist($course_name)
{
    $teams = DB::table('teams')->get()->where('course_name', $course_name);

    return view('team')->with('teams',$teams)->with('course_name',$course_name);
}



public function userteamslist($course_name)
{
    $teams = DB::table('teams')->get()->where('course_name', $course_name);

    return view('usercourse')->with('teams',$teams)->with('course_name',$course_name);
}




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

          't_name' => 'required |max:255',
          // 'student1' => 'required |max:255',
          //  'student2' => 'required |max:255',
          // 'student3' => 'required |max:255',
          // 'student4' => 'required |max:255',
          //  'student5' => 'required |max:255',
          // 'description' => 'required |max:255',
          'course_name' => 'required |max:255',
          

        ]);
              
       $team = new Team();


         
         
        $team->t_name= $request->t_name;
        $team->student1 = $request->student1;
        $team->student2= $request->student2;
        $team->student3 = $request->student3;
        $team->student4 = $request->student4;
        $team->student5 = $request->student5;
        $team->description = $request->description;
         $team->course_name = $request->course_name;

         $team->user_id = Auth::user()->id;
       
         
        
        $team->save();

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










    public function activate($course,$id)
    {
        $team=Team::find($id);
        $team->status='Running';
        $team->save();
        return redirect()->route('teamslist',$course);
    }

    public function deactivate($course,$id)
    {
        $team=Team::find($id);
        $team->status='Finished';
        $team->save();
        return redirect()->route('teamslist',$course);
    }
}
