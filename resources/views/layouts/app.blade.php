<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">

    <title>@yield('title')</title>
  </head>

  <body>


    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Форма обратной связи</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
              <p>Оставьте сообщение или напишите молитвенную нужду!</p>
              <label for="exampleFormControlInput1">Введите имя</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="имя">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Введите email</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Введите телефон</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="телефон">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Введите сообщение</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>


  <div class="container-fluid">
    <div class="header">       
      <nav class="navbar navbar-expand-lg nav-castom">
        <input type="checkbox" id="hmt" class="hidden-menu-ticker">
        <label class="btn-menu" for="hmt">
          <span class="first"></span>
          <span class="second"></span>
          <span class="third"></span>
        </label>
        <ul class="hidden-menu">
          <li><a href="{{ route('welcome') }}">Главная</a></li>
          <li><a href="{{ route('aboutChurch') }}">О церкви</a></li>  
          <li><a href="{{ route('aboutPastor') }}">О пасторе</a></li>
          <li><a href="{{ route('contacts') }}">Расписание и контакты</a></li>
          <li class="li-nav-phone-hidden"><a href="" class="nav-phon-hidden">+7 999 999 99 99</a></li>
          <li class="li-nav-mail-hidden"><a href="" class="nav-mail-hidden">woldolgoprudny@allforjesus.ru</a></li>

        </ul>
        <div class="mobile-box-logo">
          <a href="{{ route('welcome') }}"><img src="assets/img/mobile-logo3.png" alt=""></a>
        </div>
        <div class="top-logo">
          <a href="{{ route('welcome') }}"><img src="assets/img/min-logo-top.png" alt="logo_cherch_dolgoprudny"></a>
        </div>
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto my-top-menu">
            <li class="nav-item">
            <a class="nav-link {{ Request::path() === '/' ? 'active' : ''}}" href="{{ route('welcome') }}">Главная<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::path() === 'aboutChurch' ? 'active' : ''}}" href="{{ route('aboutChurch') }}">О церкви <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::path() === 'aboutPastor' ? 'active' : ''}}" href="{{ route('aboutPastor') }}">О пасторе</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::path() === 'contacts' ? 'active' : ''}}" href="{{ route('contacts') }}">Расписание и контакты</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::path() === 'test' ? 'active' : ''}}" href="{{ route('test') }}">test</a>
            </li> 
          </ul>
        </div>
        <div class="top-contact">
          <a href="#">+7 999 999 99 99</a>
          <a href="#">woldolgoprudny@allforjesus.ru</a>
        </div>
        <div class="top-social">
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-vk"></i></a>
        </div>
        <div class="button-top">
          <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal">Нужна молитва?</button>
        </div>
      </nav>      
    </div>
  </div>

{{-- <div class="container-fluid colntainer-black">
    <div class="container">
      <div class="row">
        <div class="col welcom">
          <nav class="nav-middle-menu">
        
          <div>
            <ul class="nav-custom">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}">Главная3<span class="sr-only">(current)</span></a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('aboutChurch') }}">О церкви</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('aboutPastor') }}">О пасторе</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('contacts') }}">Расписание и контакты</a>
              </li> 
            </ul>
          </div>
        
          </nav>   
        </div>
      </div>
    </div>
</div> --}}

  
  @yield('content-header')

  @yield('content')

  @yield('content-tags')


  <div class="container-fluid">
    <div class="footer">
      <div class="bottom-logo">
        <a href="{{ route('welcome') }}"><img src="assets/img/min-logo-top.png" alt="logo_cherch_dolgoprudny"></a>
      </div>
      <div class="mobile-box-footer-logo">
        <a href="{{ route('welcome') }}"><img src="assets/img/mobile-logo3.png" alt="logo_cherch_dolgoprudny"></a>
      </div>
      <div class="info-cherch">
        <p>© 2018 * Централизованная религиозная организация Содружество церквей христиан веры евангельской (пятидесятников) «Слово жизни»</p>
         <p>ИНН 7719286496, ОГРН 1037739246951, бланк свидетельства Министерства юстиции ЦА 03303, учетный № 0011010266, дата выдачи 13.04.2016г.</p>
      </div>
      <div class="bottom-social">
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fab fa-vk"></i></a>
      </div>
    </div>
  </div>
  <a href="#" class="back-to-top"></a>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->
    <script src="assets/js/jquery-3.3.1.js"></script>
<script>
    // (function($) {
        function backToTop() {

          let button = $('.back-to-top');

          $(window).on('scroll', () => {
            if ($(this).scrollTop() >= 50) {
              button.fadeIn();
            } else {
              button.fadeOut();
            }
          });

          button.on('click', (e) => {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 1000);
          })
        }

        backToTop();
    // })(jQuery);
  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    

  </body>
</html>