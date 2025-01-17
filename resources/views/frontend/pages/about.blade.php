@extends('frontend.master')
@section('content')

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
					 {{ \Illuminate\Support\Str::limit($about->description, $limit = 1600, $end = '...') }}
				  </p>
			   </div>
			</div>
			 <div class="col ftco-animate m-1 bg-light">
			   <div class="text p-4 ftco-animate">
				 <img src="{{ asset('image/'.$about->image) }}" alt="" class="img-fluid" width="100%" height="100%">
			   </div>
			</div>
			</div>
		 </div>
	  </div>
</section> 

<section id="about" class="my-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate ">
				<h2 class="mb-1"><span>Our</span> Mission</h2>                
			</div>
		</div>
		<div class="row">
			<div class="col-8 rap-about py-5 wrap-about bg-light">
				<div class="text px-4 ftco-animate">
					<p class="">
						Encourage the students to achieve academic excellence by utilizing their talents and capabilities to the fullest extent. 
						All-out efforts to make the students disciplined, responsible, confident and independent, so that they become worthy citizens of our country.
					</p>
				   
				</div>
			</div>
			<div class="col ftco-animate bg-light">
			   <div class="text ftco-animate">
				 <img src="{{ asset('frontend/images/Mission.JPG') }}" alt="" class="img-fluid" width="100%" height="100%">
			   </div>
			</div>            
		</div>
	</div>
</section>

<section id="about" class="my-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate ">
				<h2 class="mb-1"><span>Our</span> Vision</h2>                
			</div>
		</div>
		<div class="row">

			<div class="col ftco-animate bg-light">
			   <div class="text ftco-animate">
				 <img src="{{ asset('frontend/images/Vision.jpg') }}" alt="" class="img-fluid" width="100%" height="100%">
			   </div>
			</div>    

			<div class="col-8 rap-about py-5 wrap-about bg-light">
				<div class="text px-4 ftco-animate">
					<p >
						Encourage the students to achieve academic excellence by utilizing their talents and capabilities to the fullest extent. 
						All-out efforts to make the students disciplined, responsible, confident and independent, so that they become worthy citizens of our country.
					</p>
				   
				</div>
			</div>
			
		</div>
	</div>
</section>

<section id="about" class="my-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate ">
				<h2 class="mb-1"><span>Our</span> Objective</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-8 rap-about p-5 wrap-about bg-light">
				<div class="text px-4 ftco-animate">
					<p >
						To provide it's students with the best educational system and lay a solid foundation for the students to pave the way for continuing higher education and building suitable career in their lives.
						To create a congenial educational environment conducive to teaching and learning.
						To set up a team of dedicated and qualified teachers & administrative staff.
						To involve parents, teachers and other stakeholders as partners leading to the success of students.
						Instilling and upholding religious values such as honesty, dedication, patience etc.
						To provide the correct balance between academic and cultural/sporting activities appropriate to the child's age and level of development.
						To expose all students to the world of modern technology confirming the needs of our society and tomorrow's globalized world.
					</p>    
				</div>
			</div>

			<div class="col ftco-animate bg-light">
			   <div class="text ftco-animate">
				 <img src="{{ asset('frontend/images/Objective.JPG') }}" alt="" class="img-fluid" width="100%" height="100%">
			   </div>
			</div> 
		</div>
	</div>
</section>

<section id="about" class="my-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate ">
				<h2 class="mb-1"><span>Our</span> Philosophy of teaching & Pupil-Teacher Ratio</h2>
			</div>
		</div>
		<div class="row">

			<div class="col ftco-animate bg-light">
			   <div class="text ftco-animate">
				 <img src="{{ asset('frontend/images/Teacher to Student Ration.JPG') }}" alt="" class="img-fluid" width="100%" height="100%">
			   </div>
			</div>    
			<div class="col-8 rap-about py-5 wrap-about bg-light">
				<div class="text px-4 ftco-animate">
					<p>
						Our philosophy of teaching is "learning by doing". W have appointed a team of dedicated and experienced teachers who will form the core of our teaching staff.
						We keep a very healthy teacher-student ratio in order to address th educational and interpersonal needs. The school is divided into different age groups.
						The school curriculum and infrastructural facilities have been designed to meet the needs of the students of each specific group. 
					</p>    
				</div>
			</div>
			
		</div>
	</div>
</section>

<section id="about" class="my-5">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-8 text-center heading-section ftco-animate ">
				<h2 class="mb-1"><span>Our</span> Road Map</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-8 rap-about py-5 wrap-about bg-light">
				<div class="text px-4 ftco-animate">
					<p>
						Initially the school has started in a hired accommodation which will be shifted to its permanent location in due course of time. Though, we have started in a humble way, 
						we will elevate our position step by step corresponding to the demand of the situation.
						Management of the institution-The institution is run by a management board consisting of dedicated members who are well experienced in the field of education. 
						The administration of the school is carried out in accordance with set rules and regulations contained in a constitution/service rules
					</p>    
				</div>
			</div>
			<div class="col ftco-animate bg-light">
			   <div class="text ftco-animate">
				 <img src="{{ asset('frontend/images/Roadmap.JPG') }}" alt="" class="img-fluid" width="100%" height="100%">
			   </div>
			</div>                
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftc-no-pb" style="display: none;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 text-center heading-section ftco-animate ">
				<h2 class="mb-4"><span>Our</span> Facilities</h2>
			</div>
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

<section id="classTime ">
	<div class="row justify-content-center mb-4">
		<div class="col-8">
			<div class="row justify-content-center">
				<div class="col-md-8 text-center heading-section ftco-animate ">
					<h2 class="mb-4"><span>Our Class</span> Time</h2>
				</div>
			</div>
			<table class="table table-bordered text-center bg-info text-white">
			  	<thead class="thead-dark">
			  		@php 	$classes = App\classTime::all();  @endphp

			    	<tr>
				      <th scope="col">Class</th>
				      <th scope="col">Summer</th>
				      <th scope="col">Winter</th>
			    	</tr>

			  	</thead>
			  	<tbody>

			  		@foreach($classes as $classe)   
				    	<tr>
					      {{-- <th scope="row">1</th> --}}
					      <td>{{$classe->class}}</td>
					      <td>{{$classe->summer}}</td>
					      <td>{{$classe->winter}}</td>
				    	</tr>
 					@endforeach
			  	</tbody>
			</table>			
		</div>		
	</div>	
</section>

@endsection

 
 