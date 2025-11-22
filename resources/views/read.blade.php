@extends('parent')
@push('style_2')
   <link rel="stylesheet" href="{{ asset('css/div_1.css') }}">
@endpush()
@section('body')
<div class="container-fluid">
    <div class="row d-flex justify-content-center ">
        <div class="col-lg-12">
                <h1 class="d-flex justify-content-center mt-5 fetch-main-head mb-5" >READ/FETCH DATA</h1>
              <a href="{{ route('wellcome') }}"><input class="bg-success add_bu_s ms-3  "  type="submit" name="" id="" value="GO BACK"></a>
        </div>
     <div class="col-lg-10 mt-5">
<div class="d-flex justify-content-center" >
 <table>
  <tr>
    <th>NAME</th>
    <th>EMAIL</th>
    <th>CLASS</th>
    <th>AGE</th>
    <th>VIEW</th>
  </tr>
  @forelse ($data as $value )
<tr>
    <td>{{ $value->name }}</td>
    <td>{{ $value->email }}</td>
    <td>{{ $value->class }}</td>
    <td>{{ $value->age }}</td>
    <td><a href="{{ route('read_1',$value->name) }}" class="btn">View</a></td>
</tr>
  @empty
      
  @endforelse

</table>

</div></div>
<div class="d-flex justify-content-center mt-4" >{{ $data->links() }}</div>

    </div>
</div>

@endsection
