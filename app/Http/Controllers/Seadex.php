<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Seadex extends Controller
{

    public function index()
    {
        return view('components.index-page');
    }

    public function services()
    {
        return view('components.services-page');
    }

    public function product()
    {
        return view('components.product-page');
    }

    public function showForm()
    {
        return view('components.contact-us-page');
    }

    public function submitForm(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'company_name' => 'required',
            'phone_number' => 'required',
            'country' => 'required',
            'inquiry_type' => 'required',
            'inquiry_details' => 'required',
        ]);

        $mailForUsers = new PHPMailer(true);
        $mailForSeadex = new PHPMailer(true);
        try {
            $mailForUsers->SMTPDebug = 0;
            $mailForUsers->isSMTP();
            $mailForUsers->Host       = 'smtp.gmail.com';
            $mailForUsers->SMTPAuth   = true;
            $mailForUsers->Username   = 'indonesiaseadex@gmail.com';
            $mailForUsers->Password   = 'yknj ktgp ktnu aoyf';
            $mailForUsers->isHTML(true);
            $mailForUsers->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mailForUsers->Port       = 465;

            $mailForUsers->setFrom('indonesiaseadex@gmail.com', 'Seadex');
            $mailForUsers->addAddress("$request->email", "$request->name");

            $mailForSeadex->SMTPDebug = 0;
            $mailForSeadex->isSMTP();
            $mailForSeadex->Host       = 'smtp.gmail.com';
            $mailForSeadex->SMTPAuth   = true;
            $mailForSeadex->Username   = 'indonesiaseadex@gmail.com';
            $mailForSeadex->Password   = 'yknj ktgp ktnu aoyf';
            $mailForSeadex->isHTML(true);
            $mailForSeadex->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mailForSeadex->Port       = 465;

            $mailForSeadex->addAddress('indonesiaseadex@gmail.com', 'Seadex');
            $mailForSeadex->setFrom("$request->email", "$request->name");

            $htmlContentForUser =
                "
            <h1>Thank you for contacting us!</h1>
            <h2>below here is your inquiry details which will be replied by us soon!</h2>
            <p>inquiry type : $request->inquiry_type</p>
            <p>inquiry details : $request->inquiry_details</p>
            ";

            $htmlContentForSeadex =
                "
            <h1>New Contact information!</h1>
            <p>name : $request->name</p>
            <p>email :  $request->email</p>
            <p>company name : $request->company_name</p>
            <p>phone number : $request->phone_number</p>
            <p>country : $request->country</p>
            <p>inquiry type : $request->inquiry_type</p>
            <p>inquiry details : $request->inquiry_details</p>
            ";
            $mailForUsers->Subject = "Thank you letter from seadex!";
            $mailForSeadex->Subject = "New potential customer!";  
            $mailForUsers->Body = $htmlContentForUser;
            $mailForSeadex->Body = $htmlContentForSeadex;

            $mailForUsers->send();
            $mailForSeadex->send();

            session()->flash('successMessage', 'Your form has been submitted successfully!');
            return redirect()->back();
        } catch (Exception $e) {
            session()->flash('failMessage', 'something went wrong!');

            return redirect()->back();
        }
    }


    public function about()
    {
        return view('components.about-us-page');
    }
}
