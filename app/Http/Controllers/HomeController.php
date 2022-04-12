<?php
   
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Barang;
   
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/dashboard');
    }
  
    /**
     * Show the application dashboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('/dashboard');
    }
    
}