@extends('parent')
@section('body')
 <form action="{{ route('add') }}" method="POST" >
     @csrf
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
              <h1 class="d-flex justify-content-center mt-5 add-main-head" >  CREATE/INSERT YOU DATA</h1>
            </div>
            <div class="col-lg-6">
                    <div class=" mt-5 add_container "  >
                <div class="d-flex justify-content-center" >
             <table>
                <tr>
                    <td>
                    <label for="">NAME:</label>
                    <input type="text" name="name" id=""> </td>
                    <td><label for="">EMAIL:</label>
                    <input type="email" name="email" id="">
                    </td>
                </tr>
                <tr  >
                     <td class="row-2">
                    <label for="">CLASS:</label>
                    <select name="class" id="" class="add-select" >
                        <option value="" disabled selected>SELECT YOUR CLASS</option>
                        <option value="09TH">09TH</option>
                        <option value="10TH">10TH</option>
                        <option value="11TH">11TH</option>
                        <option value="12TH">12TH</option>
                    </select></td>
                    <td class="row-2_1  " >
                     <label for="">AGE:</label>
                    <input type="number" name="age" id="">
                    </td>
                </tr>
             </table></form>
             </div>
             </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center mt-4" >
                    <a href="{{ route('wellcome') }}"><input class="bg-success add_bu_s ms-3 btn "   name="" id="" value="GO BACK"></a>
                     <a href="{{ route('new_u') }}"><input class="add_bu_s ms-3 bg-danger btn"   name="" id="" value="REFRESH"></a>
                    <input    class="add_bu_s ms-3 main-btn btn"  name="" id="" value="SUBMITT"      onclick="openConfirm()" >
  <!-- Step 2: Confirmation Box -->

  <div class="overlay" id="confirmBox">
    <div class="confirm-box">
      <h3>Are you sure?</h3>
      <p>Do you want to continue?</p>
      <div class="confirm-btns">
        <button type="submit" class="yes-btn"   onclick="showPopup()">Yes</button>
        <button  class="no-btn" onclick="closeConfirm()">No</button>
      </div>
    </div>
  </div>
    @isset($response)
  <!-- Step 3: Popup Box -->
  <div class="overlay" id="popupBox">
    <div class="popup-box">
      <h2>Success!</h2>
      <p>{{ $response }}</p>
      <button class="main-btn" onclick="closePopup()">Close</button>
    </div>
  </div>
   @endisset
                </div>
            </div>
        </div>
    </div>
   @push('js')
      <script src="{{ asset('js/new.js') }}" ></script>
   @endpush
     </form>
@endsection
  
