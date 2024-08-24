<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index(){
        return view('jobs.index' , ["jobs" => Job::with('employer')->latest()->simplePaginate(10)] );
    }
    public function  update(Job $job)  {

        // $job = Job::find($id);
        request()->validate([
            'name'      => ['required' , 'min:3'],
            'sallery'   => ['required'],
        ]);

        $job->update([
            'name' => request()->name,
            'sallery' => request()->sallery,
        ]);

        return redirect('jobs/' . $job->id);

    }
    public function destory(Job $job){
        $job->delete();
        return redirect('jobs');
    }


    public function create(){
        return view('jobs.create');
    }
    public  function store(){

        request()->validate([
            'name'      => ['required' , 'min:3'],
            'sallery'   => ['required' ,  'min:3'],
        ]);
        $job =  Job::create([
            'name' => request('name'),
            'sallery' =>request('sallery'),
            'employer_id' => 1
        ]);
            Mail::to($job->employer->user)->send(new JobPosted($job));


        return redirect('/jobs');
    }
    public function show(Job $job){
        return view('jobs.show' , ['job' => $job]);
    }
    public function edit(Job $job){
        // if(Auth::guest()){
        //     return redirect('login');
        // }
        // if ($job->employer->user->isNot(Auth::user())) {
        //     abort(403);
        // }



        // Gate::authorize('edit-job' , $job);

        return view('jobs.edit' , ['job' => $job]);
    }

}
