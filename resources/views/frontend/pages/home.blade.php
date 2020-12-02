@extends('frontend.master')
@section('content')
@include('frontend.inc.banner')

<section class="ftco-services ftco-no-pb">
	<div class="container-wrap">
		<div class="row no-gutters">
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-primary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center shadow">
						<span class="flaticon-teacher"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Certified Teachers</h3>
						<p>A certified teacher is an educator who has earned credentials from an authoritative source, such as the government, a higher education institution or a private.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-tertiary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center shadow">
						<span class="flaticon-reading"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Special Education</h3>
						<p>A special school is a school catering for students who have special educational needs due to learning difficulties, physical disabilities or behavioral problems.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-fifth">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center shadow">
						<span class="flaticon-books"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Book &amp; Library</h3>
						<p>A library is a curated collection of sources of information and similar resources, selected by ... A library's collection can include books, periodicals, newspapers.</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 d-flex services align-self-stretch pb-4 px-4 ftco-animate bg-quarternary">
				<div class="media block-6 d-block text-center">
					<div class="icon d-flex justify-content-center align-items-center shadow">
						<span class="flaticon-diploma"></span>
					</div>
					<div class="media-body p-2 mt-3">
						<h3 class="heading">Certification</h3>
						<p>Certification is the formal attestation or confirmation of certain characteristics of an object, person, or organization</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@if ($about)
   <section id="about" class="my-5">
   	<div class="container">
   		<div class="row justify-content-center mb-5">
   			<div class="col-md-8 text-center heading-section ftco-animate ">
   				<h2 class="mb-1"><span>About</span> Us</h2>
   				<p>{{ $about->title }}</p>
   			</div>
   		</div>
   		<div class="row ustify-content-center">
   			<div class="col ftco-animate m-1 bg-light">
   				<div class="text p-4 ftco-animate">
   					<p>
   						{{ \Illuminate\Support\Str::limit($about->description, $limit = 600, $end = '...') }}
   					</p>
   					<p class="mt-3"><a href="{{ route('aboutus') }}" class="btn btn-secondary px-4 py-3">Read More</a></p>
   				</div>
   			</div>
   			 <div class="col ftco-animate m-1 bg-light">
   				<div class="text p-4 ftco-animate">
   				  <img src="{{ asset('image/school_building.jpg') }}" alt="" class="img-fluid" width="100%" height="">
   				  
   				</div>
   			</div>
   			{{-- <div class="col-md-6"> --}}
   			   {{-- <img src="{{ url('storage/about/'.$about->image) }}" alt="" class="img-fluid"> --}}

   			</div>
   		</div>
   	</div>
   </section>    
@endif

<section class="ftco-section ftco-no-pt ftc-no-pb">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center heading-section ftco-animate ">
				<h2 class="mb-4"><span>Our</span> Facilities</h2>			  
		</div>

		<div class="row">
			<div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
				<div class="row mt-5">
					@foreach ($facilities as $facility)
					<div class="col-lg-4">
						<div class="services-2 d-flex">
							<div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="{{ $facility->icon }}"></span></div>
							<div class="text">
								<h3>{{ $facility->title }}</h3>
								<p>{{ $facility->description }}</p>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>

		</div>
	</div>
</section>

<section class="ftco-intro" style="background-image: url(frontend/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h2>Ensure Quality Education for your Child</h2>
				<p class="mb-0">We are committed to academic and religious excellence.</p>
			</div>
			<div class="col-md-3 d-flex align-items-center">
				<p class="mb-0"><a href="{{ route('admission.index') }}" class="btn btn-secondary px-4 py-3">Apply Online</a></p>
			</div>
		</div>
	</div>
</section>

{{-- Message --}}

