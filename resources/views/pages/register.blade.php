@extends('layouts.app')
@vite('resources/css/auth.css')
@section('title', 'Регистрация')
    <div class="container mt-5" style="height: 100%; width: 100%; display: flex; justify-content: center; align-items: center;">
        <div class="card bg-dark">
            <div class="card-header text-white">{{ __('Регистрация') }}</div>

            <div class="card-body text-white bg-dark">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Имя') }}</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required autofocus>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('Email') }}</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">{{ __('Phone') }}</label>
                        <input type="number" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Пароль') }}</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{ __('Подтверждение пароля') }}</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">{{ __('Зарегистрироваться') }}</button>
                        <a class="ml-3" href="/login">Войти</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
