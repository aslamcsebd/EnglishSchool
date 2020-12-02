@extends('frontend.master')
   @section('content')
   <section class="ftco-gallery">
       <div class="container-wrap">
           <div class="row no-gutters">
               @foreach ($galleries as $item)
               <div class="col-md-3 ftco-animate">
                   <a href="{{{ url('storage/galleryImage/'.$item->image) }}}" class="gallery image-popup img d-flex align-items-center" style="background-image: url({{ url('storage/galleryImage/'.$item->image) }});">
                       <div class="mb-4">
                           {{-- <span class="icon-instagram"></span> --}}
                           <h2 class="ml-24 bg-blue-900 p-3 bg-opacity-50 text-white border border-gray-300 border-opacity-25">{{ $item->title }}</h2>
                       </div>
                   </a>
               </div>
               @endforeach
           </div>
           <div class="row align-items-center justify-content-center">
               {{ $galleries->links() }}
           </div>
       </div>
   </section>
@endsection