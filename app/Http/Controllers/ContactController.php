<?php

namespace App\Http\Controllers;

use App\Countries;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Get the contact page.
     *
     * @return mixed
     */
    public function view()
    {
        $data['title']     = 'Contact';
        $data['countries'] = Countries::all();
        return view('frontend.contact', $data);
    }

    /**
     * Send the mail.
     *
     * @param Requests\ContactValidator $input
     */
    public function send(Requests\ContactValidator $input)
    {
        $data = $input->all();

        Mail::send('emails.contact', $data, function ($message) use ($input) {
            $message->from($input->email, $input->name);
            $message->to(config('voicetank.contactEmail'));
        });

        return redirect()->back(302);
    }
}
