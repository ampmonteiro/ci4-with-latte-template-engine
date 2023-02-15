<?php

namespace App\Controllers;

use App\Models\NewsModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class News extends BaseController
{
    public function index()
    {
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->get(),
            'title' => 'News archive',
        ];

        return view('news/index', $data);
    }

    public function show($slug = null)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->get($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        helper('form');

        return view('news/show', $data);
    }

    public function create()
    {
        helper('form');
        return view('news/create', ['title' => 'Create a news item']);
    }

    public function store()
    {
        $post = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.

        $isValid = $this->validateData($post, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ]);

        if (!$isValid) {
            // The validation fails, so returns the form.
            #return view('news/create', ['title' => 'Create a news item']);
            return redirect()->back()->withInput();
        }

        $model = model(NewsModel::class);

        $newSlug = url_title($post['title'], '-', true);

        $model->save([
            'title' => $post['title'],
            'slug'  => $newSlug,
            'body'  => $post['body'],
        ]);

        return redirect()->to("/news/{$newSlug}");

        // $data = ['title' => "Create a news item successfully", 'item' => $post['title']];
        // return view('news/success', $data);
    }

    public function edit($slug)
    {
        $model = model(NewsModel::class);

        $data['news'] = $model->get($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = 'Edit: ' . $data['news']['title'];

        helper('form');

        return view('news/edit', $data);
    }

    public function update()
    {
        $post = $this->request->getPost(['title', 'body']);

        // Checks whether the submitted data passed the validation rules.

        $isValid = $this->validateData($post, [
            'title' => 'required|max_length[255]|min_length[3]',
            'body'  => 'required|max_length[5000]|min_length[10]',
        ]);

        if (!$isValid) {
            // The validation fails, so returns the form.
            return redirect()->back()->withInput();
        }

        $model = model(NewsModel::class);

        $id = $this->request->getPost(['news_id']);

        $slug = url_title($post['title'], '-', true);

        $model->update($id, [
            'title' => $post['title'],
            'slug'  => $slug,
            'body'  => $post['body'],
        ]);

        return redirect()->to("/news/{$slug}");
    }


    public function delete()
    {
        $id = $this->request->getPost(['news_id']);

        $model = model(NewsModel::class);

        $model->delete($id);

        return redirect()->to('/news');
    }
}
