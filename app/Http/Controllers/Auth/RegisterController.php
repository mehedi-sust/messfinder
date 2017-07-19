<?php

namespace MessFinder\Http\Controllers\Auth;

use MessFinder\User;
use MessFinder\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use MessFinder\Mail\verifyEmail;
use Session;
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
    protected $redirectTo = '/home';

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
      'name' => 'required|max:255',
      'reg' => 'required|max:10|unique:users',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6',
      'mobile' => 'required|max:15|unique:users'
      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'reg' => $data['reg'],
            'password' => bcrypt($data['password']),
            'mobile' => $data['mobile'],
            'verifyToken' => Str::random(40),

  ]);
        $thisUser = User::findOrFail($user->id);
        $this->sendEmail($thisUser);
        return $user;
    }

    public function Show_verify_email(){
        return view('Auth/verifyEmail');
    }

    public function sendEmail($thisUser){
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser));
    }

    public function sendEmailDone($email,$verifyToken){

        $user = User::where(['email' => $email , 'verifyToken' => $verifyToken])->first();
        Session::flash('message', 'Good News!!! Your account has been activated. Now just Sign In.');
        if($user){
             User::where(['email' => $email , 'verifyToken' => $verifyToken])->update(['status'=> '1' , 'verifyToken' => Null]);
             return view('auth.login');
        }
        else{
            return 'User not Found or Token Expired';
        }
    }
}
