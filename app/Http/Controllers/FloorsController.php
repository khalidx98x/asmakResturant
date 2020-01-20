<?php

namespace App\Http\Controllers;

use App\Floor;
use App\FloorManager;
use App\Http\Requests\Floor\StoreRequest ;
use App\Http\Requests\Floor\UpdateRequest;
use App\Table;
use Illuminate\Http\Request;

class FloorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors = Floor::paginate(10);
        $managers=FloorManager::all();

        return view('admin.showFloors')->with([
            'floors'=>$floors,
            'managers'=>$managers
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $managers=FloorManager::all();

        return view('admin.createFloors')->with('managers',$managers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        
        Floor::create($request->all());

        alert()->success('تم التسجيل بنجاح', 'Success');
        return redirect()->route('admin.floors.index');

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
    public function update(UpdateRequest $request, $id)
    {

        $floor = Floor::where('id',$id)->get()->first();
        // update the name of the tables
        $tableNumbers=Table::where('floor_id',$id)->count();

        $tables=Table::where('floor_id',$id)->get();

        $floorFirstChar=$request['name'][0];


        // update the name of the tables was assigned to the floor
        foreach($tables as $key=>$table){
            $table->name=strtoupper('TT'.$floorFirstChar.'00'.++$key);
            $table->save();
        }


        $floor->update($request->all());

        alert()->success('تم التعديل بنجاح', 'Success');
        return redirect()->route('admin.floors.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Table::where('floor_id',$id)->delete();

        $floor=Floor::where('id',$id)->delete();
        

        alert()->success('تم الحذف بنجاح', 'Success');
        return redirect()->route('admin.floors.index');
    }
}
