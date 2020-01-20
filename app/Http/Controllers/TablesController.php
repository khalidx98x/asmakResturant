<?php

namespace App\Http\Controllers;

use App\Floor;
use App\FloorsTables;
use App\Http\Requests\Table\StoreRequest;
use App\Table;
use Illuminate\Http\Request;

class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $floors= Floor::paginate(10);
        // $tables = FloorsTables::paginate(10);

        return view('admin.showTables')->with([
            'floors'=>$floors
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $floors=Floor::all();
        return view('admin.createTables')->with('floors', $floors);

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $floor_id = $request['floor_id'];
       
        $floor = Floor::where('id',$floor_id)->get()->first();
        $tableNumbers=Table::where('floor_id',$floor_id)->count()+1;

        // dd($tableNumbers);

        $floorFirstChar=$floor->name[0];

        $table_name = strtoupper('TT'.$floorFirstChar.'00'.$tableNumbers);

        
        $table =Table::create([
            'name'=>$table_name,
            // 'status'=>$request['status'],
            'floor_id'=>$floor_id
        ]);
        
     

        alert()->success('تم التسجيل بنجاح', 'Success');
        return redirect()->route('admin.tables.create');

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

        Table::where('id',$id)->delete();


        alert()->success('تم الحذف بنجاح', 'Success');
        return redirect()->route('admin.tables.index');
    }
}
