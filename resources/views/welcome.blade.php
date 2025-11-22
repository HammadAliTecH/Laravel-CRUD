@extends('parent')
@section('body')
<div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-12 mb-5">
                <h6 class="d-flex justify-content-center text-danger"  >HELLO WELLCOME TO</h6>
                <h1 class="d-flex justify-content-center"  ><mark class="bg-danger text-light" >LARAVEL</mark> CRUD OPERATION </h1>
                <div class="d-flex justify-content-center" ><i class="pt-5" >Select your desire operation from catalouge...</i></div>
            </div> 
            <div class="col-lg-3 d-flex justify-content-center">
             
            <div class="box-1 ">
             <a href="{{ route('new_u') }}">
            <h1 class="heading_main d-flex justify-content-center align-content-center" >C</h1>
            <b class=" sub_head_1 d-flex justify-content-center" >CREATE</b></a>
            </div></div>
            <div class="col-lg-3 d-flex justify-content-center"><div class="box-2">
             <a href="{{ route('read') }}">
            <h1 class="heading_main d-flex justify-content-center align-content-center" >R</h1>
            <b class=" sub_head_2 d-flex justify-content-center" >READ</b></a>
            </div></div>
            <div class="col-lg-3 d-flex justify-content-center"><div class="box-3">
            <a href="{{ route('new_u_1') }}">
            <h1 class="heading_main d-flex justify-content-center align-content-center" >U</h1>
            <b class=" sub_head_3 d-flex justify-content-center" >UPDATE</b></a>
            </div></div>
            <div class="col-lg-3 d-flex justify-content-center"><div class="box-4">
            <a href="{{ route('v_delete_1') }}">
            <h1 class="heading_main d-flex justify-content-center align-content-center" >D</h1>
            <b class=" sub_head_4 d-flex justify-content-center" >DELETE</b></a>
            </div></div>
             <div class="col-lg-12 pt-5">
                <div class="d-flex justify-content-center" ><img class="laravel_img" src="{{ asset('file/pngegg (6).png') }}" alt=""></div>
                      <p class="text-center text-light mb-5  bg-danger" >Delevep by HZ Signature</p>
             </div>
        </div>
    </div>
@endsection
    