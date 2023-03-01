<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{
    City,
    Course,
    AssignCourse,
    Booking,
    BookingUser,
};

class BookingController extends Controller
{
    
    public function index($id = "")
    {
        $assign_course = AssignCourse::where('session_id',$id)->first();
        $courses = Course::with('assigncourse')->get();
        return view('front/booking/index', compact('courses','assign_course'));
    }


    public function getlocation($id)
    {
        $location = AssignCourse::where('course_id',$id)->with('city')->with('course')->get()->unique('city_id');
        return response()->json($location);
    }

    public function getsession($course_id , $city_id)
    {
        $sessions = AssignCourse::where('course_id',$course_id)->where('city_id',$city_id)->with('city')->get();
        return response()->json($sessions);
    }

    public function getseats($id )
    {
        $no_of_seats = AssignCourse::where('id',$id)->value('no_of_seats');
        return response()->json($no_of_seats);
    }

    public function booking_store(Request $request)
    {

        $booking = new Booking;
        $booking->bill_email = $request->billemail;
        $booking->bill_contact = $request->billphone;
        $booking->bill_fname = $request->billfname;
        $booking->bill_lname = $request->billlname;
        $booking->bill_address_one = $request->billaddline1;
        $booking->bill_address_two = $request->billaddline2;
        $booking->bill_city = $request->billcity;
        $booking->total_price = $request->price;
        $booking->bill_state = $request->billstate;
        $booking->bill_zipcode = $request->billzipcode;
        $booking->company_name = $request->billcname;
        $booking->employee_position = $request->billeposition;
        $booking->bill_contact = $request->billporder;

        if($booking->save()){
            if ($request->sname !== null && $request->semail !== null) {
                for ($i=0; $i < count($request->course_id); $i++) { 
                    $booking_user = new BookingUser;
                    $booking_user->booking_id = $booking->id;
                    $booking_user->name =  $request->sname[$i];
                    $booking_user->email =  $request->semail[$i];
                    $booking_user->course_id = $request->course_id[$i];
                    $booking_user->city_id = $request->city_id[$i];
                    $booking_user->session_id = $request->session_id[$i];
                    $booking_user->save();
                }
            }
            return true;
        }
        return false

        // if($booking->save()){
        // $booking_user = new BookingUser;
        // $booking_user->
        // }

        

    }




    
  
}
