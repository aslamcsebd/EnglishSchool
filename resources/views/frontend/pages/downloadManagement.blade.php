@extends('frontend.master')
@section('content')
<section class="ftco-section single_notice bg-light">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Form </span> Download</h2>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-md-8 text-center">
            <div class="btn-group" role="group" aria-label="Basic example">
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Blank Form</button>
               
               <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">Fillup Form</button>
            </div>
         </div>
         
         <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
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
                  </div>
               </div>
            </div>
         </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
               <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Blank Form</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                     </button>
                  </div>

                     <form method="POST" action="{{ route('blankForm') }}">
                        <div class="modal-body">
                           <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Student Name:</label>
                              <input type="text" class="form-control" id="recipient-name" name="name_eng">
                           </div>
                           <div class="form-group">
                              <label for="recipient-name2" class="col-form-label">Father's Name:</label>
                              <input type="text" class="form-control" id="recipient-name2" name="father_name_eng">
                           </div>
                           <div class="form-group">
                              <label for="recipient-name3" class="col-form-label">Mother's Name:</label>
                              <input type="text" class="form-control" id="recipient-name3" name="mother_name_eng">
                           </div>
                           <div class="row">
                              <div class="col">
                                 <div class="form-group">
                                    <label for="recipient-name4" class="col-form-label">Payment Number:</label>

                                    <select name="paymentNumber" class="form-control" id="recipient-name4">
                                       <option value="">Payment Number</option>
                                       @php
                                          $newPayments = App\paymentNumber::latest()->where('status', 1)->get();
                                       @endphp

                                       @foreach($newPayments as $newPayment)
                                          <option value="{{$newPayment->id}}">{{$newPayment->paymentNumber}}</option>
                                       @endforeach
                                    </select>
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
                           <button type="button" class="btn btn-primary">Ok</button>
                        </div>
                     </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection