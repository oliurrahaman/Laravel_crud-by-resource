<?php

namespace App\Http\Controllers;

use App\Models\Banna;
use Illuminate\Http\Request;
use App\Http\Requests\newStudentRequestFormValidation;

class BannaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habib= Banna::all();
        return view('banna.index')->with('banna', $habib);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(newStudentRequestFormValidation $request)
    {
        $input= $request->all();

        Banna::create($input);
        return redirect('banna')->with('flash_message','student Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banna  $banna
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $students = Banna::find($id);
        return view('banna.show')->with('banna',$students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banna  $banna
     * @return \Illuminate\Http\Response
     *
     */
    //Mail send



    public function edit( $id)
    {
        $students = Banna::find($id);
        return view('banna.edit')->with('banna',$students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banna  $banna
     * @return \Illuminate\Http\Response
     */
    public function update(newStudentRequestFormValidation $request, $id)
    {
        $student = Banna::find($id);
        $input = $request->all();
        $student->update($input);
        return redirect('banna')->with('flash_message', 'student Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banna  $banna
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Banna::destroy($id);
        return redirect('banna')->with('flash_message', 'Student deleted!');
    }
}
