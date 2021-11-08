<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Email;

class WebsiteController extends Controller
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
        $active_emails = "";
        $active_websites = "active";

        $websites = Website::all();
        return view('website', compact('active_welcome', 'active_emails', 'active_websites', 'websites'));
    }

    public function indexUser()
    {
        //
        $active_welcome = "";
        $active_emails = "";
        $active_websites = "active";
        $no = 0;

        $websites = Website::all();
        return view('websiteUser', compact('active_welcome', 'active_emails', 'active_websites', 'websites', 'no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('websiteCreate');
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
        
        Website::create([
            'email' => $request->link_email,
            'name_website' => $request->website,
            'pass_website' => $request->password
        ]);

        return redirect(route('websites.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name_website)
    {
        //
        $website = Website::where('name_website', $name_website)->first();
        return view('websiteView', compact('website'));
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
        $website = Website::findOrFail($id);

        $emails = Email::all();

        return view('website.websiteEdit', compact('website', 'emails'));
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
        $website = Website::findOrFail($id);
        $website->update([
            'email' => $request->link_email,
            'name_website' => $request->website,
            'pass_website' => $request->password
        ]);
        return redirect(route('websites.index'));
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
        $website = Website::findOrFail($id);
        $website->delete();
        return redirect(route('websites.index'));
    }
}
