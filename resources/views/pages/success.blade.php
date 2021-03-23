@extends('layout.success')
@section('title','Checkout Success')
@section('content')

    <main>
    <div class="section-success d-flew align-items-center">
      <div class="col text-center">
        <img src="{{ url('frontend/images/ic_mail.png') }}" alt="">
        <h1> Yey Sukses</h1>
        <p>
          We’ve sent you email for trip instruction
          <br/>
          please read it as well
        </p>
        <a href="index.html" class="btn btn-home-page"> 
          Home Page
        </a>
      
      </div>
    </div>
    </main>
@endsection
