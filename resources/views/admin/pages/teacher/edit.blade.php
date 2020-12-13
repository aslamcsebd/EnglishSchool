
@extends('admin.pages.main')
@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
@endpush
@section('content')
    
    <form role="form" method="POST" action="{{ route('teacher.update',$item->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
                <div class="row">
                    <div class="col-12 col-md-6 mt-4">
                        <div class="card">
                            <div class="card-header">
                            <h3 class="card-title">Edit Teacher</h3>
                            </div>
                                
                            <div class="card-body">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input type="text" class="form-control" placeholder="Enter name" name="name" value="{{$item->name}}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                                <hr class="bg-white">
                                <div class="form-group">
                                    <label for="my-input">Photo</label>
                                    <input id="my-input" class="form-control-file" type="file" name="image" value="{{ $item->image }}">
                                    @error('image')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                
                                <div class="form-group" data-select2-id="63">
                                    <label>Category</label>
                                    <div class="select2-purple" data-select2-id="38">
                                    <select class="select2 select2-hidden-accessible cats" name="categories[]" multiple="" data-placeholder="Select a State"  style="width: 100%;"  tabindex="-1" aria-hidden="true">
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}"
                                            @foreach ($item->categories as $category)
                                                {{ $category->id == $cat->id ? "selected" : "" }}
                                                @endforeach 
                                                data-value = {{ $cat->name }}
                                            >{{ $cat->name }}</option>
                                        @endforeach  
                                    </select>
                                    </div>
                                    @error('categories')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" rows="3" placeholder="Enter ..." name="desc">{{ $item->desc }}</textarea>
                                    @error('desc')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                                <div class="form-group">
                                    <label for="my-input">Degree</label>
                                    <input id="my-input" class="form-control" type="text" name="degree" value="{{ $item->degree }}">
                                    @error('degree')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                                <div class="form-group">
                                    <label>Education</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter ..." name="education">{{ $item->education }}</textarea>
                                    @error('education')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                
                                <div class="form-group">
                                    <label>Experiences</label>
                                    <textarea class="form-control" rows="1" placeholder="Enter ..." name="experiences">{{ $item->Experiences }}</textarea>
                                    @error('experiences')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    
                                </div>
                                
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-4">
                        <div class="card">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="my-input">Address</label>
                                    <input id="my-input" class="form-control" type="text" name="address" value="{{ $item->address }}">
                                    @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                                <div class="form-group">
                                    <label for="my-input">Phone</label>
                                    <input id="my-input" class="form-control" type="text" name="phone" value="{{ $item->phone }}">
                                    @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                                <div class="form-group">
                                    <label for="my-input">Email</label>
                                    <input id="my-input" class="form-control" type="email" name="email" value="{{ $item->email }}">
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                                <div class="form-group">
                                    <label for="my-input">Website</label>
                                    <input id="my-input" class="form-control" type="text" name="website" value="{{ $item->website }}">
                                    @error('website')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <hr class="bg-white">
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch{{ $item->id }}" name="status" {{ $item->status == 1 ? "checked": "" }}>
                                    <label class="custom-control-label" for="customSwitch{{ $item->id }}">Status</label>
                                </div>
                                
                            </div>
                            <div class="card-body">
                                <h4>Optional</h4>
                                <div class="form-group">
                                    <label for="my-input">Facebook link</label>
                                    <input id="my-input" class="form-control" type="text" name="fb" value="{{ $item->fb }}" placeholder="https://facebook.com/example">
                                    @error('fb')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Twitter link</label>
                                    <input id="my-input" class="form-control" type="text" name="twitter" value="{{ $item->twitter }}" placeholder="https://twitter.com/example">
                                    @error('twitter')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="my-input">Instagram link</label>
                                    <input id="my-input" class="form-control" type="text" name="instagram" value="{{ $item->instagram }}" placeholder="https://instagram.com/example">
                                    @error('instagram')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                
                        </div>
                </div>
                <div class="col-12">
                    <div class="form-group spiech">
                        <label>Speech</label>
                        <textarea class="form-control speech_text" rows="3" placeholder="Enter ..." name="speech">{{ $item->speech }}</textarea>
                        @error('speech')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                      </div>
                  </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-outline-light">Update</button>
                </div>
    </form>
@endsection
@push('js')
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
        $(function () {
            var cats = $('.cats');
            var valu = cats.find(':selected');
            // console.log(valu[1]);
            for(var i=0;i<valu.length;i++)
                {
                    if(valu[i].getAttribute("data-value") == "Principle" || valu[i].getAttribute("data-value") == "Chairman")
                    {
                        $('.spiech').show();
                    }else{
                        $('.spiech').hide();
                        // $('.speech_text').val("");

                    }
                }        
                cats.change(function(){
                                var valu = $(this).find(':selected');
                                
                                let showalert = true;
                                for(var i=0;i<valu.length;i++)
                                {
                                    if(valu[i].getAttribute("data-value") == "Principal" || valu[i].getAttribute("data-value") == "Chairman")
                                    {
                                        $('.spiech').show();
                                    }else{
                                        $('.spiech').hide();
                                        // $('.speech_text').val("");
            
                                    }
                                }


                                // $( ".cats option:selected" ).each(function() {
                                //     if($(this).text() == "Principle")
                                //     {
                                //         $('.spiech').show();
                                //     }else{
                                //         $('.spiech').hide();
                                //         $('.speech_text').val("");
                                //         if(showalert == true)
                                //         {
                                //             showalert = false;
                                //             alert('Speech has been removed please reload')
                                //         }
                                //     }
                                     
                                //     });

                });
        });            
    </script>
@endpush    