<section id="about" class="my-5">
   <div class="container">

     <div class="row justify-content-center mb-5">
         <div class="col-md-8 text-center heading-section ftco-animate ">
            <h2 class="mb-1"><span>Chairmain's </span>Message</h2>
         </div>
      </div>

       @php
         $PrincipalSMSs = App\PrincipalSMS::all();
       @endphp

       @foreach($PrincipalSMSs as $PrincipalSMS)

       <style type="text/css">
         .sms .float-left {
            font-size: 25px;
            font-weight: 600;
            color: #fda638;
         }
         .left {
            font-size: 22px;
            font-weight: 300;
            text-align: right;
         }         
       </style>
      <div class="row justify-content-center sms p-2" style="background-color: #ecf0f1;">
         <div class="col-8 ftco-animate m-1">
              <p lass="float-left">Chairmain's Message...</p>
            <div class="text ftco-animate">
              <p><i>
                  {{ \Illuminate\Support\Str::limit($PrincipalSMS->leftSide, $limit = 800, $end = '...') }}
              </i></p>
            </div>
            <div class="row">
              <div class="col-3 ftco-animate mt-2">    
                <h1 class="mb-1"><span>{{$PrincipalSMS->teacherName}}</h1>
              </div>
            </div>
         </div>
         <div class="col ftco-animate">
            <img src="{{ asset('image/person_1.jpg') }}" alt="" class="responsive float-right" width="80%" eight="10%"> 
         </div>
      </div>

     @endforeach
   </div>
</section>

<section id="about" class="my-5">
   <div class="container">

     <div class="row justify-content-center mb-5">
         <div class="col-md-8 text-center heading-section ftco-animate ">
            <h2 class="mb-1"><span>Director's </span>Message</h2>
         </div>
      </div>

       @php
         $PrincipalSMSs = App\PrincipalSMS::all();
       @endphp

       @foreach($PrincipalSMSs as $PrincipalSMS)

       <style type="text/css">
         .sms .float-left {
            font-size: 25px;
            font-weight: 600;
            color: #fda638;
         }
         .left {
            font-size: 22px;
            font-weight: 300;
            text-align: right;
         }         
       </style>
      <div class="row justify-content-center sms p-2" style="background-color: #ecf0f1;">
         <div class="col ftco-animate">
            <img src="{{ asset('image/person_3.jpg') }}" alt="" class="responsive float-left" width="80%" eight="10%"> 
         </div>

         <div class="col-8 ftco-animate m-1">
              <p lass="float-left">Director's Message...</p>
            <div class="text ftco-animate">
              <i>
                  {{ \Illuminate\Support\Str::limit($PrincipalSMS->leftSide, $limit = 800, $end = '...') }}
              </i>
            </div>
            <div class="row">
              <div class="col-3 ftco-animate mt-2">    
                <h2 class="mb-1"><span>{{$PrincipalSMS->teacherName}}</h2>
              </div>
            </div>
         </div>
      </div>

     @endforeach
   </div>
</section>

<section id="about" class="my-5">
   <div class="container">

     <div class="row justify-content-center mb-5">
         <div class="col-md-8 text-center heading-section ftco-animate ">
            <h2 class="mb-1"><span>Principal's </span>Message</h2>
         </div>
      </div>

       @php
         $PrincipalSMSs = App\PrincipalSMS::all();
       @endphp

       @foreach($PrincipalSMSs as $PrincipalSMS)

       <style type="text/css">
         .sms .float-left {
            font-size: 25px;
            font-weight: 600;
            color: #fda638;
         }
         .left {
            font-size: 22px;
            font-weight: 300;
            text-align: right;
         }

         .a img{ height: 300px; width: 100%; }
       </style>

      <div class="row justify-content-center mb-5 a">
         <img src="{{ asset('image/photo.jpg') }}" alt="" class="responsive" idth="100%" eight="10%">         
      </div>
      <div class="row ustify-content-center sms">
         <div class="col-9 ftco-animate m-1" style="background-color: #ffffe0;">
              <p lass="float-left">Principal's Message...</p> <br> 
            <div class="text ftco-animate">
              <p>
                  {{ \Illuminate\Support\Str::limit($PrincipalSMS->leftSide, $limit = 1600, $end = '...') }}
              </p>
            </div>
            <div class="row">
              <div class="col-3 ftco-animate m-1 bg-light">
                {{-- <img src="{{ asset('image/signature.png') }}" alt="" class="img-fluid">                  --}}
                <h2 class="mb-1"><span>{{$PrincipalSMS->teacherName}}</h2>
              </div>
            </div>
         </div>
         <div class="col ftco-animate m-1" style="background-color: #a32cc4">
            <div class=" p-4 ftco-animate">
               <p class="text-white left">{{ \Illuminate\Support\Str::limit($PrincipalSMS->rightSide, $limit = 600, $end = '...') }}</p>
                             
            </div>
         </div>
      </div>

     @endforeach
   </div>
</section> 


