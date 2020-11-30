@extends('frontend.master')
@section('content')
<section class="ftco-section single_notice bg-light">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8 text-center heading-section ftco-animate">

         @if (session('success'))
            <div class="alert alert-success">
               <strong>Success!</strong> {{ session('success') }}
            </div>
         @endif    
            <h2 class="mb-4"><span>Form </span> Download</h2>
         

         @if (session('fail'))
            <div class="alert alert-danger">
               <strong>Sorry!</strong> {{ session('fail') }}
            </div>
         @endif
      </div>

      </div>
      <div class="row justify-content-center">
         <div class="col-md-8 text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Blank Form</button>
               
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">Fillup Form</button>
            </div>
         </div>
         
         

         <style type="text/css">
            .modal .form-control {
               height: auto !important;
         </style>


          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Blank Form</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>

                     <form method="POST" action="{{ url('blankForm') }}">
                        @csrf
                        <div class="modal-body">
                           <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Student Name:</label>
                              <input type="text" class="form-control" id="recipient-name" placeholder="[Student]" name="name_eng">
                           </div>
                           <div class="form-group">
                              <label for="recipient-name2" class="col-form-label">Father's Name:</label>
                              <input type="text" class="form-control" id="recipient-name2" placeholder="[Father]" name="father_name_eng">
                           </div>
                           <div class="form-group">
                              <label for="recipient-name3" class="col-form-label">Mother's Name:</label>
                              <input type="text" class="form-control" id="recipient-name3" placeholder="[Mother]" name="mother_name_eng">
                           </div>

                           <div class="form-group">
                              <label for="">Date of Birth</label>
                              <input type="date" class="form-control" placeholder="Your Date of birth" name="dob" value="{{ old('dob') }}">
                              @error('dob')
                                 <div class="alert alert-danger p-1" style="font-size: 10px">{{ $message }}</div>
                              @enderror
                           </div>

                           <div class="row">
                              <div class="col">
                                 {{-- <div class="form-group">
                                    <label for="recipient-name4" class="col-form-label">Payment Number:</label>

                                    <select name="paymentNumber" class="form-control" id="recipient-name4">
                                       <option value="">Payment Number</option>
                                       @php
                                          $newPayments = App\paymentNumber::latest()->where('status', 1)->get();
                                       @endphp

                                       @foreach($newPayments as $newPayment)
                                          <option value="{{$newPayment->paymentNumber}}">{{$newPayment->paymentNumber}}</option>
                                       @endforeach
                                    </select>
                                 </div> --}}

                                 <div class="form-group">
                                    <label for="recipient-name5" class="col-form-label">Payment Number:</label>
                                    <input type="text" class="form-control" placeholder="Enter Transaction ID" id="recipient-name5" name="paymentNumber">
                                 </div>    


                              </div>
                              <div class="col">
                                 <div class="form-group">
                                    <label for="recipient-name5" class="col-form-label">Transaction_ID:</label>
                                    <input type="text" class="form-control" placeholder="Enter Transaction ID" id="recipient-name5" name="Transaction_ID">
                                 </div>                              
                              </div>
                           </div>                       
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Ok</button>
                        </div>
                     </form>
               </div>
            </div>
         </div>

         <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  {{-- <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>
                  <div class="modal-body">
                     <form>
                        <div class="form-group">
                           <label for="recipient-name" class="col-form-label">Recipient:</label>
                           <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                           <label for="message-text" class="col-form-label">Message:</label>
                           <textarea class="form-control" id="message-text"></textarea>
                        </div>
                     </form>
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary">Send message</button>
                  </div> --}}

                  <div class="col-12 col-md-12 mt-4">
        <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Student</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline text-center" role="grid" aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending">#</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" > Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Contact</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       @php
                                          $applications = App\Admin\Admission::latest()->get();
                                       @endphp

                                    @foreach ($applications as $key => $item)
                                    <tr role="row" class="odd">
                                        <td tabindex="0" class="sorting_1">{{ $key+1 }}</td>
                                        <td>{{ $item->name_eng }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->father_contact }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->diffForhumans() }}
                                         @if ($item->created_at > \Carbon\Carbon::parse('-24 hours'))
                                             <div class="badge badge-success ml-2">NEW</div>
                                         @endif
                                        </td>
                                        
                                        <td>
                                          {{-- <a href="{{ route('teacher.edit',$item->id) }}" class="btn btn-primary">View</a> --}}
                                            <button class="btn btn-primary" data-target="#modal-secondary-{{ $item->id }}" data-toggle="modal">View</button>
                                            <a href="{{ route('admisson.pdf',$item->id) }}" class="btn btn-default" target="__blank">PDF</a>
                                            <form action="{{route('admisson.destroy',$item->id)}}" method="GET" class="d-inline">
                                                @csrf
                                                {{-- @method("DELETE") --}}
                                                <button class="btn btn-danger" onclick="return confirm('are you sure ?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <div class="modal fade" id="modal-secondary-{{ $item->id }}">
                                        <div class="modal-dialog modal-lg">
                                          <div class="modal-content bg-secondary">
                                            <div class="modal-header">
                                              <h4 class="modal-title">View Application</h4>
                                            </div>
                                            <div class="modal-body">
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Name</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->name }}</h3>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Email</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->email }}</h3>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Contact</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->contact }}</h3>
                                                 </div>
                                             </div>
                                             <div class="row">
                                                 <div class="offset-4 col-2">
                                                     <h3>Message</h3>
                                                 </div>
                                                 <div class="col-5">
                                                     <h3>: {{ $item->message }}</h3>
                                                 </div>
                                             </div>
                                            </div>
                                            
                                          </div>
                                          <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                      </div>
                                    @endforeach
                                    </tbody>
              </table></div></div>
                </div>
            </div>
            <!-- /.card-body -->
          </div>
    </div>



               </div>
            </div>
         </div>



      </div>
   </div>
</section>
@endsection


