<?php

namespace App\Http\Controllers;

use App\Floor;
use App\FloorManager;
use App\Http\Requests\FloorManager\StoreRequest;
use App\User;
use Illuminate\Http\Request;


// use Illuminate\Http\Request;

class FloorManagersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $floorManager = FloorManager::paginate(10);
        $floors = Floor::all();

        return view('admin.showFloorManagers')->with([
            'managers' => $floorManager,
            'floors' => $floors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $floors = Floor::all();
        return view('admin.createFloorManagers')->with('floors', $floors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
     

        $request_data = $request->except(['password']);

        $request_data['password'] = bcrypt($request['password']);

        User::create([
            'name' => $request_data['name'],
            'email' => $request_data['email'],
            'password' => $request_data['password'],
            'type' => '1'
        ]);

        FloorManager::create($request_data);

        alert()->success('تم التسجيل بنجاح', 'Success');
        return redirect()->route('admin.floorManagers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

        $floorManager = FloorManager::where('id', $id)->first();

        
        if (!empty($request->password)) {
            
            $request_data = $request->except(['password']);
            $request_data['password'] = bcrypt($request['password']);
            
            // if password is not null
            User::where('email', $floorManager->email)->where('type','1')->update([
                'name' => $request_data['name'],
                'email' => $request_data['email'],
                'password' => $request_data['password'],
                'type' => '1'
            ]);
    
        } else {

            $request_data = $request->except(['password']);
            // if password is null
            User::where('email', $floorManager->email)->where('type','1')->update([
                'name' => $request_data['name'],
                'email' => $request_data['email'],
                'type' => '1'
            ]);
        }


        $floorManager->update($request_data);
      

        alert()->success('تم التعديل بنجاح', 'Success');
        return redirect()->route('admin.floorManagers.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $manager = FloorManager::where('id', $id)->first();


        $dell = Floor::where('floor_manager_id', $id);
        $dell->update(['floor_manager_id' => null]);

        User::where('email', $manager->email)->where('type', '1')->delete();

        $manager->delete();


        alert()->success('تم الحذف بنجاح', 'Success');
        return redirect()->route('admin.floorManagers.index');
    }
}
