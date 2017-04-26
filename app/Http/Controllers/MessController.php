<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use input;
use App\Mess;
use DB;
use Auth;
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
      $manager = Auth::user()->reg;
      DB::insert('insert into basic_mess_info (mess_name,mess_location,total_seat,vacant_seat,total_room,distance,description,manager) values(?,?,?,?,?,?,?,?)',[$name,$location,$total_seat,$vacant_seat,$total_room,$distance,$description,$manager]);
      return view('mess_info_home');
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
        //$mess_id = $_GET['id'];
        $mess_id = 3;
        echo $mess_id;
        $mess = DB::select('select * from basic_mess_info where mess_id = ?',[$mess_id]);
        $feature = DB::select('select * from mess_features where mess_id = ?',[$mess_id]);
        $room = DB::select('select * from room_info where mess_id =?',[$mess_id]);
        $member = DB::select('select distinct room_id,name from mess_members,users where mess_members.mess_id =?',[$mess_id]);
      return view('mess_profile',['mess'=>$mess])->with(['feature'=>$feature])->with(['room'=>$room])->with(['member'=>$member]);
      //  return view('test')->with(['room'=>$room])->with(['member'=>$member]);
        echo "success";
    }

public function insert_room(Request $request){
    foreach($request as $request) {
    $seat = $request->input('seat_no');
    
    $vacant_seat = $request->input('vacant_seat');
    $cost =$request->input('fare') ;
      $description = $request->input('description');
      DB::insert('insert into room_info (total_seat,vacant_seat,cost,add_info) values(?,?,?,?)',[$seat,$vacant_seat,$cost,$description]);
      //return view('/'); 
    }
    return "Success";
      
   }

   public function simple_search(Request $req){
    $location = $req->input('area');
    $seat = $req->input('vacant_seat');
    $distance = $req->input('distance');
    $rent_start = $req->input('fare_from');
    $rent_last = $req->input('fare_to');

    $location = "%".$location."%";
    if($location==NULL){
        $location ="%%";
    }
    if($seat == NULL){
        $seat = 0;
    }
    if($distance == NULL){
        $distance = 1000000;
    }
    if($rent_start == NULL){
        $rent_start=0;
    }
    if($rent_last == NULL){
        $rent_last = 1000000;
    }
    echo "Loc -".$location." dist-".$distance." rent-".$rent_start." to ".$rent_last." ." ;
    //$search_location = DB::table('basic_mess_info')->select('mess_id','mess_name','distance','mess_location')->where('mess_location','like',$location);
  //  dd($mess);
    //$search_vacant = DB::table('basic_mess_info')->select('mess_id','mess_name','distance','mess_location')->where('vacant_seat','>=',$seat);//->union($search_location);
//    $search_cost = DB::table('room_info')->select('mess_id','cost')->wherebetween('cost',[$rent_start,$rent_last])->union($search_vacant)->groupby('mess_id')->distinct()->get();
    $mess= DB::table('basic_mess_info')->join('room_info', 'basic_mess_info.mess_id', '=', 'room_info.mess_id')->select('basic_mess_info.*')->where([['basic_mess_info.vacant_seat','>=',$seat],['mess_location','like',$location],['distance','<=',$distance]])->wherebetween('cost',[$rent_start,$rent_last])->groupby('room_info.mess_id')->distinct()->simplePaginate(15);


#foreach ($mess as $mess) {
    # code...
#    $val = $mess->mess_name;
#    echo $val;
#}

    //select distinct basic_mess_info.mess_id,basic_mess_info.vacant_seat,mess_name,mess_location,cost from basic_mess_info, room_info where basic_mess_info.mess_id = room_info.mess_id and basic_mess_info.mess_location like '?' and basic_mess_info.vacant_seat >= ? and basic_mess_info.distance <= ? and room_info.cost between ? and ? GROUP BY basic_mess_info.mess_id,basic_mess_info.vacant_seat,mess_name,mess_location",[$location,$seat,$distance,$rent_start,$rent_last]);
     return view('search_result')->with(['mess'=>$mess]);
        echo "success";
        
   }

   public function test(Request $req){
    $room_id = $req->input('room_id');
    $reg = $req->input('reg_no');
    $date = $req->input('vacant_from');
    $mess_id = 3;
    if($room_id != NULL and $reg != NULL) {
        DB::table('mess_members')->insert(['mess_id'=>$mess_id,'room_id' => $room_id , 'reg'=> $reg , 'vacant_from' => $date]);

        //DB::insert('insert into mess_members (mess_id, room_id,reg,vacant_from) values(?,?,?,?)',[$mess_id,$room_id,$reg,$date]);
    }

    
    $member_info= DB::table('mess_members')->where('mess_id','=',$mess_id)->get();
    $room = DB::table('room_info')->where('mess_id','=',$mess_id)->get();
   echo "room id : ".$room_id."reg : ".$reg."vacant_from : ".$date;
   // return view('test')->with(['room'=>$room])->with(['member_info'=>$member_info]);
    
   }

   public function mess_list(){
        
    $mess= DB::table('basic_mess_info')->simplePaginate(2);

     return view('mess_list')->with(['mess'=>$mess]);
        echo "success";
        
   }

   public function mess_edit(){
    $mess_id = 3;
    $mess_info= DB::table('basic_mess_info')->where('mess_id','=',$mess_id)->get();
    return view('edit_mess_basic')->with(['mess_info'=>$mess_info]);
   }

   public function edit_room_info(){
    $mess_id = 3;
    $room_info= DB::table('room_info')->where('mess_id','=',$mess_id)->get();
    return view('edit_mess_room_info')->with(['room_info'=>$room_info]);
   }

   public function edit_single_room_info($room_id, $total_seat, $vacant_seat, $cost, $add_info){
    $mess_id = 3;
    /*
    $room_info= DB::table('room_info')->where([
                                        ['mess_id','=',$mess_id],
                                        ['room_id','=',$room_id]
                                        ])
                                      ->get();
                                      */
    $room_info = [];
    $room_info['room_id'] = $room_id;
    $room_info['total_seat'] = $total_seat;
    $room_info['vacant_seat'] = $vacant_seat;
    $room_info['cost'] = $cost;
    $room_info['add_info'] = $add_info;

    return view('update_room_info')->with("room_info",$room_info);
   }

    public function member_list(Request $req){
    $room_id = $req->input('room_id');
    $reg = $req->input('reg_no');
    $date = $req->input('vacant_from');
    $mess_id = 3;
    if($room_id != NULL and $reg != NULL) {
        DB::table('mess_members')->insert(['mess_id'=>$mess_id,'room_id' => $room_id , 'reg'=> $reg , 'vacant_from' => $date]);

        //DB::insert('insert into mess_members (mess_id, room_id,reg,vacant_from) values(?,?,?,?)',[$mess_id,$room_id,$reg,$date]);
    }
    
    $member_info= DB::table('mess_members')->where('mess_id','=',$mess_id)->orderBy('room_id')->get();
    $room = DB::table('room_info')->where('mess_id','=',$mess_id)->get();
   
    return view('add_member')->with(['room'=>$room])->with(['member_info'=>$member_info]);
   
   }

   public function mess_info_updated(Request $request){
    $mess_id = 3;
    $name = $request->input('mess_name');
      $location = $request->input('location');
      $total_seat = $request->input('total_seat');
      $vacant_seat = $request->input('vacant_seat');
      $total_room = $request->input('total_room');
      $distance = $request->input('distance');
      $description = $request->input('description');
      DB::table('basic_mess_info')->where('mess_id','=',$mess_id)->update(['mess_name' => $name,'mess_location' => $location,'total_seat' => $total_seat,'vacant_seat' => $vacant_seat,'total_room' =>$total_room ,'distance' => $distance,'description' => $description]);
      //return view('/mess_profile');

      echo "Basic Mess Info updated";
   }

public function room_info_update(Request $request){
    $mess_id = 3;
    //foreach($request as $request) {
    $room_id = $request->input('room_id');
    $seat = $request->input('seat_no');
    
    $vacant_seat = $request->input('vacant_seat');
    $cost =$request->input('fare') ;
      $description = $request->input('add_info');
      DB::table('room_info')->where([
                                        ['mess_id','=',$mess_id],
                                        ['room_id','=',$room_id]
                                        ])
      ->update(['total_seat' => $seat,'vacant_seat' => $vacant_seat,'cost' => $cost,'add_info' => $description]);
      //return view('/'); 
    //}
    //session::flush('success','Update successful!');
    //return view('edit_room_info');
      echo "Succeed = ".$cost."Add_info = ".$description;
}

public function manager_change(){

}

public function show_map(){
    return view('map');
}
}
