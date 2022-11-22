<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use PDF;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $userData = UserData::get();

        return view('frontend.all-data', compact('userData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frontend.home');
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
        $addUserData = new UserData;

        $request->validate([
            'full_name' => 'required',
            'street_address' => 'required',
            'zip_code' => 'required',
            'city' => 'required'
        ]);

        $addUserData->full_name = $request->input('full_name');
        $addUserData->street_address = $request->input('street_address');
        $addUserData->zip_code = $request->input('zip_code');
        $addUserData->city = $request->input('city');

        $addUserData->save();

        return redirect()->route('user-data');
    }

    public function downloadPDF($id)
    {
        $pdfData = UserData::find($id);

        $pdf = PDF::loadView('frontend.pdf', compact('pdfData'));

        return $pdf->download('user-data.pdf');
    }
}
