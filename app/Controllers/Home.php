<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('header') . view('index') . view('footer');
    }

    public function services(): string
    {
        return view('header') . view('services') . view('footer');
    }

    public function portfolio(): string
    {
        return view('header') . view('portfolio') . view('footer');
    }

    public function faq(): string
    {
        return view('header') . view('faq') . view('footer');
    }

    public function privacy(): string
    {
        return view('header') . view('privacy') . view('footer');
    }

    public function terms(): string
    {
        return view('header') . view('terms') . view('footer');
    }

    public function cookies(): string
    {
        return view('header') . view('cookies') . view('footer');
    }

    public function admin(): string
    {
        return view('admin');
    }
}
