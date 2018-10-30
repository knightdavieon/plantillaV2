<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Signup;

class SignupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            $username = request('signupusername');
            $email = request('signupemail');
            $password = request('signuppassword');
            $repassword = request('signuprepassword');

            $username = accounts::where('username', '=', $username)->first();
            if ($username === null) {
                    //do here
                $email = accounts::where('email', '=', $email)->first();
                if($email === null){
                    //do here
                }else{
                    //session notification alert email exist
                }
            }else{
                //session notification alert username exist
            }

            $signup = new Signup;

            $signup->username = request('signupusername');
            $signup->email = request('signupemail');
            $signup->password = request('signuppassword');
            $signup->repassword = request('signuprepassword');

            if
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
