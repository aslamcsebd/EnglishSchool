@extends('frontend.master')
@section('content')
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4"><span>Notice</span> Board</h2>
                
            </div>
        </div>
        <div class="row">
            <div class="offset-md-2 col-md-8 ftco-animate">
                <div class="blog-entry shadow-sm">
                    <div class="text bg-white p-4">
                        <a href="blog-single.html" class="align-items-end" style="margin-left: 25.9vw;">
                            <div class="meta-date text-center p-2">
                                <span class="day">{{ $notice->created_at->format('d')}}</span>
                                <span class="mos">{{ date('F', strtotime($notice->created_at))}}</span>
                                <span class="yr">{{ $notice->created_at->format('Y')}}</span>
                            </div>
                        </a>
                        <h3 class="heading mt-2 text-center">{{ $notice->title }}</h3>
                        <p class="text-center">{{$notice->description }}</p>
                        <div class="align-items-center mt-4">
                            <p class="text-muted text-right">{{ \Carbon\Carbon::parse($notice->created_at)->diffForhumans() }}</p>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</section>
@endsection