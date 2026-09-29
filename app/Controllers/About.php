<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('pages/about', [
            'pageTitle' => 'About',
            'activePage' => 'about',
            'developerName' => env('developer.name', 'Student Developer'),
            'developerCourse' => env('developer.course', 'IT0049 Web System Technologies'),
        ]);
    }
}
