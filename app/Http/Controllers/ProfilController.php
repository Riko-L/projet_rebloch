<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
use App\User as mUser;


class ProfilController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $resquest, User $id)
    {

        $not_friends = User::where('id', '!=', Auth::user()->id);
        if (Auth::user()->friends->count()) {
            $not_friends->whereNotIn('id', Auth::user()->friends->modelKeys());
        }
        $not_friends = $not_friends->get();

        $any_friends = mUser::has('friends')->get();
        if ($any_friends->count() == 0) {

            $any_friends = true;
        }


        $host = $resquest->getSchemeAndHttpHost();

        if ($id->image_name === null) {

            //@TODO trouver solution pour les images

            switch ($id->genre) {

                case ('male') :
                    $urlImg = $host . '/img/profil/m';
                    break;
                case ('female') :
                    $urlImg = $host . '/img/profil/f';
                    break;
                case('other') :
                    $urlImg = $host . '/img/profil/o';
                    break;

            }

        } else {

            $urlImg = $host . '/img/profil/' . $id->id;
        }


        return view('profil')->with([
            'user' => $id,
            'not_friends' => $not_friends,
            'urlImg' => $urlImg,
            'any_friend' => $any_friends
        ]);

    }


    public function getAddFriend($id)
    {
        $user = User::find($id);
        Auth::user()->addFriend($user);
        return back();
    }

    public function getRemoveFriend($id)
    {
        $user = User::find($id);
        Auth::user()->removeFriend($user);
        return back();
    }





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
