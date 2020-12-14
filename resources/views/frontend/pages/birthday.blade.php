@extends('frontend.master')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Today's</span> Birthday</h2>                
            </div>
         </div>
         <div class="row justify-content-center">
               <img src="{{ asset('image/birthday.png') }}" alt="" class="responsive text-center" width="300" height="300">
         </div>

         <style type="text/css">
            h1{ font-size: 25px; }
            .name{font-weight: 600; color: #fda638; }
         </style>

         @php  
            $today = Carbon\Carbon::now()->format('Y-m-d');
            $birthdays = App\birthday::where('dob', $today)->get();  
         @endphp
         @if ($birthdays->count()>0)
            
            <table class="table table-bordered text-center bg-info text-white">
               <h1 class="text-center">Many Many Happy Returns Of The Day</h1>
               <thead class="thead-dark">

                  <tr>
                     <th scope="col">Name</th>
                     <th scope="col">Class</th>
                     <th scope="col">Id/Roll</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($birthdays as $birthday)   
                     <tr>
                        {{-- <th scope="row">1</th> --}}
                        <td><h1 class="name"> {{$birthday->name}}</h1></td>
                        <td><h1 class="name"> {{$birthday->class}}</h1></td>
                        <td><h1 class="name"> {{$birthday->classId}}</h1></td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @endif
      </div>
   </section>
@endsection