<section class="ftco-section ftco-no-pb">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>IT and Accounts</span> Administration</h2>			   
			</div>
		</div>
		<div class="row justify-content-center">
		   
			{{-- @foreach ($directors as $director)
			
			@foreach ($director->categories as $cat)
				
				@if ($cat->name == 'Principal' || $cat->name == 'Chairman' || $cat->name == 'Managing director' ||  $cat->name == 'Director') --}}

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img lign-self-stretch" style="background-image: url({{ asset('image/it.jpg') }});"></div>
							</div>
							<div class="text pt-3 text-center">
								<h3>Zainal Abedin</h3>
								<span class="position mb-2">IT Executive</span>
								<div class="faded">
								
								</div>
							</div>
						</div>
					</div>

               <div class="col-md-6 col-lg-3 ftco-animate">
                  <div class="staff">
                     <div class="img-wrap d-flex align-items-stretch">
                        <div class="img lign-self-stretch" style="background-image: url({{ asset('image/it2.jpg') }});"></div>
                     </div>
                     <div class="text pt-3 text-center">
                        <h3>Mohammad Badrul Ahsan Siddiky</h3>
                        <span class="position mb-2">Accounts Admin</span>
                        <div class="faded">
                        
                        </div>
                     </div>
                  </div>
               </div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Curricular</span> Activities</h2>
				
			</div>
		</div>
		<div class="row">
			@foreach ($curries as $curri)
			<div class="col-md-6 course d-lg-flex ftco-animate">
				<div class="img" style="background-image: url({{ url('storage/curricular/'.$curri->image) }});"></div>
				<div class="text bg-light p-4">
					<h3><a href="{{ route('curricular') }}">{{ $curri->title }}</a></h3>
					<p class="subheading"><span>Class time:</span> {{ date('h:i A', strtotime($curri->time_to)) }} - {{ date('h:i A', strtotime($curri->time_from ))}}</p>
					<p>{{ 
						\Illuminate\Support\Str::limit($curri->description, $limit = 100, $end = '...')
					   }}</p>
				</div>
			</div>
			@endforeach
			
		</div>
	</div>
</section>

