@extends('layouts.app')

@section('title', 'О пасторе')

@section('content-header')
<div class="container-fluid container-pastor-foto-bg"><!-- 
    <img src="assets/img/church_bg.png" alt=""> -->
    <div class="container">
      <div class="row">
        <div class="col bg-img-text">
          <h2>Наш пастор</h2>
        </div>
      </div>
    </div>
  </div
@endsection

@section('content')
<div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding pastor-head-text">
          <h2>Андрей Мицкевич</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ipsa, a maxime minus, repellendus neque quod officia deserunt mollitia cum suscipit quam earum nam quisquam eum, similique distinctio velit doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ipsa, a maxime minus, repellendus neque quod officia deserunt mollitia cum suscipit quam earum nam quisquam eum, similique distinctio velit doloremque.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ipsa, a maxime minus, repellendus neque quod officia deserunt mollitia cum suscipit quam earum nam quisquam eum, similique distinctio velit doloremque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ipsa, a maxime minus, repellendus neque quod officia deserunt mollitia cum suscipit quam earum nam quisquam eum, similique distinctio velit doloremque.</p>
        </div>
        <div class="col-md-2"></div>
      </div>
    </div>
</div> 
  
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-padding pastor-text-box">
          <p><span>Андрей Мицкевич </span>- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, esse. Quas tenetur dignissimos dolores accusantium ducimus praesentium facilis fugit at doloremque, suscipit omnis dolor est quo sed soluta itaque similique! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, esse. Quas tenetur dignissimos dolores accusantium ducimus praesentium facilis fugit at doloremque, suscipit omnis dolor est quo sed soluta itaque similique!</p>
        </div>
        <div class="col-md-2">
          <div class="img-round-box text-center text-padding">
            <img src="assets/img/Andrey-m2.png" alt="" class="img-fluid pastor-img">
            <p class="under-img-text">@AllforJesus<!-- </p> можно задать row - align-items: center -->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
