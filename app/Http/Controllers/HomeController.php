<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function _construct(){

    }

    public function index(){
        return view('home.home');
    }

    public function getItem($id){
        return view('home.update');
    }

    public function updateItem($id){
        return 'Submit sửa item';
    } 

    public function createItem(){
        return view('home.add');
    }

    public function handleCreate(){
        return 'Submit thêm item';
    }

    public function deleteItem($id){
        return 'Submit xóa item';
    }
}
