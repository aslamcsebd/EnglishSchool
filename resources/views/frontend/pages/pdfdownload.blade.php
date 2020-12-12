<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .body{
            background-color: #FFFCE9;
            padding: 10px;
            
        }
       input[type="text"]{
           border: none;
           border-bottom: 1px solid black;
           background-color: #FFFCE9;
           font-size: 12px;
           text-align: center;
           
       }
       span{
           font-size: 12px;
       }
       .name{
           position: absolute;
           top:-14px;
           left: 110px;
           font-size: 20px;
           color: purple;
           font-weight: bold;
       }
       .addr{
           position: absolute;
           top:-14px;
           left: 420px;
           font-size: 13px;
           text-align: justify;
       }
       .box{
           /* padding: 100px; */
           position: absolute;
           top: -14px;
           right: 0;
       }
       .watermark{
           position: absolute;
           top: 50%;
           right: 25%;
           color: #fdbc7c62;
           font-size: 40px;
           font-family: 'Courier New', Courier, monospace;
           /* z-index: -1; */
       }
    </style>
</head>
<body>
    <div>
        
        <img src="{{ asset('admin/image/logo.png') }}" alt="this is an image" width="100" class="p-0 m-0">
        <span class="name">
            National <br> English <br> School <br> Chittagong
        </span>
        <span class="addr text-right">
            130, Chatteswari Road <br> Chawkbazar, Chattogram <br> (Opposite to Medical <br> College Hostel Gate) <br>
            Phone: 031-269065 <br>
            cell: 017006171
        </span>
        {{-- <div class="box"></div> --}}
        <img src="{{ asset('admin/image/box.png') }}" alt="this is an image" width="130" class="p-0 m-0 box">

     </div>    
    <div class="body">
        <h1 class="watermark">ADDMISSION FORM</h1>

        <div>
            <span >Admission Form</span><input type="text" style="width:100px" value=""> <br>
         </div>

        <div>
            <span >Full Name: (In Capital Letter)</span><input type="text" style="width:450px" value="{{$name_eng}}"> <br>
        </div>
    <div style="margin-left: 81px">
        <span style=""> (In Bangla)</span><input type="text" style="width:535px" value="">    
    </div>    
    <div>
        <span>Date of Birth:</span><input type="text" style="width: 100px" value="{{ $dob }}"> 
        <span>Age:</span><input type="text" style="width:70px" value="{{ $age }}">
    <span>Year:</span><input type="text" style="width:70px" value="{{date('Y', strtotime($dob))}}">
        <span>Month:</span><input type="text" style="width:70px" value="{{date('F', strtotime($dob))}}">
    <span>Day:</span><input type="text" style="width:86px" value="{{date('d', strtotime($dob))}}">
    </div>

    <div>
    <span>Nationality:</span><input type="text" style="width: 270px" value=""> 
        <span>Religion:</span><input type="text" style="width:100px" value="">
        <span>Caste:</span><input type="text" style="width:100px" value="">
    </div>
    <div>
        <span>Name of Father:</span><input type="text" style="width: 240px" value="{{$father_name_eng}}"> 
        <span>(In Bangla):</span><input type="text" style="width:240px" value="">
    </div>
    <div>

        <span>Name of Mother:</span><input type="text" style="width: 240px" value="{{$mother_name_eng}}"> 
        <span>(In Bangla):</span><input type="text" style="width:240px" value="">
    </div>
    <div>
            <span>Permanent Address:</span><input type="text" style="width: 540px" value="">
    </div>
    <div>
            <span>Mailing Address:</span><input type="text" style="width: 540px" value=""> 
    </div>
    <div>
            <span>School Last Attended:</span><input type="text" style="width: 540px" value=""> 
    </div>
    <div>
            <span>Medium of Instruction of last school:</span><input type="text" style="width: 420px" value=""> 
    </div>
    <div>
            <span>Class in which the student was last place:</span><input type="text" style="width: 400px" value=""> 
    </div>
    <div>
            <span>How do you know about this school:</span>&nbsp;&nbsp;<span>I saw your Advert</span>&nbsp;<input type="checkbox" > 
            &nbsp;&nbsp;<span>I saw your Banner</span>&nbsp;<input type="checkbox"> <br>
            <span>A friend told me</span>&nbsp;<input type="checkbox"> &nbsp;&nbsp;<span>I recived your flyer</span>&nbsp;<input type="checkbox">
            
    </div>
    <div>
            <span>Any area of special interest (Curricular or extra curricular):</span><input type="text" style="width: 280px" value=""> 
    </div>
    <div>
        <span>Does your child suffer from any disability as to vision, hearing, walking/disease?:</span>&nbsp;<span>Yes</span>&nbsp;<input type="checkbox"> 
        &nbsp;&nbsp;<span>No</span>&nbsp;<input type="checkbox"><br>
    </div>
    <h6 class="text-center mt-3" style="background-color: #FDBD7C">PARTICULARS</h6>
    <div>
        <div class="d-inline"><span  style="padding: 0; margin:0">Father Particular</span></div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="d-inline"><span  style="padding: 0; margin:0">Mother Particular</span></div>
    </div>
    
    <div>
        <div class="d-inline"><span>Present Occupation:</span><input type="text" style="width: 178px" value=""> </div>
        &nbsp;&nbsp;
        <div class="d-inline"><span>Present Occupation:</span><input type="text" style="width: 180px" value=""> </div>
    </div>
    <div>
        <div class="d-inline"><span>NID No:</span><input type="text" style="width: 267px" value=""> </div>
        &nbsp;&nbsp;
        <div class="d-inline"><span>NID No:</span><input type="text" style="width: 280px" value=""> </div>
    </div>
    <div>
        <div class="d-inline"><span>Telephone/Cell:</span><input type="text" style="width: 212px" value=""> </div>
        &nbsp;&nbsp;
        <div class="d-inline"><span>Telephone/Cell:</span><input type="text" style="width: 210px" value=""> </div>
    </div>
    <div>
        <div class="d-inline"><span>Facebook Id:</span><input type="text" style="width: 234px" value=""> </div>
        &nbsp;&nbsp;
        <div class="d-inline"><span>Facebook Id:</span><input type="text" style="width: 235px" value=""> </div>
    </div>
    </div>
    <div style="background-color: #FEF2E4; padding: 10px;" class="pb-2">
        <span>Mode of transports:</span>&nbsp;
        <input type="checkbox">&nbsp;<span>Public Transports</span>
        &nbsp; &nbsp;<input type="checkbox">&nbsp;<span>Own Transports</span>
        &nbsp; &nbsp;<input type="checkbox"> &nbsp;<span>School Transports</span> 
        <div class="mt-2"><span>Name and address of local guardian (with cell number):</span><input type="text" style="width: 350px"></div>
        <span class="float-left">Declaration :</span><span style="text-align:center" class="d-block">We declare that the information given above is true. We understand and agree that the school's decision on matters of admission and the child participation in the school will be final.</span>
        <div class="mt-1">
            <div class="d-inline"><span>Date:</span><input type="text" style="width: 178px"> </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="d-inline"><span>Signature of Parents:</span><input type="text" style="width: 180px"> </div>
        </div>
    </div>
    <div class="" style="background-color:#FFE6C8; padding: 10px;">
        <p class="text-center p-0 m-0">Items to be submitted with application</p>
        <span class="text-center d-block" style="text-transform: capitalize;">Photocopy of Birth certificate, 3 copies of PP size coloured photographs of student, one copy of PP size photograph of both father and mother, photocopy of progress report and photocopy of parents NID.</span>

    </div>
    <h6 style="color: 413F7F" class="text-center">[FOR OFFICIAL USE]</h6>
    <div>
        <div class="d-inline"><span>Remarks:</span><input type="text" style="width: 640px"> </div>
    </div>
    <div>
        <div class="d-inline"><span>Date:</span><input type="text" style="width: 178px"> </div>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="d-inline"><span>Signature of Parents:</span><input type="text" style="width: 180px"> </div>
    </div>
</body>
</html>