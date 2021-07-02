<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
   /* public function __construct()
    {
        $this -> middleware(middleware: 'auth' );
    }
*/
    public function index()
    {
        return view(view. 'tareas.base');
    }
}