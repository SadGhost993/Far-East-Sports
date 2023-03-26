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
    <section class="auth">
        <img class="auth__logo" src="{{Vite::asset('resources/img/logo.svg')}}">
        <div class="auth__block">
            <form class="auth__form" action="">
                <div class="auth__input-container">
                    <div class="auth__icon-container">
                        <img src="{{Vite::asset('resources/img/icon/user.svg')}}" alt="">
                    </div>
                    <input class="auth__input" type="text" placeholder="Логин">
                </div>
                <div class="auth__input-container">
                    <div class="auth__icon-container">
                        <img src="{{Vite::asset('resources/img/icon/lock.svg')}}" alt="">
                    </div>
                    <input class="auth__input" type="text" placeholder="Пароль">
                    <div class="auth__eyes-icon-container">
                        <img src="{{Vite::asset('resources/img/icon/eyes.svg')}}" alt="">
                    </div>
                </div>
                <div class="auth-form__footer">
                    <input class="auth__checkbox" id="remember" type="checkbox">
                    <label for="remember">Запомнить меня</label>
                    <button class="auth__btn" name="button">Войти</button>
                </div>
            </form>
        </div>
    </section>
</main>

</body>
</html>
