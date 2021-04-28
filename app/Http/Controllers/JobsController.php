<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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

            return view('add_job_offer',[
                'tags'=>Tag::all()
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request->title;
        $description=$request->description;
        $responsibilities=$request->responsibilities;
        $candidate=$request->candidate;
        $tag=$request->tag;

        $job=new Job;
        $job->title=$title;
        $job->description=$description;
        $job->responsibilities=$responsibilities;
        $job->perfect_candidate=$candidate;

        $job->save();
        $job->tags()->attach(1);
        $job->save();

        return redirect(route('welcome'));
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
        $tag=Tag::where('tag_name','=',$slug)->first();

        $jobs=$tag->jobs->toArray();

        return view('related_offers',[
            'tags'=>Tag::all(),
            'jobs'=>$jobs
        ]);
    }

    public function admin_show_all($slug)
    {
        $tag=Tag::where('tag_name','=',$slug)->first();

        $jobs=$tag->jobs->toArray();

        return view('admin_all',[
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
        return view('edit_job_offer',[
            'job'=>Job::find($id),
            'tags'=>Tag::all()
        ]);
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
        $job=Job::find($id);
        $job->update($this->validateOffer());

        return redirect(route('single',$id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job_offer=Job::find($id);
        $job_offer->delete();

        return redirect()->back();
    }

    protected function validateOffer()
    {
        return request()->validate([
            'title' => 'required',
            'description' => 'required',
            'responsibilities' => 'required',
            'candidate' => 'required',
        ]);
    }

}
