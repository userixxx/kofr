<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * @Route("/catalog", name="catalog")
     */
    public function index()
    {
        return view('pages.catalog');
    }
}
