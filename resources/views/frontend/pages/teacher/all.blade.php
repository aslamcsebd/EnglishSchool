@extends('frontend.master')
@section('content')
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Certified</span> Teachers</h2>
               
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($directors->take('4') as $director)
            
            @foreach ($director->categories as $cat)
                
                @if ($cat->name != 'Principal')
                    @if ($cat->name != 'Managing director')
                     @if ($cat->name != 'Director')

                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                             <div class="img align-self-stretch" style="background-image: url({{ asset('image/'.$director->image) }});"> </div>
                            </div>
                            <div class="text pt-3 text-center">
                                <a ref="{{ route('schoolteacher.show',$director->id) }}"><h3>{{ $director->name }}</h3></a>
                                <span class="position mb-2">{{ $cat->name }}</span>
                                <span class="position mb-2">{{ $cat->name }}</span>
                                <div class="faded">
                                    <p>{{ 
                                     \Illuminate\Support\Str::limit($director->desc, $limit = 130, $end = '...')
                                    }}</p>
                                    
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    

            @endif
            @endforeach
            
            @endforeach
            
        </div>
    </div>
</section>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Board of</span> Directors</h2>
               
            </div>
        </div>
        <div class="row">
           
            @foreach ($directors->take('4') as $director)
            
            @foreach ($director->categories as $cat)
                
                @if ($cat->name == 'Principal' || $cat->name == 'Managing director' || $cat->name == 'Director')
                
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                <div class="img align-self-stretch" style="background-image: url({{ asset('storage/doctorImage/'.$director->image) }});"></div>
                            </div>
                            <div class="text pt-3 text-center">
                                <a ref="{{ route('schoolteacher.show',$director->id) }}"><h3>{{ asset('image/'.$director->image)  }}</h3></a>
                                <span class="position mb-2">{{ $cat->name }}</span>
                                <div class="faded">
                                    <p>{{ 
                                     \Illuminate\Support\Str::limit($director->desc, $limit = 130, $end = '...')
                                    }}</p>
                                    <ul class="ftco-social text-center">
                                        @if ($director->fb)
                                        <li class="ftco-animate"><a href="{{ $director->fb }}"><span class="icon-facebook" target="blank"></span></a></li>
                                        @endif
                                        @if ($director->twitter)
                                        <li class="ftco-animate"><a href="{{ $director->twitter }}"><span class="icon-twitter"></span></a></li>
                                        @endif
                                        @if ($director->instagram)
                                        <li class="ftco-animate"><a href="{{ $director->instagram }}"><span class="icon-instagram"></span></a></li>
                                        @endif
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    

            @endif
            @endforeach
            
            @endforeach
            
        </div>
    </div>
</section>
@endsection