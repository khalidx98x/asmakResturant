<?php

namespace App\Http\Controllers;

use App\Http\Requests\FloorManager\StoreRequest;
use App\Receptionist;
use App\User;
use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receptionists = Receptionist::paginate(10);
        return view('admin.showReceptionists')->with('receptionists', $receptionists);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $receptionists = Receptionist::all();
        return view('admin.createReceptionists')->with('receptionists', $receptionists);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeRequest $request)
    {
        $request_data = $request->except(['password']);

        $request_data['password'] = bcrypt($request['password']);

        User::create([
            'name' => $request_data['name'],
            'email' => $request_data['email'],
            'password' => $request_data['password'],
            'type' => '2'
        ]);

        Receptionist::create($request_data);

        alert()->success('تم التسجيل بنجاح', 'Success');
        return redirect()->route('admin.receptionists.index');
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
        $this->validate($request, [
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:floor_managers,email,' . $id,
            'password' => $request->password != null ? 'required|sometimes|min:6' : ''
        ]);

        $receptionists = Receptionist::where('id', $id)->first();

        
        if (!empty($request->password)) {
            
            $request_data = $request->except(['password']);
            $request_data['password'] = bcrypt($request['password']);
            
            // if password is not null
            User::where('email', $receptionists->email)->where('type','2')->update([
                'name' => $request_data['name'],
                'email' => $request_data['email'],
                'password' => $request_data['password'],
                'type' => '2'
            ]);
    
        } else {

            $request_data = $request->except(['password']);
            // if password is null
            User::where('email', $receptionists->email)->where('type','2')->update([
                'name' => $request_data['name'],
                'email' => $request_data['email'],
                'type' => '2'
            ]);
        }


        $receptionists->update($request_data);
      

        alert()->success('تم التعديل بنجاح', 'Success');
        return redirect()->route('admin.receptionists.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $receptionists = Receptionist::where('id', $id)->first();

        User::where('email', $receptionists->email)->where('type', '2')->delete();

        $receptionists->delete();

        alert()->success('تم الحذف بنجاح', 'Success');
        return redirect()->route('admin.receptionists.index');
    }
}
