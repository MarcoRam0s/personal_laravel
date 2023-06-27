<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ContatoController extends Controller {
    public function index() {
        return view('contato.index');
    }
}
