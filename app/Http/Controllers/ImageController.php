<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\App;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function profilPicture($id)
    {


        $pathImage = config('app.image_profil_path');
        $pathDefault = config('app.default_profil_path');

        $user = User::find($id);


        switch ($id) {

            case 'm' :
                $storagePath = storage_path($pathDefault . 'default_profil_male.jpg');
                break;
            case 'f' :
                $storagePath = storage_path($pathDefault . 'default_profil_female.jpg');
                break;
            case 'o' :
                $storagePath = storage_path($pathDefault . 'default_profil_other.jpg');
                break;

            default :
                $storagePath = storage_path($pathImage . $id . '/' . $user->image_name);


        }

        return Image::make($storagePath)->response('jpg');
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
