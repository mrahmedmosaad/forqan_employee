edit-------
{{-- @foreach ($listall as $item)
    {{$item->list_item_ar}}
    <br>
@endforeach --}}

<form action="/listall/{{$listall_edit['id']}}" method="post">
   @csrf
    @method('put')
    <input type="text" name="list_item_ar" value="{{$listall_edit['list_item_ar'] }}">
     <input type="text" name="listdev_id" value="{{$listall_edit['listdev_id'] }}" hidden>
    
<button type="submit">submit</button>
</form>



















{{-- 
<div class="row">
 <form action="{{ url('listall') }}" method="POST">
    @csrf
<div class="form-control">

    <select class="form-control" id="listdev_id" name="listdev_id">
        @foreach ($array_data['listdev'] as $item)
        <option value="{{$item->id}}" {{ $array_data['listdev_id'] == $item->id ? 'selected' : '' }}>{{$item->listname_ar}}
        </option>
        @endforeach
    </select>
</div>

<div class="form-control">

    <input type="text" class="form-control" name="list_item_ar" id="list_item_ar"
    placeholder="اكتب هنا">



<button type="submit">submit</button>
 </form>
</div>
</div>


 


   


 



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
            <td scope="row"></td>
            <td>{{$item->list_item_ar}}</td>
            <td>{{$item->id}}
                <a href="listall/{{$item->id}}/edit">edit</a>
                <form action="listall/{{$item->id}}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit">delete</button>
                </form>
                {{-- <a href="listall/{{$item->id}}">delete</a> --}}
{{--         
        </td>
        </tr>    



 
@endforeach

        
        
    </tbody>
</table> --}}  