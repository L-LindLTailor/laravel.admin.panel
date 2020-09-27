<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends AdminBaseController
{
    public function index()
    {
        return view('blog.admin.main.index');
    }
}