<section class="ftco-section ftco-counter img" style="display: none;" id="section-counter" style="background-image: url(frontend/images/bg_4.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section heading-section-black ftco-animate">
				<h2 class="mb-4"><span>9 Years of</span> Experience</h2>
				
			</div>
		</div>
		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="row d-md-flex align-items-center">
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="{{ count($directors) }}">0</strong>
								<span>Certified Teachers</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="351">0</strong>
								<span>Successful Kids</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="564">0 </strong>
								<span>Website Visitors</span>
							</div>
						</div>
					</div>
					<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
						<div class="block-18">
							<div class="icon"><span class="flaticon-doctor"></span></div>
							<div class="text">
								<strong class="number" data-number="300">0</strong>
								<span>Awards Won</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section testimony-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>What Parents</span> Says About Us</h2>
			   
			</div>
		</div>
		<div class="row ftco-animate justify-content-center">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel">
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
							</div>
							<div class="text ml-2 bg-light">
								<span class="quote d-flex align-items-center justify-content-center">
			  <i class="icon-quote-left"></i>
			</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Racky Henderson</p>
								<span class="position">Father</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img mr-4" style="background-image: url(images/teacher-2.jpg)">
							</div>
							<div class="text ml-2 bg-light">
								<span class="quote d-flex align-items-center justify-content-center">
			  <i class="icon-quote-left"></i>
			</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Henry Dee</p>
								<span class="position">Mother</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img mr-4" style="background-image: url(images/teacher-3.jpg)">
							</div>
							<div class="text ml-2 bg-light">
								<span class="quote d-flex align-items-center justify-content-center">
			  <i class="icon-quote-left"></i>
			</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Mark Huff</p>
								<span class="position">Mother</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img mr-4" style="background-image: url(images/teacher-4.jpg)">
							</div>
							<div class="text ml-2 bg-light">
								<span class="quote d-flex align-items-center justify-content-center">
			  <i class="icon-quote-left"></i>
			</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Rodel Golez</p>
								<span class="position">Mother</span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="testimony-wrap d-flex">
							<div class="user-img mr-4" style="background-image: url(images/teacher-1.jpg)">
							</div>
							<div class="text ml-2 bg-light">
								<span class="quote d-flex align-items-center justify-content-center">
			  <i class="icon-quote-left"></i>
			</span>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
								<p class="name">Ken Bosh</p>
								<span class="position">Mother</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb" style="background-image: url(images/bg_5.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-md-6 py-5 px-md-5 bg-primary">
				<div class="heading-section heading-section-white ftco-animate mb-5">
					<h2 class="mb-4">Request A Quote</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
				</div>
				<form action="#" class="appointment-form ftco-animate">
					<div class="d-md-flex">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="First Name">
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Last Name">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<div class="form-field">
								<div class="select-wrap">
									<div class="icon"><span class="ion-ios-arrow-down"></span></div>
									<select name="" id="" class="form-control">
				  <option value="">Select Your Course</option>
				<option value="">Art Lesson</option>
				<option value="">Language Lesson</option>
				<option value="">Music Lesson</option>
				<option value="">Sports</option>
				<option value="">Other Services</option>
			  </select>
								</div>
							</div>
						</div>
						<div class="form-group ml-md-4">
							<input type="text" class="form-control" placeholder="Phone">
						</div>
					</div>
					<div class="d-md-flex">
						<div class="form-group">
							<textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
						</div>
						<div class="form-group ml-md-4">
							<input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section> -->

<!-- <section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Our</span> Pricing</h2>
				<p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="pricing-entry bg-light pb-4 text-center">
					<div>
						<h3 class="mb-3">Basic</h3>
						<p><span class="price">$24.50</span> <span class="per">/ 5mos</span></p>
					</div>
					<div class="img" style="background-image: url(images/bg_1.jpg);"></div>
					<div class="px-4">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					<p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Take A Course</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="pricing-entry bg-light pb-4 text-center">
					<div>
						<h3 class="mb-3">Standard</h3>
						<p><span class="price">$34.50</span> <span class="per">/ 5mos</span></p>
					</div>
					<div class="img" style="background-image: url(images/bg_2.jpg);"></div>
					<div class="px-4">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					<p class="button text-center"><a href="#" class="btn btn-secondary px-4 py-3">Take A Course</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="pricing-entry bg-light active pb-4 text-center">
					<div>
						<h3 class="mb-3">Premium</h3>
						<p><span class="price">$54.50</span> <span class="per">/ 5mos</span></p>
					</div>
					<div class="img" style="background-image: url(images/bg_3.jpg);"></div>
					<div class="px-4">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					<p class="button text-center"><a href="#" class="btn btn-tertiary px-4 py-3">Take A Course</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="pricing-entry bg-light pb-4 text-center">
					<div>
						<h3 class="mb-3">Platinum</h3>
						<p><span class="price">$89.50</span> <span class="per">/ 5mos</span></p>
					</div>
					<div class="img" style="background-image: url(images/bg_5.jpg);"></div>
					<div class="px-4">
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
					<p class="button text-center"><a href="#" class="btn btn-quarternary px-4 py-3">Take A Course</a></p>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-2">
			<div class="col-md-8 text-center heading-section ftco-animate">
				<h2 class="mb-4"><span>Notice</span> Board</h2>
			   
			</div>
		</div>

		 <div class="row">
			@foreach ($notices->take(6) as $notice)
			   <div class="col-md-6 col-lg-4 ftco-animate" >
				  <div class="blog-entry" style="border-radius: 100px 0;">
					 <div class="bg-white p-4">
						<div class="text-center">                        
						   <div class="meta-date text-center p-2">
							 <span class="day">{{ $notice->created_at->format('d')}}</span>
							 <span class="mos">{{ date('F', strtotime($notice->created_at))}}</span>
							 <span class="yr">{{ $notice->created_at->format('Y')}}</span>
						   </div>
						</div>
						<h3 class="heading mt-2 text-center">{{ $notice->title }}</h3>
						<p class="notice_Description">{{ \Illuminate\Support\Str::limit($notice->description, $limit = 100, $end = '...') }}</p>
						
						<div class="mt-4">
						   <p class="float-left">                              
							  <a href="{{ route('schoolnotice.show',$notice->id) }}" class="btn btn-success">Read More <span class="ion-ios-arrow-round-forward"></span>
							  </a>
						   </p>
						   <p class="text-muted text-right">{{ \Carbon\Carbon::parse($notice->created_at)->diffForhumans() }}
						   </p>
						</div>
					 </div>
				  </div>
			   </div>
			@endforeach            
		 </div>
	</div>
</section>

<section class="ftco-gallery" style="display: none;">
	<div class="container-wrap">
		<div class="row no-gutters">
			@foreach ($galleries->take(4) as $item)
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
	</div>
</section>
@endsection