<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    function index(){
        return '<h1>Saya buku dari controller</h1>';
    }

    function detail($id){
        return "<h3>Detail dari Buku Controller dengan id $id</h3>";
    }

    function delete($id){
        return "<h3>Delete dari BUku Controller dengan id $id</h3>";
    }
}
