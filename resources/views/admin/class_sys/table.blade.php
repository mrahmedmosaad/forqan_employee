{{-- ====== --}}


<div>
  <div>
    <div wire:loading>
        Processing Payment...
    </div>
    <div  wire:loading  >

        <img   src="{{ asset('/storage/icons/loading.gif')}}" alt="" width="42px">

    </div>
    {{-- <button wire:click="checkout">Checkout</button>
    <button wire:click="cancel">Cancel</button> --}}
 
    {{-- <div wire:loading  wire:loading.delay> --}}

        <div  wire:loading.delay wire:target="creat_period">
            <div class="la-ball-climbing-dot la-dark la-2x fixed1" > 
        <img   src="{{ asset('storage/icons/loading.gif')}}" alt="" width="42px">
        Processing ...
         <div></div> <div></div><div></div><div></div>
        </div>
    </div>
            <div  wire:loading wire:target="update_attend">
            <div class="la-ball-climbing-dot la-dark la-2x fixed1" style="widows: 22px"> 
         Processing ...
         <div></div> <div></div><div></div><div></div>
        </div>
    </div>
     
        {{-- <div  wire:loading wire:target="setstar">
            <div class="la-ball-climbing-dot la-dark la-2x fixed1" > 
         Processing ...
         <div></div> <div></div><div></div><div></div>
        </div>
    </div> --}}
             <div  wire:loading wire:target="setstar">
                <div class="la-line-scale la-dark fixed1"
                style="position:fixed;left:100pxx;top:100px;z-index:9999;background-color: black "
                >
                
                    Processing ...
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
    </div>   
        
         

          
         
         
        
        {{-- style="position:fixed;left:100pxx;top:100px;z-index:9999 " --}}
         
            
            
            
        
        
        {{-- <div class="la-square-jelly-box">
            <div></div>
            <div></div>
        </div>
        <img src="" alt=""> --}}
    </div>
</div>

{{-- ==== --}}
<div class="text-center" style="background-color: black">
<label for="today_only ">today_only</label>

<input type="checkbox" name="" id="today_only" wire:model='today_only' value="1">
{{-- {{ $today_only }} --}}
 <table class="table table-light">
     <thead>
         <th>
             day/period
         </th>
         @for ($ih = 1; $ih <= 6; $ih++)
         <th>
             @include('admin.class_sys.table-head')  
         </th>
         @if ($ih==3)
         <th> break</th>
@endif
         @endfor
     </thead>
     
     <tbody>

        @if ($today_only==1)
        <?php
$iday = $day_today;
        ?>

             @include('admin.class_sys.table-day') 
        @else
            
      
            @for ($iday = 1; $iday <= 5; $iday++)
                           @include('admin.class_sys.table-day')  
            @endfor
              @endif
     </tbody>

 </table>
 
</div>
