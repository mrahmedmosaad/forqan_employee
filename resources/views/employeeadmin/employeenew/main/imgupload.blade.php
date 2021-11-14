
<form wire:submit.prevent="saveimg">
  <input type="file" wire:model="photo1" id="imagefile1"     accept="image/png, image/gif, image/jpeg" >
  <div wire:loading wire:target="photo1">Uploading... @error('photo1') <span class="error  ">{{ $message }}</span> @enderror</div>
  
  <span  onclick="imagefile1.click()" class="btn fa  fa-upload text-success   "   >   </span>
  @if ($photo1)
  photo1 Preview:
  <div class="row">
      
      <div class="col-3 card me-1 mb-1">
          {{ $imgname}}
          <img src="{{ $photo1->temporaryUrl() }}">
        
      </div>
      
  </div>
@endif
</form>
$chekme== {{$chekme}}
<br>
$searchresultscount={{$searchresultscount}}


<div class="row">
    <span 	  wire:click='saveimg({{ $userid }})' onclick="imagefile11.click()"  class="btn fa  fa-upload   "   >   </span>
class="d-none"
  <input type="file" wire:model="photo1" id="imagefile11"    accept="image/png, image/gif, image/jpeg" >
  <div wire:loading wire:target="photo1">Uploading... @error('photo1') <span class="error  ">{{ $message }}</span> @enderror</div>
      <div class="col-3 card me-1 mb-1">
  @if ($photo1)
  {{ $photosrc }}
          <img src="{{ asset($photosrc)  }}" style="max-width: 150px; ">
           
          {{-- <img src="{{ $photo1->temporaryUrl() }}" style="max-width: 150px; "> --}}
        
photo1 Preview:
@endif
      </div>
  </div>