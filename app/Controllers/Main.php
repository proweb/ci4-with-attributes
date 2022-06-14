<?php
namespace App\Controllers;

use Kenjis\CI4\AttributeRoutes\Route;

class Home extends BaseController
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
    public function about()
    {
        return 'News page';
    }
}
