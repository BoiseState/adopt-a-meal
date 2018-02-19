<?php

namespace App\Http\Controllers;
use App\Calendar;
use App\Mail\VolunteerFormEmail;
use App\Mail\VolunteerRequestEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MealIdeasController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Calendar $calendar)
    {
       // $events = array_merge($calendar->findVolunteerEvents(), $calendar->findAllAccepted());

        $volunteerEvents = $calendar->findVolunteerEvents();
        $acceptedEvents = $calendar->findAllAccepted();

        return view('mealideas', ['mealideas' => $acceptedEvents]);

    }

    /**
     */
}