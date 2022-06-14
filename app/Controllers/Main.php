<?php
namespace App\Controllers;

use Kenjis\CI4\AttributeRoutes\Route;

class Main extends BaseController
{
    #[Route('/', methods: ['get'])]
    public function index()
    {
        return 'Index page';
    }
    #[Route('about', methods: ['get'])]
    public function about()
    {
        return 'About page';
    }
    #[Route('news', methods: ['get'])]
    public function news()
    {
        return 'News page';
    }
}
