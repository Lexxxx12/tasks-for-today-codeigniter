<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index(): string
    {
        return view('pages/about', [
            'pageTitle' => 'About',
            'activePage' => 'about',
            'developerName' => getenv('DEVELOPER_NAME') ?: env('developer.name', 'Lexxxx12'),
            'developerCourse' => getenv('DEVELOPER_COURSE') ?: env('developer.course', 'IT0049 Web System Technologies'),
        ]);
    }
}
