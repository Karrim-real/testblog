<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\StoreApiRequest;
use App\Http\Requests\SendMailRequest;
use App\Mail\SendMail;
use App\Models\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class FrontendController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function contact()
    {

        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function store(ContactRequest $request)
    {
        Contact::create($request->all());
        $messageBody['name'] = $request->input('fullname');
        $messageBody['email'] = $request->input('email');
        $messageBody['subject'] = $request->input('subject');
        $messageBody['message'] = $request->input('message');
        Mail::to('fake@mail.com')->send(new SendMail($messageBody));
        return redirect()->route('home')
        ->with('status', 'Your Message have been sent');
    }

public function show()
{
    $messages = Contact::get();
    // dd($messages);
    return view('showmessage', compact('messages'));
}

public function showapi()
{
    $response = HTTP::get('https://damp-scrubland-49854.herokuapp.com/api/v1/allorders')['data'];
    // $d_response = $response;
    // dd($d_response);
    return view('apitester', compact('response'));
}

public function storeapi(StoreApiRequest $request)
{
    // dd($request->validated());
    $inputs = $request->validated();
    $response = HTTP::post('https://damp-scrubland-49854.herokuapp.com/api/v1/createorder', [
    'client' => $inputs['client'],
    'details' => $inputs['details']
    ]);


    return redirect()->route('api-test');

}

// public function sendMail(SendMailRequest $request)
// {
//     $inpust = $request->validated();
// }
public function sendMail()
{
    return redirect()->route('api-test');
}

}
