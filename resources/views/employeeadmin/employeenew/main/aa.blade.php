                                         
<div class="col w-100  ">
  <div class="row">
          <div wire:loading.delay.long  >
          <div class="la-line-scale bg-success fixed2"         >
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
      </div>
       </div>
    <input list="da2"
      
      placeholder            ="Search ..."
      wire:model             ="query"
      wire:keydown.escape=   "reset1"
      wire:keydown.tab       ="reset1"
      wire:keydown.ArrowUp   ="decrementHighlight"
      wire:keydown.ArrowDown ="incrementHighlight"
      wire:keydown.enter     ="selectContact"
      class="form-input basic round w-75"
      autofocus
      autocomplete="off"
       
      name="myBrowser" /> 
<img src="public/storage/icons/search.svg" alt="">


      <span type="submit" class="btn   p-2 noborder fa  fa-search" wire:click="selectContact"></span>
      <datalist id="da2"  >
   
          
    @if(!empty($query))
  
    <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
        @if(!empty($contacts))
            @foreach($contacts as $i => $contact)
                 <option value="{{$contact['name_ar']}}" > 

  
            @endforeach
        @else
        @endif
    </div>
  @endif
      </datalist>
  
  
  </div>
  <div class="row">
  
  @if(!empty($query))
    <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
        @if(!empty($contacts))
            @foreach($contacts as $i => $contact)

            @if ($type1==5)
                <option value="{{$contact['name_ar']}}" >   
            @endif
            @endforeach
        @else
        @endif
    </div>
  @endif
  
   
  
  
  
  
  
  
  
   
                                   
                                  
  
          
                    </div>
  </div>
   
      
  
  
  
  
  
  
  
  
   