<?php 

namespace App\Http\Controllers;

class PageController extends Controller{
	public function getIndex() {
		# process varibale data or params
		#talk to the Model
		#recive from model
		#compile or process the data fform the model if needed
		#pass that data to the correct view
		return view('welcome');
	}

	public function getAbout(){
		return view('pages/about');// .or / works the same they mean the directory 
	}

	public function  getContact(){
		return view('pages/contact');
	}

	public function getCreateMess() {
		return view('create_mess');
	}

	public function getMessInfo(){
		return view('mess_info');
	}

	public function getMessProfile(){
		return view('mess_profile');
	}
	public function getRoomInfo(){
		return view('room_info');
	}

	public function getSearchResult(){
		return view('search_result');
	}

	public function test(){
		return view('test');
	}

	public function get_edit_mess(){
		return view('edit_mess_basic');
	}

	public function get_edit_room_info(){
		return view('edit_mess_room_info');
	}

	public function get_mess_info_home(){
		return view('mess_info_home');
	}
}

?>