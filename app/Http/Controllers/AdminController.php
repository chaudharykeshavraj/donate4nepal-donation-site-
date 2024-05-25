<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Auth;
use DB;
class AdminController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->user =  url()->current();
        $this->user = new User();
    }
    public function AdminLogin(){
        return redirect()->route('login');
    }

    public function AdminDashboard(){
        
        return view('admin.dashboard');
    }
    

}
?>