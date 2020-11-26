@extends('frontend.master')
@section('content')
    <section class="ftco-section ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Certified</span> Teacher</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-2 offset-lg-2 col-md-8 col-lg-8 ftco-animate">
                    <div class="staff">
                        <div class="row">
                            <div class="col-6">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch" style="
                                    background-image: url({{ asset('storage/doctorImage/'.$director->image) }});"></div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text pt-3">
                                    <h3>{{ $director->name }}</h3>
                                    <span class="position mb-2">
                                    @foreach ($director->categories as $key => $value) 
                                        <div class="badge badge-info">{{ $value->name }}</div>
                                    @endForeach
                                    </span>
                                    <h4>Degree : <span class="text-muted">{{ $director->degree }}</span></h4>
                                    <h4>Education : <span class="text-muted">{{ $director->education }}</span></h4>
                                    <h4>Experiences : <span class="text-muted">{{ $director->Experiences }}</span></h4>
                                    <h4>Address : <span class="text-muted">{{ $director->address }}</span></h4>
                                    <h4>Phone : <span class="text-muted">{{ $director->phone }}</span></h4>
                                    <h4>Email : <span class="text-muted">{{ $director->email }}</span></h4>
                                    <h4>Website : <span class="text-muted"><a href="{{ $director->website }} " target="__blank">{{ $director->website }}</a></span></h4>
                                    <div class="faded">
                                         @if ($director->fb || $director->twitter || $director->instagram)
                                         <ul class="text-center d-flex">
                                             @if ($director->fb)
                                             <li class="ftco-animate pr-2"><a href="{{ $director->fb }}"><span class="icon-facebook" target="blank"></span></a></li>
                                             @endif
                                             @if ($director->twitter)
                                             <li class="ftco-animate pr-2"><a href="{{ $director->twitter }}"><span class="icon-twitter"></span></a></li>
                                             @endif
                                             @if ($director->instagram)
                                             <li class="ftco-animate"><a href="{{ $director->instagram }}"><span class="icon-instagram"></span></a></li>
                                             @endif
                                         </ul>
                                         @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mt-3">{{ 
                            \Illuminate\Support\Str::limit($director->desc, $limit = 170, $end = '...')
                           }}</p>
                        
                    </div>
                </div>
            </div>
        </div>    
    </section>
    @if ($director->speech)
    <section>
        <div class="container">
            <div class="text-center heading-section ftco-animate">
                @foreach ($director->categories as $key => $value) 
                    @if ($value->name == 'Principle' || 'Managing director')
                <h2 class="mb-4"> 
                    <span>Message From</span>
                        
                        {{ $value->name }}
                        
                    </h2>
                    <div class="row">
                        <div class="offset-md-3 col-md-6">
                            <q>{{ $director->speech }}</q>
                        </div>
                    </div>
                    @endif
                @endForeach
            </div>
            
        </div>
    </section>
    @endif
@endsection        