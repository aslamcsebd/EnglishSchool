@extends('frontend.master')
@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/toastr/toastr.min.css') }}">
@endpush
@section('content')
<div class="container">

   @if (session('success'))
      <div class="alert alert-success text-center">
         <strong>Success!</strong> {{ session('success') }}
      </div>
   @endif  
   
   <form action="{{ route('admission.store') }}" method="POST">
      @csrf
      <div class="row">
         <div class="col-6">            
            <h3 class="h2">Admission Form </h3>
         </div>
         <div class="col-6">
            <h3 class="h2">Particulars</h3>
         </div>
         <div class="col-md-6 p-4 p-md-5 bg-light">
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Your Name [English]" name="name_eng" value="{{ old('name_eng') }}">
               @error('name_eng')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Your Name [Bangla]" name="name_bng" value="{{ old('name_bng') }}">
               @error('name_bng')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <label for="">Date of Birth</label>
               <input type="date" class="form-control" placeholder="Your Date of birth" name="dob" value="{{ old('dob') }}">
               @error('dob')
                  <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Nationality" name="nationality" value="{{ old('nationality') }}">
               @error('nationality')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Religion" name="religion" value="{{ old('religion') }}">
               @error('religion')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="father_name_eng" placeholder="Father's Name [English]" value="{{ old('father_name_eng') }}">
               @error('father_name_eng')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Father's Name [Bangla]" name="father_name_bng" value="{{ old('father_name_bng') }}">
               @error('father_name_bng')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="mother_name_eng" placeholder="Mother's Name [English]" value="{{ old('mother_name_eng') }}">
               @error('mother_name_eng')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Mother's Name [Bangla]" name="mother_name_bng" value="{{ old('mother_name_bng') }}">
               @error('mother_name_bng')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Permanent Address" name="per_add" value="{{ old('per_add') }}">
               @error('per_add')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Mailing Address" name="mailing_add" value="{{ old('mailing_add') }}">
               @error('mailing_add')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="School last attended" name="sla" value="{{ old('sla') }}">
               @error('sla')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Medium of Instruction of last school" name="moi" value="{{ old('moi') }}">
               @error('moi')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Class in which the student was last place" name="last_place" value="{{ old('last_place') }}">
               @error('religion')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-check mb-1">
               <p>How do you know about this school :</p>
               <label><input type="radio" name="find_out" value="1" class="ml-2">&nbsp; I saw your Advert</label>
               <label><input type="radio" name="find_out" value="2" class="ml-2">&nbsp;I saw your Banner</label>
               <label><input type="radio" name="find_out" value="3" class="ml-2">&nbsp;A friend told me </label>
               <label><input type="radio" name="find_out" value="4" class="ml-2">&nbsp;I recived your flyer </label>
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Any area of special interest (Curricular or extra curricular)" name="curricular" value="{{ old('curricular') }}">
               
               @error('curricular')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <label for="">Does your child suffer from any disability as to vision, hearing, walking/disease?</label>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
               <label class="btn btn-primary">
                  <input type="radio" value="1" name="challanged"> Yes
               </label>
               <br>
               <label class="btn btn-primary">
                  <input type="radio" value="0" name="challanged"> No
               </label>
               @error('challanged')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>

         </div>
         
         <div class="col-md-6 p-4 p-md-5 bg-light">
            <div class="form-group">
               <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('Email') }}">
               @error('email')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="father_occupation" placeholder="Father's Occupation" value="{{ old('father_occupation') }}">
               @error('father_occupation')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" name="mother_occupation" placeholder="Mother's Occupation" value="{{ old('mother_occupation') }}">
               @error('mother_occupation')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Father's NID" name="father_nid" value="{{ old('father_nid') }}">
               @error('father_nid')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Mother's NID" name="mother_nid" value="{{ old('mother_nid') }}">
               @error('mother_nid')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Father's Telephone/Cell" name="father_contact" value="{{ old('father_contact') }}">
               @error('father_contact')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Mother's Telephone/Cell" name="mother_contact" value="{{ old('mother_contact') }}">
               @error('mother_contact')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Father's Facebook id (if any)" name="father_fb" value="{{ old('father_fb') }}">
               @error('father_contact')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Mother's Facebook id (if any)" name="mother_fb" value="{{ old('mother_fb') }}">
               @error('mother_contact')
               <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
               @enderror
            </div>
            <div class="form-check mb-1">
               <p>Mode of transports</p>
               <label class="mr-2"><input type="radio" name="transports" value="1" class="ml-2">&nbsp; Public Transports</label>
               <label><input type="radio" name="transports" value="2" class="ml-2">&nbsp;Own Transports </label>
               <label><input type="radio" name="transports" value="3" class="ml-2">&nbsp;School Transports</label>
               
            </div>
            <div class="form-group">
               <input type="submit" value="Apply" class="btn btn-info py-3 px-5">
               <a href="{{ route('downloadform') }}" class="btn btn-success py-3 px-5" target="__blank">Download Form</a>
            </div>

            @php
               $payment_rules = App\payment_rules::all();
            @endphp

            @foreach($payment_rules as $payment_rule)
            <div class="border p-4">
               <p>{{ $payment_rule->information }}</p>
            </div>
            @endforeach
         </div>

      </div>
      <div class="row mt-2">

         
      </div>
   </form>
</div>
@endsection
@push('js')
<script src="{{asset('admin/plugins/toastr/toastr.min.js')}}"></script>
{!! Toastr::message() !!}
<script src="{{asset('admin/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
@endpush


