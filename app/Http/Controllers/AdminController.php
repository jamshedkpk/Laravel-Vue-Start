<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
public function index()
{
if(Auth::id())
{
$role=auth()->user()->isAdmin();
if($role=='admin')
{
return view('admin.layout.dashboard');
}
else
{
return view('product');
}
}
}
}