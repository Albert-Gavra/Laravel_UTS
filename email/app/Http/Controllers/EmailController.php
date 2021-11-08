<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Email;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $active_welcome = "";
        $active_emails = "active";
        $active_websites = "";

        $emails = Email::all();
        return view('email', compact('active_welcome', 'active_emails', 'active_websites', 'emails'));
    }

    public function indexUser()
    {
        //
        $active_welcome = "";
        $active_emails = "active";
        $active_websites = "";
        $no = 0;

        $emails = Email::all();
        return view('emailUser', compact('active_welcome', 'active_emails', 'active_websites', 'emails', 'no'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('emailCreate');
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
        Email::create([
            'name_email' => $request->email
        ]);

        return redirect(route('emails.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name_email)
    {
        //
        $email = Email::where('name_email', $name_email)->first();
        return view('emailView', compact('email'));
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
        $email = Email::findOrFail($id);
        return view('emailEdit', compact('email'));
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
        $name_email = Str::upper(Str::substr($request->email, 0, 100));
        $email = Email::findOrFail($id);
        $email->update([
            'name_email' => $name_email
        ]);
        return redirect(route('emails.index'));
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
        $email = Email::findOrFail($id);
        $email->delete();
        return redirect(route('emails.index'));
    }

    public function give()
    {
        $active_welcome = "";
        $active_emails = "";
        $active_websites = "active";

        $emails = Email::all();
        return view('website.websiteCreate', compact('active_welcome', 'active_emails', 'active_websites', 'emails'));
    }
}
