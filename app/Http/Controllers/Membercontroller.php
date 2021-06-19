<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Carbon\Carbon;
$current_timestamp = Carbon::now()->timestamp;
class Membercontroller extends Controller
{
    function addData(Request $value) {
        $data = new Member;
        $data->name = $value -> name;
        $data->mass = $value -> mass;
        $data->height = $value -> height;
        $data->hair_color = $value -> hair_color;
        $data->skin_color = $value -> skin_color;
        $data->eye_color = $value -> eye_color;
        $data->birth_year = $value -> birth_year;
        $data->gender = $value -> gender;
        $data->homeworld = $value -> homeworld;
        $data->films = $value -> films;
        $data->species = $value -> species;
        $data->vehicles = $value -> vehicles;
        $data->starships = $value -> starships;
        $data->url = url()->current();
        $data->created = now();
        $data->edited = now();
        $data->save();
        return redirect('/');
    }
    function showMember(){
        $data = Member::all();
        return view('index', ['members'=>$data]);
    }
    function editMember($id){
        $data =  Member::find($id);
        return view('editmember',['members'=>$data]);
    }
    function updateData(Request $value){
     $data = Member::find($value->id);
     $data->name = $value -> name;
     $data->mass = $value -> mass;
     $data->height = $value -> height;
     $data->hair_color = $value -> hair_color;
     $data->skin_color = $value -> skin_color;
     $data->eye_color = $value -> eye_color;
     $data->birth_year = $value -> birth_year;
     $data->gender = $value -> gender;
     $data->homeworld = $value -> homeworld;
     $data->films = $value -> films;
     $data->species = $value -> species;
     $data->vehicles = $value -> vehicles;
     $data->starships = $value -> starships;
      $data->save();
      return redirect('/');
    }
    function deleteMember($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('/');
    }
}
