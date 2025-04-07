<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    //Views
    public function viewBooking(){
        GeneralController::renderHeader([
            "tittle" => "Booking",
            "submodule" => 1
        ]);

        echo view("components.booking.booking", []);
        GeneralController::renderFooter(["components/booking/booking"], "", 2, 2);
    }
}
