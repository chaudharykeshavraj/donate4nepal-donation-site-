<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class HomeController extends Controller
{
    private $user;
    public function __construct()
    {
        $this->current_url = url()->current();
        // $ipAddress = $_SERVER['REMOTE_ADDR'];
        // $this->ip_address = $ipAddress;
        $this->user = new User();
    }

    public function index()
    {
        $data['title'] = 'Home Page';
        $limit = 4;
        // $data['whatwedo'] = $this->user->whatwedoAll($limit);
        // $data['getinvolved'] = $this->user->getinvolvedAll($limit);
        // dd($data['whatwedo']);
        return view('public.home.home', $data);
    }

    public static function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'data'    => $result,
        ];
        return response()->json($response, 200);
    }

    public function aboutApi($constant){
        $message = 'Page Details';
        $data['cmsSel'] = $this->user->cmsSelected($constant);
        return self::sendResponse($data,$message);
    }

    public function whatwedo()
    {
        $data['title'] = 'Whatwedo Page';
        $data['users'] = User::all();
        // dd($data['users']);
        return view('public.home.whatwedo', $data);
    }
    public function getinvolved()
    {
        $data['title'] = ucfirst('Get Involved');
        $limit = 30;
        // $data['getinvolved'] = $this->user->getinvolvedAll($limit);
        return view('public.home.getinvolved', $data);
    }

    public function shopAll()
    {
        $data['title'] = 'Shop Merch';
        $limit = 30;
        // $data['shop'] = $this->user->shopAll($limit);
        return view('public.home.shop', $data);
    }
    public function contact()
    {
        $data['title'] = 'Contact';
        return view('public.home.contact', $data);
    }

    public function contactAction(Request $request)
    {
        if($request->isMethod('post')){
            $datas = $request->all();
            // dd($datas);
            $validator = Validator::make($request->all(),[
                'name' => ['required', 'string', 'min:2'],
                'email'=> 'required|email',
                'subject' => 'required',
                'message'=> 'required'
            ]);
            if($validator->fails()){
                $message = "All * Fields are required";
                flash()->addError($message);
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $this->user->saveContact($datas);
            $message = "Contact sent successfully";
            flash()->addSuccess($message);
            return redirect()->back();
        }
    }
}
