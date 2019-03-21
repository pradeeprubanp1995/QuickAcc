<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Department;
use Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/payment';
     public $lastCreatedUser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric'],
             // 'employeeid' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            // 'deptid' => ['required'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data);
        

         $user = User::create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            // 'doj' => date('Y-m-d'),
            // 'premium_id' => $data['deptid'],            
            'password' => Hash::make($data['password']),
        ]);

         $this->lastCreatedUserId = $user->id;
         // $_SESSION['userid'] = $this->lastCreatedUserId;
         // session()->flash('userid', $this->lastCreatedUserId);

         return $user;


        
         // print_r($_SESSION);exit;
        
    }
    protected function redirectTo()
        {
            return route('payment', ['user_id' => $this->lastCreatedUserId]);
        }
    public function showRegistrationForm()
    {


        // $department =Department::get(); 
        return view('auth.register');
    }

}
