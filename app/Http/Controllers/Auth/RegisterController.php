<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $imageName;

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
            'genre' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
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
        $user = (new User)
            ->create([
            'genre' => $data['genre'],
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
                'image_name' => $this->imageName,
        ]);

        $id = $user->id;

        $this->storeImageProfil($data, $id);

        $user->image_name = $this->imageName;

        $user->save();


        return $user;
    }


    protected function storeImageProfil($data, $id)
    {

        if (isset($data['image'])) {


            $image = $data['image'];

            $imageName = 'profil_' . time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('/images/profils/' . $id . '/', $imageName);

            $this->imageName = $imageName;


        }



    }
}
