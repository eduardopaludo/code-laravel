<?php

namespace CodeLaravel\Http\Controllers;

use Illuminate\Http\Request;

use CodeLaravel\Http\Requests;
use CodeLaravel\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $dados = [
            'titulo'    => 'Titulo do post',
            'subtitulo' => 'Subtitulo do post',
            'autor'     => 'Eduardo Paludo'
        ];

        return view('blog.index', compact('dados'));
    }


}
