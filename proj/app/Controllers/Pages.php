<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Pages extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        return $this->renderLatte(view: 'welcome_message');
    }

    public function show($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.latte')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        // return  view('pages/' . $page, $data);

        return $this->renderLatte(view: "pages/{$page}", params: $data);
    }
}
