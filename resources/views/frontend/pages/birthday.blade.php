@extends('frontend.master')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Today's</span> Birthday</h2>                
            </div>

            <div class="row justify-content-center mb-5 pb-2">
               <div class="col-6 text-center heading-section">
                  <img src="{{ asset('image/birthday.png') }}" alt="" class="img-fluid" idth="100%" height="160">
               </div>
            </div>
               @php
                  $birthdays = App\birthday::all();
               @endphp
               @foreach($birthdays as $birthday)
                 
                    <p><h2>{{$birthday->title}}</h2></p>

                    <p><h2>{{$birthday->name}}</h2></p>
               @endforeach
           </div>
    </div>
</section>
@endsection