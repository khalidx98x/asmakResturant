<?php

namespace App\Http\Controllers;

use App\Floor;
use App\FloorManager;
use App\Table;
use App\TableTransaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class frontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $floorManager = FloorManager::paginate(10);

        // FloorManager::paginate(10);


        return view('user.home')->with('managers', $floorManager);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $floor = Floor::where('id', $id)->get()->first();

        $tables = Table::where('floor_id', $id)->get();

        // dd($tables);
        return view('user.showFloor')->with([
            'floor' => $floor,
            'tables' => $tables
        ]);
    }


    // Start booking the tabel and give it a record
    public function book($floor, $table)
    {

        $floor = Floor::where('id', $floor)->get()->first();

        //update the status of the table id to booked 
        Table::where('id', $table)->update(['status' => '1']);

        TableTransaction::create([
            'floor_manager_id' => $floor->floorManager->id,
            'floor_id' => $floor->id,
            'table_id' => $table
        ]);

        $this->checkFloorTable($floor->id);

        return redirect()->route('user.asmak.show', ["id" => $floor->id]);
    }



    // when book is ended sucessfully 

    public function endBook($floor, $table)
    {


        $floor = Floor::where('id', $floor)->get()->first();

        $date = Carbon::now();

        //update the status of the table id to unbooked 
        Table::where('id', $table)->update(['status' => '0']);


        // get the record of the last inserted table id 
        // $record = TableTransaction::latest('table_id')->first();


        //update the record
        $record = TableTransaction::where('table_id', $table)->where('EndDate', null)->update([
            'EndDate' => $date->toDateTimeString(),
            'transaction_end_state' => '1'
        ]);

        // TableTransaction::where('id', $record['id'])->latest()->update([
        //     'EndDate' => $date->toDateTimeString(),
        //     'transaction_end_state' => '1'
        // ]);

        //update the floor because after this transaction now its have some available tables 
        $floor->update(['status' => '0']);

        return redirect()->route('user.asmak.show', ["id" => $floor->id]);
    }


    // when book is cancelled 
    public function cancelBook($floor, $table)
    {

        $floor = Floor::where('id', $floor)->get()->first();

        $date = Carbon::now();

        //update the status of the table id to unbooked 
        Table::where('id', $table)->update(['status' => '0']);


        // get the record of the last inserted table id 
        $record = TableTransaction::latest('table_id')->first();

        //update the record
        $record = TableTransaction::where('table_id', $table)->where('EndDate', null)->update([
            'EndDate' => $date->toDateTimeString(),
            'transaction_end_state' => '2'
        ]);
        // TableTransaction::where('id', $record['id'])->latest()->update([
        //     'EndDate' => $date->toDateTimeString(),
        //     'transaction_end_state' => '2'
        // ]);

        //update the floor because after this transaction now its have some available tables 
        $floor->update(['status' => '0']);

        return redirect()->route('user.asmak.show', ["id" => $floor->id]);
    }



    public function checkFloorTable($floor_id)
    {

        $tableNumbers = Table::where('floor_id', $floor_id)->count();


        $tables = Table::where('floor_id', $floor_id)->get();

        // counter for the booked tables
        $bookedTables = 0;
        foreach ($tables as $table) {
            if ($table->status === '1') {
                $bookedTables++;
            }
        }
        // check if all the tables are booked or not 
        if ($bookedTables === $tableNumbers) {
            // set the floor to 1 'busy' because all teables are booked
            Floor::where('id', $floor_id)->update(['status' => '1']);
        }
    }
}
