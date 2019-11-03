<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use Redirect;
use Image;
use Auth;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['visitor'] = Auth::user();

        return view('pages.visitor.index', $data); // melempar data ke view
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
        $user = User::findOrFail($id);

        $user->name = $request['name'];
        $user->phone = $request['phone'];
        $user->gender = $request['gender'];
        $user->hobby = $request['hobby'];
        $user->civilization_id = $request['civilization_id'];
        $user->passport_id = $request['passport_id'];
        $user->address = $request['address'];
        
        $file = $request->file('default_picture');
        if ($request->hasFile('default_picture')) {
            $photoName = time() . '.' . $file->getClientOriginalExtension();

            $path = public_path('/uploads/profile/');
            
            $path = $path . $photoName;

            if ($file->getSize() > 1000000) {
                Image::make($file->getRealPath())->resize(1024, 1024, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($path);
            } else {
                Image::make($file->getRealPath())->save($path);
            }
            $user->default_picture = '/uploads/profile/' . $photoName;
        }

        if(!empty($request['password'])){
            $user->password = Hash::make($request['password']);
        }

        $user->save();
        return Redirect::to('visitor');
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
