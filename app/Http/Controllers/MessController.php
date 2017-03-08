<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mess;
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
      DB::insert('insert into student (name) values(?)',[$name]);
      echo "Record inserted successfully.<br/>";
      echo '<a href = "/insert">Click Here</a> to go back.';
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
}
