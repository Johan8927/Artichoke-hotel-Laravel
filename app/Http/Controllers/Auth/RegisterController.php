<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\landingPage\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    protected function validator(array $data): \Illuminate\Contracts\Validation\Validator
    {
        return Validator::make($data, [
            'civility' => 'required|string|max:10',
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'ZIP_code' => 'required|string|max:20',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'phone_number' => 'required|string|max:20',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function create(array $data): User
    {
        return User::create([
            'civility' => $data['civility'],  // Correct
            'firstName' => $data['firstName'],  // Correct
            'lastName' => $data['lastName'],  // Correct
            'address' => $data['address'],  // Correct
            'ZIP_code' => $data['ZIP_code'],  // Correct
            'city' => $data['city'],  // Correct
            'country' => $data['country'],  // Correct
            'phone_number' => $data['phone_number'],  // Correct
            'email' => $data['email'],  // Correct
            'password' => Hash::make($data['password']),  // Correct
        ]);
    }
}
