<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подтверждение заказа</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        p {
            margin-bottom: 10px;
        }

        .summary {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .item {
            margin-bottom: 5px;
        }

        .item label {
            font-weight: bold;
        }

        .item span {
            color: #555;
        }

        .thank-you {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="block__1">
        <h2>Компания KOFR-4.</h2>
    </div>

    <div class="summary">
        <p><strong>Поздравляем! Ваш заказ принят.</strong></p>

        <!-- Вывод данных из формы -->
        <div class="item">
            <label>Материал для кофра:</label>
            <span>
                @if($formData['material'] == 1)
                    Алюминиевый композитный лист 4 мм
                @elseif($formData['material'] == 2)
                    Фанера 6 мм
                @elseif($formData['material'] == 3)
                    Фанера 9 мм
                @elseif($formData['material'] == 4)
                    Сотовый пластик 4/6/9 мм
                @else
                    Не указан
                @endif
            </span>
        </div>

        <div class="item">
            <label>Внутренние размеры (в сантиметрах):</label>
            <span>
                Длина: {{ $formData['inlenght'] }} см,
                Ширина: {{ $formData['inwidth'] }} см,
                Высота: {{ $formData['inheight'] }} см
            </span>
        </div>

        <!-- Вывод остальных данных -->
        @foreach($formData as $key => $value)
            @if(!in_array($key, ['material', 'inlenght', 'inwidth', 'inheight', '_token']))
                <div class="item">
                    <label>{{ ucfirst($key) }}:</label>
                    <span>{{ $value ?: 'Не указано' }}</span>
                </div>
            @endif
        @endforeach
    </div>

    <div class="thank-you">
        <p>Спасибо за ваш заказ! Мы свяжемся с вами в ближайшее время.</p>
    </div>
</div>

</body>
</html>
