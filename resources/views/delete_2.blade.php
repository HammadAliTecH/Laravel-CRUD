@extends('parent')
@push('style_2')
    <link rel="stylesheet" href="{{ asset('css/div_2.css') }}">
@endpush
@section('body')
<div class="container-fluid">
    <div class="row d-flex justify-content-center ">
        <div class="col-lg-12">
                 <h1 class="d-flex justify-content-center mt-5 update-main-head_delete" >  DELETE YOUR DATA</h1>
        </div>
        <form action="{{ route('delete_2') }}" method="POST" >
          @csrf
                               <div class="col-lg-10 mt-5">
                <div class="d-flex justify-content-center" >
 
  @forelse ($fetch_delete as $value )
  <table>
  <tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>CLASS</th>
    <th>AGE</th>
  </tr>
  <tr>
    <td>{{ $value->name }}</td>
     <td>{{ $value->email }}</td>
     <td>{{ $value->class }}</td>
     <td>{{ $value->age }}</td>
  </tr></table>
  <input type="hidden" name="id" id="" value="{{ $value->id }}" >
  @empty
     <h1 class="text-center mt-5" >DATA NOT FOUND</h1>
  @endforelse
 

                </div></div>
            <div class="col-lg-12">
            <div class="d-flex justify-content-center mt-4" >
            <a href="{{ route('v_delete_1') }}"><input class="bg-success add_bu_s ms-3 btn "   name="" id="" value="GO BACK"></a>
            <input class="add_bu_s ms-3 main-btn btn"   name="" id="" value="DELETE DATA" onclick="openConfirm()">
                    
  <!-- Step 2: Confirmation Box -->
  <div class="overlay" id="confirmBox">
    <div class="confirm-box">
      <h3>Are you sure?</h3>
      <p>Do you want to continue?</p>
      <div class="confirm-btns">
        <button  type="submit" class="yes-btn" onclick="showPopup()">Yes</button>
        <button class="no-btn" onclick="closeConfirm()">No</button>
      </div>
    </div>
  </div>
</form>
  <!-- Step 3: Popup Box -->
  <div class="overlay" id="popupBox">
    <div class="popup-box">
      <h2>SUCCESS!</h2>
      <p>Your Data has been deleted Successfully.</p>
      <button class="main-btn" onclick="closePopup()">Close</button>
    </div>
  </div>
                </div>
            </div>                
    </div>
</div>
@push('js')
  <script src="{{ asset('js/new.js') }}" ></script>
@endpush
@endsection

