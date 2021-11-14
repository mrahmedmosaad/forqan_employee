
    {{-- <input list="da" name="myBrowser" />
    <datalist id="da">
      <option value="Chrome">
      <option value="Firefox">
      <option value="Internet Explorer">
      <option value="Opera">
      <option value="Safari">
      <option value="Microsoft Edge">
    </datalist> --}}

 
  {{-- <div >
    <input type="tyext" class="form-input basic round" placeholder="Search ...">
  </div> --}}

  {{-- <div>
    <span style="width: 66px" contenteditable="true" class="form-input basic round" placeholder="DD - Design Drastic"> a</span>
</div> --}}
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
      <span type="submit" class="btn   p-2 noborder fa  fa-search" wire:click="selectContact"></span>
      <datalist id="da2"  >
   
          
@if(!empty($query))
    {{-- <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset"></div> --}}
    
    {{-- <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group"> --}}
      @if(!empty($contacts))
      @foreach($contacts as $i => $contact)
      <option value="{{$contact['name']}}">
        @endforeach
        
        @endif
      @if(!empty($contactsmains))
      @foreach($contactsmains as $i => $contactmain)
      <option value="{{$contactmain['name_ar']}}">
        @endforeach
        
        @endif
    {{-- </div> --}}
    @endif
  </datalist>
 
          
             
         
  
            {{-- <div class="list-item">No results!</div> --}}
  
  
  
  </div>
  <div class="row">
  
   
    {{-- {{$type1}} --}}
  
  
  
  
  
  
  
  
  
  
  
  
  
    <div class="la-line-scale bg-dark text-success">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
  
  
{{--   
    <select class=" p-0 noborder"  id="inputGroupSelect01"
                                 custom-select  
                                  wire:model='type1'
                                  
                                   
                                  >
                                   
                                  <option value="5">الكل</option>
                                  <option value="4">name الايميل</option>
                                  <option value="1">الرقم الوطني</option>
                                    <option value="2">جواز السفر</option>
                                    <option value="3">رقم التليفون</option>  
                                  </select> --}}
                                   
                                  
  
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
   
      
  
  
  
  
  
  
  
  
   