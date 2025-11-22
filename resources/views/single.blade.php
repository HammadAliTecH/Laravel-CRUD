@extends('parent')
@section('body')
<div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
               <h1 class="d-flex justify-content-center mt-5 fetch-main-head mb-5" >READ/FETCH DATA</h1>
          
            </div>
            <div class="col-lg-6">
                    <div class=" mt-5 add_container_update_2_fetch "  >
                <div class="d-flex justify-content-center" >
             <table>
                @forelse ($data_user as $value )
                    <tr>
                    <td><b for="">NAME:</b>
                    <p>{{ $value->name }}</p></td> </tr>
                    <tr>
                    <td><b for="">EMAIL:</b>
                    <p>{{ $value->email }}</p></td>
                </tr>
                <tr>
                <td><b for="">CLASS:</b>
                    <p>{{ $value->class }}</p></td></tr>
                     <tr><td><b for="">AGE:</b>
                    <p>{{ $value->age }}</p></td>
                </tr>
                @empty
                   <h1 class="mt-5 text-center" >OOPS! NO DATA FOUND</h1>
                @endforelse
             </table>
             </div>
             </div>
            </div>
            <div class="col-lg-12">
                <div class="d-flex justify-content-center mt-4" >
                    <a href="{{ route('read') }}"><input class="bg-success add_bu_s ms-3  "  type="submit" name="" id="" value="GO BACK"></a>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script src="{{ asset('js/new.js') }}" ></script>
    @endpush
@endsection
    
