@extends('layouts.app')
@section('title')Управление постами@endsection
@vite('resources/css/auth.css')
@section('content')
    <div class="container mt-5">
        <h1>Личный кабинет</h1>
        @if(auth()->check() && auth()->user()->admin_level == 1)
            <div class="post-edit">
                <!-- Форма для редактирования поста -->
                <!-- Ваши заказы -->
                <h2>Все заказы:</h2>
                <ul class="allOrders">
                    @foreach($allOrders as $order)
                        <button type="button" class="btn btn-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Верхнее всплывающее окно">
                            <li>Заказ №{{ $order->id }} - {{ $order->product_type }} / Заказ от: {{ $order->created_at }}</li>
                        </button>
                        <ul>
                            <li>Пользователь: {{ $order->user->name }}</li>
                            <li>Email: {{ $order->user->email }}</li>
                            <li>Номер телефона: {{ $order->user->phone }}</li>
                        </ul>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(auth()->check() && auth()->user()->admin_level == 0)
            <h2>Ваши заказы:</h2>
            <ul class="orders">
                @foreach($userOrders as $order)
                    <li>
                        <button type="button" class="btn btn-success" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="top" data-bs-content="Верхнее всплывающее окно">
                            {{ $order->product_type }} - заказ от {{ $order->created_at }}
                        </button>
                    </li>
                @endforeach
            </ul>
        @elseif(auth()->user()->admin_level == 1)

        @else
            <p>У вас пока нет заказов.</p>
        @endif

        @if(auth()->check() && auth()->user()->admin_level == 0)
            <h4 class="mt-5">Создать заявку</h4>
            <!-- Форма для создания заявки -->
        <form action="{{ route('order.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="product_type" class="form-label">Выберите товар:</label>
                <select name="product_type" id="product_type" class="form-control">
                    <option value="Кофр">Кофр</option>
                    <option value="Кейс">Кейс</option>
                    <option value="Чемодан">Чемодан</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">Комментарии:</label>
                <textarea name="comments" id="comments" class="form-control" rows="4"></textarea>
            </div>

            <div class="mb-3">
                <label for="budget" class="form-label">Бюджет:</label>
                <input type="text" name="budget" id="budget" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Создать заявку</button>
        </form>

        @endif
    </div>


@endsection
