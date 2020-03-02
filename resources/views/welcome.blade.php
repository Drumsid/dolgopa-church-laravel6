@extends('layouts.app')

@section('title', 'Слово жизни Долгопрудный')

@section('content-header')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col welcom">
          <h1>Мы рады каждому человеку, который к нам приходит. Добро пожаловать в церковь «Слово жизни»* в Долгопрудном!</h1>
          <h2>Важно, чтобы каждый человек нашел свой духовный дом. И мы будем рады, если таким домом для Вас станет наша церковь*</h2>
          <div class="button-mobile">
          <button type="button" class="btn btn-custom" data-toggle="modal" data-target="#exampleModal">Нужна молитва?</button>
        </div>
        </div>
      </div>
    </div>
  </div>    
@endsection

@section('content')
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Встреча</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/10.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Приезд</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/11.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Старый друг</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/9.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Служение сестер</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Наше видение</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Команда</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Авторитет</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="assets/img/5.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Адвент</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/6.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Иностранцы</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/7.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Наши</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
          <div class="card">
            <img src="assets/img/8.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Братская</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-custom">Go somewhere</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

@section('content-tags')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col tags">
          <p>тут в Одинцово находяться тэги и поисковые слова для роботов, например церковь долгопрудный и т.п. но можно тут сделать что угодни или просто убрать его, но лучше заменить на что то еще</p>
        </div>
        
      </div>
    </div>
  </div>  
@endsection