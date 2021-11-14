
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css"> --}}
{{-- <style>
     .divload{
         position: absolute;
         z-index: 10;
         width: 100%;

     }
 .divquery{
         position: fixed;
         /* z-index: 10;
         width: 100%; */
          top:0px;
         bottom:0px;
         left:0px;
         right:0px;
         
     }


 </style> --}}
<div class="relative" style="position: relative">
     <input
        type="text"
        class="form-input"
        placeholder="Search Contacts..."
        wire:model="query"
        wire:keydown.escape="reset1"
        wire:keydown.tab="reset1"
        wire:keydown.ArrowUp="decrementHighlight"
        wire:keydown.ArrowDown="incrementHighlight"
        wire:keydown.enter="selectContact"
    />
 
    <div wire:loading class=" divload absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
        <div class="list-item">Searching...</div>
    </div>
 
    @if(!empty($query))
        <div class="fixed top-0 bottom-0 left-0 right-0" wire:click="reset1"></div>
 
        <div class="absolute z-10 w-full bg-white rounded-t-none shadow-lg list-group">
            @if(!empty($contacts))
                @foreach($contacts as $i => $contact)
                    <button
                    wire:click="editme({{ $contact['id'] }})"
                       
                        class="list-item {{ $highlightIndex === $i ? 'highlight' : '' }}"
                    >{{ $contact['id'] }}:{{ $contact['name'] }}</button>
                @endforeach
            @else
                <div class="list-item">No results!</div>
            @endif
        </div>
    @endif
 
    {{-- <div class="row">
<div class="col">
    
</div>
<div class="col">
    
</div>


    </div> --}}

{{-- ============================================================== --}}
 

</div>
