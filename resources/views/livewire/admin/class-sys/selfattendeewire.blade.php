<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom.wire:model='gradeclassnameset({{$item->id}})' --}}
    @if (!$studentidcookie)
         <div class="text-center">
             {{-- <select wire:click='gradeclassnameset({{$item->id}})' > wire:click='gradeclassnameset'--}}
                <select wire:model='studentid'   >
                    <option value="">choose</option>
                @foreach ($StudentTb as $item)
    
                <option value="{{$item->id}}">{{$item->name}}</option>
                {{-- <button wire:click='gradeclassnameset({{$item->id}})'>{{$item->name}}</button> --}}
                @endforeach
                {{-- <option value="5">Grade 6</option> --}}
             </select>
             @if ($savehide==0)
                 
             <button  wire:click='gradeclassnameset'   >save</button>
             @else
             <button     wire:click='cancel1'  >cancel</button>
             <button    onclick='location.reload();' >submit</button>
                 
             @endif




 

 

 </div>
    @endif

{{--  
  <button wire:click='gradeclassview'>gradeclassview </button>
  <button wire:click='gradeclassviewnames'>names </button>
  <button onclick='location.reload();'>submit </button> --}}
<div wire:poll='canreg'>
 @if ($can1==0)
  
  {{-- @if ($canresetname==$studentclassname)
      
  <button wire:click='gradeclassdel'>reset </button>
  @endif --}}
<h2>{{$studentname}}</h2>
<h3>  Wait for your teacher to enable the attendance
</h3>  
      
  @else
  {{-- @if ($can1==1) --}}
                 
  <button  wire:click='registerattendance({{$studentid}})'  {{($can1==0)? 'readonly':''}} ><h3>register attendance</h3></button>
  {{-- @else
  <button     wire:click='cancel1'  >cancel</button>
  <button    onclick='location.reload();' >submit</button>
      
  @endif --}}


  @endif
</div>

canresetname{{$studentname}} <br>
{{$studentid}} <br>
{{-- {{$sessionactive}} <br> --}}
{{-- {{$cookiegrade}} <br>
{{$cookiegradeclass}} --}}
 <div class="text-center">
     @if ($StudentTb)
         
     
{{-- @foreach ($StudentTb as $item)
    
<button wire:click='gradeclassnameset({{$item->id}})'>{{$item->name}}</button>
@endforeach --}}
@endif
   </div>





 </div>
