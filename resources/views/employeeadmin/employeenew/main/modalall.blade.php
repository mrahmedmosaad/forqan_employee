

<div class="container my-4">
 
    
    
    <section class="border border-light p-3 mb-4">
      <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#centralModal">Medium Modal</button>
      <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#centralModalSm">Small Modal</button>
      <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#centralModalLg">Large Modal</button>
      <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal" data-target="#centralModalFluid">Fluid Modal</button>
    </section>
    
<!-- Central Modal Medium -->
    <div class="modal fade" id="centralModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
            ...
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Central Modal Medium -->

    <!-- Central Modal Small -->
    <div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
            ...
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary btn-sm">Save changes</button>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Central Modal Small -->

    <!-- Central Modal Large -->
    <div class="modal fade" id="centralModalLg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
            ...
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Central Modal Large -->

    <!-- Central Modal Fluid -->
    <div class="modal fade" id="centralModalFluid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-fluid" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalLabel">Modal title</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--Body-->
          <div class="modal-body">
            ...
          </div>
          <!--Footer-->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
    <!-- Central Modal Fluid -->
    
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