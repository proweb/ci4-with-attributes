<?php
namespace App\Controllers;

use Kenjis\CI4\AttributeRoutes\Route;

class Home extends BaseController
{
    #[Route('/', methods: ['get'])]
    public function index()
    {
        return view('index');
    }
    #[Route('about', methods: ['get'])]
    public function about()
    {
        return view('about');
    }
    #[Route('news', methods: ['get'])]
    public function news()
    {
        return view('news');
    }
}
