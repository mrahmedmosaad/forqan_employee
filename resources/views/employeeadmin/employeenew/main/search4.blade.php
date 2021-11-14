                  
                             {{-- <img   src="{{asset('storage/images/22/job32.png', $secure = null)}}" alt="savedata"       > --}}
                             {{-- <img   src="public/storage/images/22/job32.png" alt="savedata"       > --}}
                                         
<div class="col w-100  ">
<div class="row">
  <input list="da2"
    
   
    placeholder            ="Search ..."
    wire:model             ="query"
    wire:keydown.escape=   "reset1"
    wire:keydown.tab       ="reset1"
    wire:keydown.ArrowUp   ="decrementHighlight"
    wire:keydown.ArrowDown ="incrementHighlight"
    wire:keydown.enter     ="selectContact"
    {{-- wire:click             ="selectContact"  --}}
    class="form-input basic round w-75"
    {{-- class="form-control input-sm " --}}
    autofocus
    autocomplete="off"
     
    name="myBrowser" /> 

<img src="storage/app/public/icons/search.svg" alt="">

    <span type="submit" class="btn   p-2 noborder fa  fa-search" wire:click="selectContact"></span>
    <datalist id="da2"  >
 
        
  @if(!empty($query))
  {{-- <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div> --}}

  <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
      @if(!empty($contacts))
          @foreach($contacts as $i => $contact)
          {{-- {{-- @if ($type1==1) --}}
               <option value="{{$contact['name_ar']}}" > 
          {{-- @endif  
          @if ($type1==5)
              <option value="{{$contact['name_ar']}}" >   
          @endif
        --}}

          @endforeach
      @else
          {{-- <div class="list-item">No results!</div> --}}
      @endif
  </div>
@endif
    </datalist>

    {{-- {{$contacts}} --}}

</div>
<div class="row">

 
  {{-- {{$type1}}


<button wire:click='userdataarray'>dddddddddd</button>
================================================================================ --}}



@if(!empty($query))
  {{-- <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div> --}}

  <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
      @if(!empty($contacts))
          @foreach($contacts as $i => $contact)
          {{-- @if ($type1==1)
              <option value="{{$contact['name']}}" >
          @endif --}}
          @if ($type1==5)
              <option value="{{$contact['name_ar']}}" >   
          @endif
       

          @endforeach
      @else
          {{-- <div class="list-item">No results!</div> --}}
      @endif
  </div>
@endif


{{-- ================================================================================ --}}











{{-- custom-select --}}
{{-- <select class=" p-0 noborder"  id="inputGroupSelect01"
                                wire:model='type1'
                                
                                 
                                >
                                 
                                <option value="5">الكل</option>
                                <option value="4">name الايميل</option>
                              </select> --}}
                                  {{-- <option value="1">الرقم الوطني</option>
                                  <option value="2">جواز السفر</option>
                                  <option value="3">رقم التليفون</option> --}}
                                 
                                

                               {{-- {{ $isnewuser}} --}}
                     {{-- @if ($isnewuser==3)  
                     aaa
                        @else  

                 @if ($isnewuser==1)
                     <button >{{($isnewuser==1)?"new":"edit"}}</button>
                 @else
                 <button >edit</button>

                 @endif
                    @endif --}}
                  </div>
                  
                  {{-- < --}}

</div>
 
    








 