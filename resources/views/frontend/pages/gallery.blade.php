<style type="text/css">
   .mb-4 {
      display: block;
      margin-left: auto;
      margin-right: auto;
      /*width: 100%;    */
   }
</style> 

@extends('frontend.master')
   @section('content')
   	<section class="ftco-gallery">
       	<div class="container-wrap">
           <div class="row no-gutters">
           		@php $galleries = App\Admin\Gallery::all(); @endphp
	              @foreach ($galleries as $item)
							<div class="col-md-3 p-3">
								@php $photos = App\Admin\GalleryImageList::where('gallery_title_id', $item->id)->get(); @endphp 
	                  		@foreach ($photos as $photo) 
		                   		<a href="{{ asset('galleryImage/'.$photo->photo) }}" class="gallery image-popup img d-flex align-items-center mt-3 mb-3" style="background-image: url({{ asset('galleryImage/'.$photo->photo) }});">
				                     <div class="mb-4">
			                           <h2 class="text-center bg-blue-900 p-2 bg-opacity-50 text-white border border-gray-300 border-opacity-25">{{ $item->gallery_title }}</h2>
				                     </div>
		                     	</a>
	               			@endforeach		
		               </div>
	               @endforeach
	          </div>	         
       	</div>
   	</section>
@endsection