@extends('frontend.master')
@section('content')
<section class="ftco-section single_notice bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Notice</span> Board</h2>                
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="ffset-md-2 col-md-8 ftco-animate">
                <div class="blog-entry shadow-sm">
                    <div class="text bg-white p-4">
                     <div class="text-center"> 
                        <div class="meta-date text-center p-2">
                           <span class="day">{{ $notice->created_at->format('d')}}</span>
                           <span class="mos">{{ date('F', strtotime($notice->created_at))}}</span>
                           <span class="yr">{{ $notice->created_at->format('Y')}}</span>
                        </div>
                     </div>
                        <h3 class="heading mt-2 text-center">{{ $notice->title }}</h3>
                        <p class="notice_Description">{{$notice->description }}</p>
                        <div class="align-items-center mt-4">
                           <p class="float-left">                              
                              <a href="{{ url('/home') }}" class="btn btn-success"><span class="ion-ios-arrow-round-back">&nbsp;</span>Go Back
                              </a>
                           </p>
                            <p class="text-muted text-right">{{ \Carbon\Carbon::parse($notice->created_at)->diffForhumans() }}</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
@endsection