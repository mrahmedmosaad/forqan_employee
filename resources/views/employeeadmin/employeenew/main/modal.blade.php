
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  <img class="svgsm" src="storage/icons/filedelet.svg" alt="edit"      data-toggle="modal" data-target="#exampleModal" >
  {{-- <img class="svgsm" src="storage/icons/filedelet.svg" alt="edit"      wire:click='deleteimg({{$item->id}})'> --}}
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="text-center w-100">

            <h5 class="     "  >ssssswwttt</h5>
          </div>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer text-center">
  {{-- <img class="svgsm" src="storage/icons/filedelet.svg" alt="edit"      wire:click='deleteimg({{$item->id}})'  > --}}
  <img class="svgsm" src="storage/icons/filedelet.svg" alt="edit"   data-dismiss="modal"    wire:click='deleteimg(5)'  >
<div class="w-25"></div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">cancel</button>
          {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
        </div>
      </div>
    </div>
  </div>