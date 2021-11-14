{{-- addressfile2 ================================================= --}}

<img class="svgsm" src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/addressfile2.png'))?'2':'1'}}.svg" alt="" class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgaddressfile2" data-backdrop="static" data-keyboard="false">
<!-- Central Modal Small -->
<div wire:ignore class="modal fade" id="myModalfileimgaddressfile2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      {{-- <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalfileimgaddressfile2">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}
      <!--Body-->


      <div class="modal-body">
        <input type="file" name="" id="fileimgaddressfile2" hidden wire:model='img1' accept="image/png, image/gif, image/jpeg" />
        <img class="svgsm   m-3" src="storage/icons/fileaddimg.svg" alt="fileaddimg" onclick="fileimgaddressfile2.click()">
        <img class="svgsm  m-3" src="storage/icons/savedata.svg" alt="savedata" wire:click='uploadimg("addressfile2")'>
        <hr>
        <img class="svgvsm  m-3" src="storage/icons/view.svg" alt="view" onClick="window.open('storage/images/{{$userid}}/addressfile2.png');">
        <img class="svgvsm    m-3" src="storage/icons/delete.svg" alt="delete" wire:click='deleteimg("addressfile2")'>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        {{-- <button type="button" class="btn btn-primary btn-sm">Save changes</button> --}}
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Small -->

{{-- addressfile2 ================================================= --}}


<select wire:model.lazy='job' class="form-control p-0 m-0 w-100">
  <option value=""> اختر</option>
  @foreach ($listall->where("listdev_id","22") as $item)
  <option>{{ $item->list_item_ar }}</option>
  @endforeach
</select>