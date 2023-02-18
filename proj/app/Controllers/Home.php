<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $title = 'Welcome to CI 4';
        // return view('welcome_message', ['title' => 'Welcome to CI 4']);
        return $this->renderLatte(view: 'welcome_message', params: compact('title'));
    }
}
