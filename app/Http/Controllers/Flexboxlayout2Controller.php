<?php

namespace App\Http\BaseController;

use Illuminate\Http\Request;

class Flexboxlayout2Controller extends BaseController
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('flexboxlayout2',$data);
    }

}
