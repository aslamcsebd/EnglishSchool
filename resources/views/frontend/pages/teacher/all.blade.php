@extends('frontend.master')
@section('content')

<style type="text/css">
    img {
      display: block;
      margin-left: auto;
      margin-right: auto;
      /*width: 50%;*/
    }
</style> 

    @php 
        $teachers = App\teacherList::where('designation_id', 1)->get();
    @endphp

    @if ($teachers->count()>0)
        <section class="ftco-section ftco-no-pb">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Principal</span></h2>               
                    </div>
                </div>
                <div class="row justify-content-center ">
                       
                    @foreach($teachers as $teacher)
                        <div class="col-3 mt-2">
                            <img src="{{ asset('teacherPhoto/'.$teacher->photo) }}" width="240" height="" class="">                       
                            <p class="mt-2 mb-2 text-center">{{ $teacher->teacherName }}</p>  
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif



    @php 
        $teachers = App\teacherList::where('designation_id', 2)->get();
    @endphp

    @if ($teachers->count()>0)
        <section class="ftco-section ftco-no-pb">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Co-ordinator</span></h2>               
                    </div>
                </div>
                <div class="row justify-content-center ">
                       
                    @foreach($teachers as $teacher)
                        <div class="col-3 mt-2">
                            <img src="{{ asset('teacherPhoto/'.$teacher->photo) }}" width="240" height="" class="">                       
                            <p class="mt-2 mb-2 text-center">{{ $teacher->teacherName }}</p>  
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    @php 
        $teachers = App\teacherList::where('designation_id', 3)->get();
    @endphp

    @if ($teachers->count()>0)
        <section class="ftco-section ftco-no-pb">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Assent</span> Teacher</h2>               
                    </div>
                </div>
                <div class="row justify-content-center ">
                       
                    @foreach($teachers as $teacher)
                        <div class="col-3 mt-2">
                            <img src="{{ asset('teacherPhoto/'.$teacher->photo) }}" width="240" height="" class="">                       
                            <p class="mt-2 mb-2 text-center">{{ $teacher->teacherName }}</p>  
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    @php 
        $teachers = App\teacherList::where('designation_id', 4)->get();
    @endphp

    @if ($teachers->count()>0)
        <section class="ftco-section ftco-no-pb">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Junior</span> Teacher</h2>               
                    </div>
                </div>
                <div class="row justify-content-center ">
                       
                    @foreach($teachers as $teacher)
                        <div class="col-3 mt-2">
                            <img src="{{ asset('teacherPhoto/'.$teacher->photo) }}" width="240" height="" class="">                       
                            <p class="mt-2 mb-2 text-center">{{ $teacher->teacherName }}</p>  
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @php 
        $teachers = App\teacherList::where('designation_id', 5)->get();
    @endphp

    @if ($teachers->count()>0)
        <section class="ftco-section ftco-no-pb">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5 pb-2">
                    <div class="col-md-8 text-center heading-section ftco-animate">
                        <h2 class="mb-4"><span>Culture</span> Teacher</h2>               
                    </div>
                </div>
                <div class="row justify-content-center ">
                       
                    @foreach($teachers as $teacher)
                        <div class="col-3 mt-2">
                            <img src="{{ asset('teacherPhoto/'.$teacher->photo) }}" width="240" height="" class="">                       
                            <p class="mt-2 mb-2 text-center">{{ $teacher->teacherName }}</p>  
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection