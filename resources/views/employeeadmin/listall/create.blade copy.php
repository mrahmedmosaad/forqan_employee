@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">

                        List all
                        <a href="listall/create">new item</a>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}

                        @if (auth()->user()->type == 'admin')
                            <a href="/listall">list all</a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cotainer">

        @if (Session::has('message'))
            {{-- <div class="alert alert-success">{{ Session::get('message') }}</div> --}}

            <div class="alert alert-success alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong>{{ Session::get('message') }}
            </div>
        @endif
        <br>
-------------------------------------
<br>

{{-- {{ session('listall')->list_item_ar}}  --}}
{{-- {{$listall->list_item_ar}}  --}}
{{-- @foreach ($listdevs as $listdev)
   {{$listdev->listall->list_item_ar}} 
@endforeach --}}

{{-- @forelse ($array_data->listall as $item)
    
{{  $item->listname_ar }} 
<br>
@empty
    ddddddd
@endforelse --}}

{{-- @foreach ($array_data->listall as  $item)
{{  $item->listname_ar }} 
@endforeach --}}








<br>
------------------------------------
<br>
        <form action="{{ url('listall') }}" method="POST">
            @csrf
            {{-- <div class="form-group">
          <label for="exampleFormControlInput1">listname</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div> --}}
            <div class="form-group">
                <label for="exampleFormControlSelect1">listname</label>
                
 
                
                
                <select class="form-control" id="listdev_id" name="listdev_id">


                @isset($array_data['listdev'])



@foreach ($array_data['listdev'] as $item)


<option value="{{$item->listname_ar}}"
 



{{ $array_data['listdev_id'] == $item->id ? 'selected' : '' }} 




>{{$item->listname_ar}}</option>


@endforeach

@endisset





                    {{-- @foreach ($array_data->listdev as $item) --}}

                        {{-- <option value="{{ $item->id }}" --}}
                          
                            {{-- @if(session()->has('listdev_id')) --}}
                      {{-- {{session('listdev_id')}}   --}}
                      {{-- @if($array_data->new==0)
                            {{ $array_data->listdev_id == $item->id ? 'selected' : '' }} 
 
                            @endif    --}}
                           
                           
                           
                           
                           
                           
                            {{-- @isset($listdev_id)
                            {{ $listdev_id == $item->id ? 'selected' : 'list'.$listdev_id }} 
                            @endisset --}}
                             {{-- >{{ $item->listname_ar }} --}}
                        </option>
                    {{-- @endforeach --}}
                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlInput1">add item</label>
                <input type="text" class="form-control" name="list_item_ar" id="list_item_ar"
                    placeholder="اكتب هنا">
            </div>

            {{-- <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div> --}}
            <button type="submit">submit</button>
        </form>


    </div>

<div class="container">


<br>

    {{-- {{session('listdev_id')}}   --}}

    <br>
   

    {{-- @foreach (session('listall') as $item)
    <tr>
       <th scope="row">4</th>
    <td>
        {{ $item->list_item_ar}} 
    </td>
    <td>41</td>
   
   </tr>
   
         
   @endforeach --}}



   {{-- {{ session('listdev')->listname_ar}} --}}
<br>
<!--Table-->
<table class="table table-hover table-fixed">

    <!--Table head-->
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
 
        <th>Notes</th>
      </tr>
    </thead>
    <!--Table head-->
  
    <!--Table body-->
    <tbody>





      <tr>
        <th scope="row">1</th>
        <td>Jerry</td>
     
        <td>41</td>

      </tr>

{{-- 
    

      @if($array_data->new==1)
      {{-- {{ $array_data->listdev_id == $item->id ? 'selected' : '' }}  --}}

      {{-- @endif --}}

      @if($array_data->new==0)

      

      @foreach ($array_data->listall as $item)
      <tr>
         <th scope="row">4</th>
      <td>
          {{ $item->list_item_ar}} 
      </td>
      <td>41</td>
     
     </tr>
     
           
     @endforeach

      @endif --}}


 










        </tbody>
    <!--Table body-->
  
  </table>
  <!--Table-->




</div>



@endsection
