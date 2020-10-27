<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PageCon extends Controller
{
    public function home()
    {
        echo "Halooo";
    }

    public  function about()
    {
        echo "About";
    }

}
