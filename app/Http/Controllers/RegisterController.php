<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Validator;
use Session;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $get = Users::get();
        return view('customer',['customers'=> $get]);
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
        // dd($request->all());
        $rules = array(
            'name' => 'required | string',
            'password' => 'required',
            'mobile' =>'required',
            'email' =>'required | unique:user,email',
            'image' => 'required | image',
            'gender' =>'required',
            'hobbies' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required'
                );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect('/register')
            ->withErrors($validator)
            ->withInput();
        }else{
        $user=$request->all();
        $img = $request->file('image');
       
        $new = rand(). '.' . $img->getClientOriginalName();
        $img->move(public_path('images'), $new);
        $user['image'] = $new;
        $user['hobbies'] = implode(",",$user['hobbies']);
        Users::create($user);

        Session::flash('message', 'Successfully created customer!');
        return redirect('/customer');
        }

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
        $customer = Users::find($id);
       
        $hobbies= explode(",",$customer->hobbies);
        return view('edit')
        ->with('customer',$customer)
        ->with('hobby',$hobbies);
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
   
        // dd($request->all());
        $rules = array(
            'name' => 'required | string',
            'password' => 'required',
            'mobile' =>'required',
            'email' =>'required | unique:user,email,'.$id,
            'image' => 'required_if:id,null | nullable | image',
            'gender' =>'required',
            'hobbies' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required'
                );

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return redirect('create/'.$id.'/edit')
            ->withErrors($validator)
            ->withInput();
        }else{
        $user=$request->all();
        unset($user['_token']);
        unset($user['_method']);
        $img = $request->file('image');
       if($img != null ){
        $new = rand(). '.' . $img->getClientOriginalName();
        $img->move(public_path('images'), $new);
        $user['image'] = $new;
       }
        $user['hobbies'] = implode(",",$user['hobbies']);
        Users::where('id',$id)->update($user);

        Session::flash('message', 'Successfully updated customer!');
        return redirect('/customer');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Users::find($id);
        $delete->delete();

        Session::flash('message','Successfully deleted');
        return redirect('/customer');
    }
}
