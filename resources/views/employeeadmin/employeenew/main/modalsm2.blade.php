

 
    DELETE
    
  {{-- <img class="svgsm" src="storage/icons/delete.svg" alt="DELETE"  wire:click='SETJOBID()'   data-toggle="modal" data-target="#centralModalSm"  > --}}
  <div class="container my-4"  >
    <section class="border border-light p-3 mb-4">
    {{-- <!-- <img class="svgsm" src="storage/icons/delet.svg" alt="edit"      wire:click='deleteimg({{$item->id}})'> --> --}}
      {{-- <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#centralModalSm">Small Modal</button> --}}
        </section>
     

    <!-- Central Modal Small -->
    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">تأكيد حذف</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
             jobidthis{{$jobidthis}}
          </div>
          <!--Footer-->
          <div class="modal-footer">
    <img class="svgsm" src="storage/icons/delete.svg" alt="edit"    data-dismiss="modal"   wire:click='deleteimg({{$jobidthis}})'>
    {{-- <img class="svgsm" src="storage/icons/delet.svg" alt="edit"    data-dismiss="modal"   wire:click='deleteimg({{$item->id}})'> --}}
<div class="w-25">jobidthis{{$jobidthis}}</div>
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
            <!-- <button type="button" class="btn btn-primary btn-sm">Save changes</button> -->
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Central Modal Small -->
 
    		<hr>

    <p class="font-weight-bold">Alerts - click the buttons below</p>
    
    <!-- Info message -->
<a class="btn btn-info" onclick="toastr.info('Hi! I am info message.');">Info message</a>
<!-- Warning message -->
<a class="btn btn-warning" onclick="toastr.warning('Hi! I am warning message.');">Warning message</a>
<!-- Success message -->
<a class="btn btn-success" onclick="toastr.success('Hi! I am success message.');">Success message</a>
<!-- Error message -->
<a class="btn btn-danger" onclick="toastr.error('Hi! I am error message.');">Error message</a>

  </div>