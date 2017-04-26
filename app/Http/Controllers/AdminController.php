<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
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
        return view('admin/admin_home');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_member(Request $req){
        $mess_id = Auth::user()->mess_id;
        $reg =  $req->input('mem_reg');
        $room_id = $req->input('room_id');
        echo $reg ;
        DB::table('mess_members')->where('reg', '=', $reg)->delete();
        echo "<br>delete done";
        DB::table('room_info')->where([['mess_id','=',$mess_id],['room_id' , '=' , $room_id]])->increment('vacant_seat');
      DB::table('basic_mess_info')->where ('mess_id','=',$mess_id)->increment('vacant_seat');
        return redirect('add_member');
    }

    public function get_change_manager()
    {
        $users = DB::table('users')
            ->join('mess_members', 'users.reg', '=', 'mess_members.reg')
            ->select('users.*', 'mess_members.*')
            ->get();

        return view('change_manager',['users'=>$users]);
    }
}
