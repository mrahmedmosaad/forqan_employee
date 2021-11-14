@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            {{-- ------------------------------------ --}}


            list number:<h2>{{$array_data['listdev_id']}}
            </h2>
                   
<div class="form-control" id="listdev_name_ar_hide" style="display: none">
    @isset($array_data['listdev_name_ar'])
                        <form action="{{ url('listdev_name_ar') }}" method="POST">
                          @csrf
                          <input type="text" hidden value="{{$array_data['listdev_id']}}" name="listdev_edit_id" id="listdev_edit_id">  
                          
                          
                          
                          <input type="text" value="{{$array_data['listdev_name_ar']}}" name="listdev_edit" id="listdev_edit"> <button type="submit" class="btn btn-primary btn-sm">save</button>

                          @endisset
                          
                          
{{-- {{$array_data['listdev_name_ar'][$array_data['listdev_id']]->listname_ar}} --}}
                        </form>
</div>
                        <button onclick="document.getElementById('listdev_name_ar_hide').style.display='block'"  class="btn btn-primary btn-sm">edit</button>
 <div class="row" >
                          
                            <form action="{{ url('listall') }}" method="POST">
                                @csrf
                                 
                                    <select class="form-control" id="listdev_id" name="listdev_id" onchange="this.form.submit()">
                                        @foreach ($array_data['listdev'] as $item)
                                        <option value="{{$item->id}}" {{ $array_data['listdev_id'] == $item->id ? 'selected' : '' }}>{{$item->listname_ar}}
                                        </option>
                                        @endforeach
                                    </select>
         
                            <script>

                                // document.getElementById('listdev_edit').value=document.getElementById('listdev_id').options[document.getElementById('listdev_id').selectedIndex].text;
                                
                            </script>
        
                            <input type="text" class="form-control" name="list_item_ar" id="list_item_ar"
                                    placeholder="اكتب هنا" autofocus>
        
        
        
                            <button type="submit" class="btn btn-primary btn-sm" id="client_id">submit</button>
         </form>
        </div>
    </div>
    </div>
</div>
<div class="container" style="max-width: 60%">
         
        
        <hr><br>
         
        
        
           
        
        
         
        
        
        
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                   
                    
                    <th>name</th>
                     <th>action</th>
                     
                </tr>
            </thead>
            <tbody>
        
                @foreach ($array_data['listall'] as $item)
        
                    <tr>
                    <td scope="row"></td> <td></td>
                    <td>
                        {{-- {{$item->list_item_ar}} --}}
        
        
                        <form action="/listall/{{$item->id}}" method="post">
                            @csrf
                             @method('put')
                             <input type="text" name="list_item_ar" value="{{$item->list_item_ar }}">
                              <input type="text" name="listdev_id" value="{{ $item->listdev_id   }}" hidden>
                             
                         <button type="submit"  class="btn btn-primary btn-sm">save</button>
                         </form>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </td>
                    <td>
                        {{-- {{$item->id}} --}}
                        {{-- <a href="{{ url('listall/'.$item->id.'/edit')}}">edit</a> --}}
                        
                        <form action="{{ url('listall/'.$item->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure?')">delete</button>
                       <input type="text" name="listdev_id" id="listdev_id" value="{{ $array_data['listdev_id']}} " hidden>
                        </form>
        
                        {{-- <a href="listall/{{$item->id}}">delete</a> --}}
                
                </td>
                </tr>    
        
        
        
         
        @endforeach
        
                
                
            </tbody>
        </table>




{{-- ------------------------------------ --}}



        </div>
    </div>

@endsection

{{-- ------------------------------------ --}}
    