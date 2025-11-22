@extends('parent')
@section('body')
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
               <h1 class="d-flex justify-content-center mt-5 update-main-head" >  UPDATE YOUR DATA</h1>
          <form action="{{ route('update_2') }}" method="post">
            @csrf
            </div>
            <div class="col-lg-6">
                    <div class=" mt-5 add_container_update_2 "  >
                <div class="d-flex justify-content-center" >
             <table>
              @forelse ($data as $value)
                       <tr>
                    <td>
                    <label for="">NAME:</label>
                    <input type="text" name="name" id="" value="{{ $value->name }}" > </td>
                    <td><label for="">EMAIL:</label>
                    <input type="email" name="email" id=""  value="{{ $value->email }}" >
                    </td>
                </tr>
                <tr  >
                     <td class="row-2">
                    <label for="">CLASS:</label>
                   <select name="class" class="add-select">
<option value="09TH" @selected($value->class == '09TH')>09TH</option>
<option value="10TH" @selected($value->class == '10TH')>10TH</option>
<option value="11TH" @selected($value->class == '11TH')>11TH</option>
<option value="12TH" @selected($value->class == '12TH')>12TH</option>
</select>
</td>
                    <td class="row-2_1  " >
                     <label for="">AGE:</label>
                    <input type="number" name="age" id="" value="{{ $value->age }}" >
                    </td>
                    <input type="hidden"   name="id" id="" value="{{ $value->id }}" >
                </tr>
              @empty
                <h1 class="text-center mt-5" >DATA NOT FOUND</h1>
              @endforelse
             </table>
             </div>
             </div>
            </div>
            
            <div class="col-lg-12">
                <div class="d-flex justify-content-center mt-4" >
                    <a href="{{ route('new_u_1') }}"><input class="bg-success add_bu_s ms-3 btn "  name="" id="" value="GO BACK"></a>
                    <input class="add_bu_s ms-3 main-btn btn"    name="" id="" value="UPDATE DATA" onclick="openConfirm()">
                    
  <!-- Step 2: Confirmation Box -->
  <div class="overlay" id="confirmBox">
    <div class="confirm-box">
      <h3>Are you sure?</h3>
      <p>Do you want to continue?</p>
      <div class="confirm-btns">
        <button class="yes-btn" onclick="showPopup()">Yes</button>
        <button type="submit" class="no-btn" onclick="closeConfirm()">No</button>
      </div>
    </div>
  </div>
</form>
  <!-- Step 3: Popup Box -->
  <div class="overlay" id="popupBox">
    <div class="popup-box">
      <h2>SUCCESS!</h2>
      <p>Your Data has been updated Successfully.</p>
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

