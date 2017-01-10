<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $access_token = null;
        try{
            $access_token = AccesToken:where('user_id', 1)->token;
        } catch (\Exception) {
            //Codi per obtenir el token
            //redirect to redirect
        }
        $data = [
            "acces_token" => $access_token
        ];
        return view('tasks',$data);
    }

}
