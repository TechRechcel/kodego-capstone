<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //


    public function getAllDepartments(Request $request)
    {
        $departments = Department::all();
        return view('index', ('departments') -> $departments);
    }
    public function myBookings(Request $request)
    {
        $user = Auth::user();
        $bookings = Booking::where('user_id',Auth::user()->id)->get();
        return \view('myBookings', ['bookings' => $bookings]);
    }

}

