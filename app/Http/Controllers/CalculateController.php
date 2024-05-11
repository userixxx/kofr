<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CalculateEmail;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TelegramNotification;

class CalculateController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'email' => 'required|email',
            ]);

            Mail::to($validatedData['email'])->send(new CalculateEmail($request->all()));

            Notification::route('telegram', '1212477490')->notify(new TelegramNotification());

            return redirect()->back()->with('success', 'Письмо успешно отправлено!');
        }

        return view('index', ['formData' => $request->all()]);
    }
}
