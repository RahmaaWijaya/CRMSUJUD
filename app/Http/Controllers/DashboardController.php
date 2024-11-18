<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataFeed;
use App\Models\Deal;
use App\Models\Contact;

class DashboardController extends Controller
{
    


    public function index()
    {
        $recentDeals = Deal::orderBy('created_at', 'desc')->take(5)->get(); // Ambil 5 data terakhir
        $recentContact = Contact::orderBy('created_at', 'desc')->take(5)->get(); // Ambil 5 data terakhir
        return view('pages/dashboard/dashboard', compact('recentDeals','recentContact'));
    }
    /**
     * Displays the analytics screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function analytics()
    {
        return view('pages/dashboard/analytics');
    }

    /**
     * Displays the fintech screen
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function fintech()
    {
        return view('pages/dashboard/fintech');
    }
}
