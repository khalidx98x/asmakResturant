<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:floor_managers,email,' . $id,
            'password' => $request->password != null ? 'required|sometimes|min:6' : ''
        ]);

        $admin = Admin::where('id', $id)->first();

        
        if (!empty($request->password)) {
            
            $request_data = $request->except(['password']);
            $request_data['password'] = bcrypt($request['password']);
            
            // if password is not null
            User::where('email', $admin->email)->where('type','0')->update([
                'name' => $request_data['name'],
                'email' => $request_data['email'],
                'password' => $request_data['password'],
                'type' => '0'
            ]);
    
        } else {

            $request_data = $request->except(['password']);
            // if password is null
            User::where('email', $admin->email)->where('type','0')->update([
                'name' => $request_data['name'],
                'email' => $request_data['email'],
                'type' => '0'
            ]);
        }


        $admin->update($request_data);
      

        alert()->success('تم التعديل بنجاح', 'Success');
        return redirect()->route('admin.home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
