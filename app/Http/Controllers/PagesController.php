<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function projects()
    {
        return view('pages.projects');
    }
    
    public function sProject()
    {
        return view('pages.s-project');
    }
    
    public function addProject()
    {
        return view('pages.add-project');
    }
    
    public function jobs()
    {
        return view('pages.jobs');
    }
    
    public function job()
    {
        return view('pages.job');
    }
    
    public function addJob()
    {
        return view('pages.add-job');
    }
    
    public function companies()
    {
        return view('pages.companies');
    }
    
    public function company()
    {
        return view('pages.company');
    }
    
    public function profiles()
    {
        return view('pages.profiles');
    }
    
    public function profile()
    {
        return view('pages.profile');
    }
    
    public function messages()
    {
        return view('pages.messages');
    }
    
    public function faq()
    {
        return view('pages.faq');
    }
    
    public function contacts()
    {
        return view('pages.contacts');
    }
    
    public function privacy()
    {
        return view('pages.privacy');
    }

}
