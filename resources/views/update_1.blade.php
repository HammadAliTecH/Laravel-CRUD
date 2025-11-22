@extends('parent')
@section('body')
  <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
              <h1 class="d-flex justify-content-center mt-5 update-main-head" >  UPDATE YOUR DATA</h1>
          <form action="{{ route('update_1') }}" method='POST'>
            @csrf
            </div>
            <div class="col-lg-6">
                    <div class=" mt-5 add_container_up "  >
                <h3 class="text-center" >ENTER EMAIL</h3>
                <div class="d-flex justify-content-center " ><input type="text" name="email" id="" class="up_search"></div>
             </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center mt-4" >
                    <a href="{{ route('wellcome') }}"><input class="bg-success add_bu_s ms-3 btn"   name="" id="" value="GO BACK"></a>
                 <input type="submit" class="add_bu_s ms-3 main-btn btn"  name="" id="" value="FETCH RECORD" >
                </div>
            </div>
        </div>
    </div>          </form>
   @push('js')
        <script src="{{ asset('js/new.js') }}" ></script>
   @endpush
@endsection
  
