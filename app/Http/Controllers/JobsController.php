<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobsController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check())
        {
            $user=Auth::user();
        }
        else
        {
            $user=null;
        }
        return view('welcome',[
            'tags'=>Tag::all(),
            'user'=>$user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_job_offer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_single($id)
    {
        return view('single_offer',[
            'job'=>Job::find($id),
            'tags'=>Tag::all()
        ]);
    }

    /**
     *  Show job offers to related language
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_related($slug)
    {
        $tag_id=Tag::where('tag_name','=',$slug)->first();

        // $jobs=[];
        $jobs=Job::where('tag_id','=',$tag_id->id)->get()->toArray();

        return view('related_offers',[
            'tags'=>Tag::all(),
            'jobs'=>$jobs
        ]);
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
