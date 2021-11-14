{{-- ================check if user found --}} 


<style>
     .content{
        margin: auto;
   height: 250px;
   /* width: 230px; */
   background-color: blanchedalmond;
   overflow: scroll;
}
</style>
 

<style>
table {
  border-collapse: collapse;
  width: 100%;

}
th, td {
 
  text-align: left;
  border: 1px solid #ccc;
  
}
tr:hover,tr:nth-child(odd):hover {
background-color: #430A6C;
color: aquamarine;
}
tbody tr:nth-child(odd) {
  background: #eee;

 
}
tr ,td      {
height: 22px  !important;
}
 
</style>

{{-- @if ($chekme==1) --}}
<div class="form-group    w-50   p-3 border-round  m-auto p-0" style="min-width: 350px">

   
    {{-- <form wire:submit.prevent="ckeckifnotfound" > --}}
        
                <div class="form-group p-0">
                    <label for="exampleInputPassword1">Enter National ID or Passport Number</label>

                    <div class="row p-0" >
                        <div class="col-lg p-0">
                            <div class="input-group  p-0 text-center">
                                
                                  {{-- <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                   --}}

                                   @include('employeeadmin.employeenew.main.search4')
                                  
                                </div>
                                 
                                {{-- {{ $type1 }} --}}
                              {{-- <form class="form-floating rtl">
                                <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
                                <input type="email" class="form-control is-valid rtl" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
                                <label for="floatingInputInvalid">Invalid input</label>
                              </form> --}}
                            {{-- text search --}}
                            {{-- <input type="text" autofocus tabindex="1" wire:model.lazy="NationalIDcheck" class="form-control input-sm "   wire:keypress="ckeckifnotfound">
                            @error('NationalIDcheck')  <small class=" text-danger p-0 m-0"> {{ $message }}</small>  @enderror --}}
                        </div>
                        <div class="col-xs">
                    
                            
                            {{-- <button type="submit" class="btn btn-primary   fa fa-spinner  ">find</button> --}}
 {{-- @section('statusme')

 @if ($loading==1)
 <span class="   fa fa-spinner fa-spin"></span>
       
         
     @elseif($loading==0)
         <span  ></span>
      
 @endif 
 @endsection --}}

                 {{-- <span class="   fa fa-spinner fa-check-square  "></span>
                             {{-- <span class="   fa fa-spinner fa-spin"></span> --}}
                             {{-- <span class="    fa fa-spinner  fa-check-square  fa-fade"></span> --}}
                             {{-- <h1>fa fa-font-awesome</h1>
                             <i class="fa-duotone fa-magnifying-glass"></i>
                             <span class="fa-light fa-magnifying-glass"></span>   --}}
                        </div>
                    
                    </div>

                    <div class="row p-0" >

                        @include('employeeadmin.employeenew.main.searchresult')



                    </div>
                    <div class="row p-0" >

                        @include('employeeadmin.employeenew.main.usersorder')



                    </div>

                </div>
           

                {{-- <div class="form-group ">
                    <input type="radio" name="ch1" id="Nid" checked>
                    <label class="w-75" for="Nid">National ID</label> <br>
                    <input type="radio" name="ch1" id="PASSPortNUmberCheck">
                    <label class="w-75" for="PASSPortNUmberCheck">PASSPortNUmberCheck</label>
                </div> --}}
                {{-- <div class="text-center"> --}}
                    {{-- <button  class="btn btn-primary" type="submit">Add new</button> --}}
                    





                    
                {{-- </div> --}}
            {{-- </form> --}}
            
        </div>
        {{-- @else
        @endif --}}


        @if ($searchresultscount>0)
 
        <div class="text-center w-100  d-flex justify-content-center content">

       <table class="    m-auto   ">
           <thead>
               <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>National ID</th>
                   <th>Passport Number</th>
                   <th>Edit</th>
               </tr>
           </thead>
           <tbody>
 
            @if (is_array($found) || is_object($found))
               @foreach ($found as $item)
               <tr>
                   <td scope="row">{{ $counter++}}</td>
                   <td>{{ $item->name }}</td>
                   <td>     {{(!$item->datamain== null)? $item->datamain->first()->nationalid :"" }}</td>
                   <td>     {{(!$item->datamain== null)? $item->datamain->first()->passport_number :"" }}</td>
                   <td> <button wire:click='editme({{$item->id}})' class="btn bg-success btn-primary ">edit</button></td>
               </tr>



              
           @endforeach 
                      @endif

           </tbody>
       </table>
    </div>
 
 @else
{{-- yyyyyyyyyyyyyyyyyyyyyyyyyyyyyy --}}





<button class="btn btn-secondary"  onClick="window.open('{{route('listall.create')}}');"> تعديل القوائم</button>
<button class="btn btn-primary " wire:click='eeeeeeeeeecreatnewuserok'>ادخال جديد</button>
<button class="btn btn-primary " wire:click='upim'> upim</button>
<input type="file"     wire:model='img1' accept="image/png, image/gif, image/jpeg" />

<img class="svgvsm  m-3" src="storage/icons/view.svg" alt="view"     onClick="window.open('storage/images/{{$userid}}/test.png');"  >
{{-- resources\views\employeeadmin\employeenew\main\1.blade.php
resources\views\employeeadmin\listall\index.blade.php --}}
        @endif
