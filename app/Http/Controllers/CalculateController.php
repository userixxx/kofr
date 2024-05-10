<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\CalculateEmail;

class CalculateController extends Controller
{
    public function index(Request $request)
    {
        // Проверяем, была ли отправлена форма
        if ($request->isMethod('post')) {
            // Валидация данных формы
            $validatedData = $request->validate([
                'email' => 'required|email',
                // Добавьте другие правила валидации для остальных полей формы по необходимости
            ]);

            // Отправка письма
            Mail::to($validatedData['email'])->send(new CalculateEmail($request->all()));

            // После отправки перенаправляем пользователя с сообщением об успешной отправке или другим сообщением по вашему выбору
            return redirect()->back()->with('success', 'Письмо успешно отправлено!');
        }

        // Если форма не была отправлена, просто возвращаем представление с пустыми данными
        return view('index', ['formData' => $request->all()]);
    }


}
