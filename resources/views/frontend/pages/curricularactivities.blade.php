@extends('frontend.master')
@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Curricular</span> Activities</h2>
                
            </div>
        </div>
        <div class="row">
            @foreach ($curries as $curri)
            <div class="col-12 course d-lg-flex ftco-animate">
                <div class="img" style="background-image: url({{ url('storage/curricular/'.$curri->image) }});"></div>
                <div class="text bg-light p-4">
                    <h3><a href="#">{{ $curri->title }}</a></h3>
                    <p class="subheading"><span>Class time:</span> {{ date('h:i A', strtotime($curri->time_to)) }} - {{ date('h:i A', strtotime($curri->time_from ))}}</p>
                    <p>{{ 
                       $curri->description
                       }}</p>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@endsection