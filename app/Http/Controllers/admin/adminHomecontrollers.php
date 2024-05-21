<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminHomecontroller extends Controller
{
  public function index()
  {
    $viewData =[];
    $viewData['title'] ="Quan an";
    return view("admin.home.index") -> with("viewData",$viewData);
  }
}