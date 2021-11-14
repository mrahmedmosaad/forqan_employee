@if(!empty($query))
<div class="box effect">
<table class="table table-hover table-inverse table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>name</th>
      <th>nationalid</th>
      <th>passport</th>
      <th>school</th>
    </tr>
    </thead>
    <tbody>




     
      


    {{-- <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div> --}}
    
    {{-- <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group"> --}}
      @if(!empty($contacts))
      @foreach($contacts as $i => $contact)
      <tr>
        <td scope="row"></td>
        <td>{{$contact['name_ar']}}</td>
        <td>{{$contact['nationalid']}}</td>
        <td>{{$contact['passport_number']}}</td>
        <td>{{$contact['nationality']}}</td>
        <td><button   class="btn btn-primary" wire:click='editme({{$contact['user_id']}})' >تعديل</button></td>
      </tr>


        @endforeach
        
        @endif
      @if(!empty($contactsmains))
      @foreach($contactsmains as $i => $contactmain)
      <option value="{{$contactmain['name_ar']}}">
        @endforeach
        
        @endif
    {{-- </div> --}}
  </tbody>
</table>

</div>
@endif


  
