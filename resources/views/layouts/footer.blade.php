@section('footer')
<footer class="footer container">
    <img class="footer__logo" src="{{Vite::asset('resources/img/logo.svg')}}">
    <a class="footer__link" href="/">Вход в скаут систему</a>
    <p class="footer__link">Email:  <a class="footer__link" href="/">fareastsport@bk.ru</a></p>
    <ul class="social footer__social">
        <li class="social__link">
            <img src="{{Vite::asset('resources/img/telegram.svg')}}" alt="">
        </li>
        <li class="social__link">
            <img src="{{Vite::asset('resources/img/insta.svg')}}" alt="">
        </li>
        <li class="social__link">
            <img src="{{Vite::asset('resources/img/vk.svg')}}" alt="">
        </li>
    </ul>
</footer>
@show
