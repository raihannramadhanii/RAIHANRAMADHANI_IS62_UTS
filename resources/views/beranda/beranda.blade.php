@extends('layout.master')
@section('title')
    Beranda
@endsection

@section('beranda', 'active')

@section('konten')
<div class="card text-bg-dark">
    <img src="image/jajanan.jpeg" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h1 class="card-title">Jajanan</h1>
        <b>
            <p class="card-text" style="font-size: 23px;">Lorem ipsum, dolor sit amet consectetur adipisicing elit dignissimos commodi officiis sequi.</p>
          </b>
        <p class="card-text"><small>Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Dignissimos commodi officiis sequi magni quidem sunt cupiditate ad saepe rerum abanimi quos atque
            , placeat labore, nobis, laudantium aliquid temporibus explicabo! officiis sequi magni quidem sunt cupiditate ad saepe rerum abanimi quos atque
            , placeat labore, nobis, laudantium aliquid temporibus explicabo</small></p>
    </div>
</div>
{{-- <div class="card text-bg-dark">
    <img src="image/jajanan.jpeg" class="card-img" alt="...">
    <div class="card-img-overlay d-flex justify-content-start align-items-center">
        <div class="text-left">
            <h5 class="card-title">Jajanan</h5>
            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Obcaecati explicabo minus deserunt odio incidunt laudantium voluptatum saepe, quis quas cum perferendis ullam provident unde minima molestias, quae totam voluptate et!</p>
            <p class="card-text"><small>. Nulla unde quas ipsum dolore saepe delectus aliquid sequi ea quod cumque dolorem tempore blanditiis, aspernatur eos fugiat quidem error quos alias!</small></p>
        </div>
    </div>
</div> --}}

@endsection
