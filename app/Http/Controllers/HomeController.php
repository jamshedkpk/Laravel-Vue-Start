<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
public function __construct()
{
$this->middleware('auth');
}
public function index()
{
if(Auth::id())
{
$role=auth()->user()->isAdmin();
if($role=='admin')
{
return redirect()->route('admin');
}
else if($role=='user')
{
return view('product');
}
else
{
return view('product');
}
}
}
}
