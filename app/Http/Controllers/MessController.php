<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mess;
use DB;
class MessController extends Controller
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
        return view('create_mess');
    }

public function insert(Request $request){
      $name = $request->input('mess_name');
      $location = $request->input('location');
      $total_seat = $request->input('total_seat');
      $vacant_seat = $request->input('vacant_seat');
      $total_room = $request->input('total_room');
      $distance = $request->input('distance');
      $description = $request->input('description');
      DB::insert('insert into basic_mess_info (mess_name,mess_location,total_seat,vacant_seat,total_room,distance,description) values(?,?,?,?,?,?,?)',[$name,$location,$total_seat,$vacant_seat,$total_room,$distance,$description]);
      return view('/mess_profile');
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
        $this->validate($request,array(
                'mess_name'=>'required',
                'location' => 'required',
                'distance' => 'required'
            ));
        $mess = new Mess ;
        $mess->name = $request->input('mess_name');
        $mess->location = $request->input('mess_location');
        $mess->distance = $request->input('distance');
        $mess->description = $request->input('description');
        /*
        $mess->name = $request->mess_name;
        $mess->location = $request->mess_location;
        $mess->distance = $request->distance;
        $mess->description = $request->description;

        $mess_name = $request->input('mess_name');
        $location = $request->input('mess_location');
        $distance = $request->input('distance');
        $description = $request->input('description');
*/
        $data = array('name'=>$mess_name,'location'=>$location,'distance'=>$distance,'description'=>$description);
        DB::table('messes')->insert($data);
        echo $mess->name ."  ". $mess->location;
        $mess->save();
        //return redirect()->route('messes.show',$mess->id);
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
        $id = 1;
        $mess = DB::select('select * from basic_mess_info where mess_id = ?',[$id]);
      return view('pages/mess_profile',['mess'=>$mess]);
        echo "success";
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

    public function show_mess_profile()
    {
        //
        $mess_id = 1;
        $mess = DB::select('select * from basic_mess_info where mess_id = ?',[$mess_id]);
      return view('pages/mess_profile',['mess'=>$mess]);
        echo "success";
    }

public function insert_room(Request $request){
    foreach($request as $request) {
    $seat = $request->input('seat_no');
    
    $vacant_seat = $request->input('vacant_seat');
    $cost =$request->input('fare') ;
      $description = $request->input('description');
      DB::insert('insert into room_info (total_seat,vacant_seat,cost) values(?,?,?)',[$seat,$vacant_seat,$cost]);
      //return view('/');
    }
    return "Success";
      
   }

   public function simple_search(){
    $key = "a";
    $key = "%".$key."%";
    $mess = DB::select("select * from basic_mess_info where mess_name like ?",[$key]);
      return view('search_result',['mess'=>$mess]);
        echo "success";
        
   }

}
