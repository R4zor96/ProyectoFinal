<?php
namespace App\Controllers\Portal;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return view('portal/home');
    }

    public function home(){
        //Show a String
        // echo "It's working";

        //Calling a other method
        return $this->index();
    }
}
