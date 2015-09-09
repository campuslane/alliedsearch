<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function postContact(Request $request)
    {
        $rules = [
            'name' => 'required', 
            'email' => 'required|email', 
            'content' => 'required', 
            'g-recaptcha-response' => 'required|recaptcha',
        ];

        $this->validate($request, $rules);

        $data = ['email'=>$request->email, 'name'=>$request->name, 'content'=>$request->content];

        $requestArray = $request->all();

        $mailSent = Mail::send('emails.contact', $data, function ($m) use($requestArray) {
            $m->to('info@campuslane.com', 'Don May')
            ->from($requestArray['email'])
            ->subject('Contact Form from Website: ' . $requestArray['name']);
        });

        $message = $mailSent ? 'Thank you your message was sent' : 'Sorry there was an error sending your message, please send email to: hrvp@alliedsearchinc.com';

        return redirect()->to('/contact')->with('message', $message);
    }


    public function postResume(Request $request)
    {
        $rules = [
            'name' => 'required', 
            'email' => 'required|email', 
            'content' => 'required', 
            'resume' => 'required', 
            'g-recaptcha-response' => 'required|recaptcha',
        ];

        if($request->hasFile('resume')) {
            $destinationPath = storage_path() . '/resumes';
            $attachment = $destinationPath . '/' . $request->file('resume')->getClientOriginalName();
            $request->file('resume')->move($destinationPath);
        } 

        $this->validate($request, $rules);

        $data = ['email'=>$request->email, 'name'=>$request->name, 'content'=>$request->content];

        $requestArray = $request->all();

        $mailSent = Mail::send('emails.resume', $data, function ($m) use($requestArray, $attachment) {
            $m->to('info@campuslane.com', 'Don May');
            $m->from($requestArray['email']);
            $m->attach($attachment);
            $m->subject('Resume Submission from Website: ' . $requestArray['name']);
        });

        $message = $mailSent ? 'Thank you your message/resume was sent' : 'Sorry there was an error sending your message/resume, please send email to: hrvp@alliedsearchinc.com';

        return redirect()->to('/resume')->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
