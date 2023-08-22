<?php

namespace App\Http\Controllers;


use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    function index () {
        return view('home.contacts');
    }

    function show () {
        return view('mail.successEmail');
    }

    function contact (Request $request) {
        $nome=$request->nome;
        $cognome=$request->cognome;
        $email=$request->email;
        $messaggio=$request->messaggio;

        try{
            Mail::to($email)->send(new ContactMail($nome, $cognome, $email, $messaggio));
         return redirect()->route('SuccessEmail')->with('successMessage', 'messaggio di successo'); ;
        }
        catch (Exception $error){
        return redirect()->back()->with('errorMessage', 'Si è verificato un errore durante l\'invio della mail.');
        }
                  
        

        

    }
}
