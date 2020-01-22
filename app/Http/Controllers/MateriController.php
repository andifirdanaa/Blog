<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materi;

class MateriController extends Controller
{
    public function index(Materi $model){
    	return view('materi.index',['materi'=>$model->paginate(5)]);
    }
     public function create(){
        return view('materi.create');
    }
}
