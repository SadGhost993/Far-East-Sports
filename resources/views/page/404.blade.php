<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Far East Sports </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script
    @vite('resources/css/app.css')
</head>
<body @if(request()->url() === "http://127.0.0.1:8000")
          class="index"
    @endif>

<main class="container">
    <section class="error">
        <p class="error__number">404</p>
        <div class="error__block">
            <p class="error__title">Ошибка!</p>
            <p class="error__subtitle">К сожалению запрашиваемая Вами страница не найдена ...</p>
        </div>
    </section>
</main>

</body>
</html>
