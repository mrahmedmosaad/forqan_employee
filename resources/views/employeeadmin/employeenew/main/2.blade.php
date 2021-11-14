{{-- resources\views\employeeadmin\employeenew\main\2.blade.php --}}
{{-- <form id="formedit" class="text-justify" action="{{ url('/newuser')}}" method="POST"> --}}
    
    {{-- <form wire:submit.prevent="submit" class="w-100"> --}}
    {{-- @csrf --}}
            <?php
            // "form-input basic round"
            $class="col-lg  p-0 m-0 hvr-back-pulse form-input basic";
            $inputClass="form-control  p-0 m-0 form-control-sm form-input basic round";
            ?>


{{-- بيانات اساسية --}}
@include('employeeadmin.employeenew.main.in.a1')
 <div style="padding: 3px;width:100% " ></div>
    {{-- بيانات كما في جواز السفر class="bg-danger"--}}
@include('employeeadmin.employeenew.main.in.a2')<div style="padding: 3px;width:100%"></div> 
    {{-- >بيانات خاصة بالاقامة  --}}
@include('employeeadmin.employeenew.main.in.a3') <div style="padding: 3px;width:100%"></div>
{{-- >بيانات خاصة بدولة القدوم --}}
@include('employeeadmin.employeenew.main.in.a4') <div style="padding: 3px;width:100%"></div>

@include('employeeadmin.employeenew.main.in.acount') <div style="padding: 3px;width:100%"></div> 

<button type="button" class="btn btn-primary btn-lg p-2 w-100"  wire:click='editsave({{$userid}})' wire:dirty.attr="disabled" > حفظ التعديل </button>
{{-- @if ($newusermood==0)
    
@else
<button type="button" class="btn btn-danger btn-lg p-2 w-100"  wire:click='creatme' wire:dirty.attr="disabled" > حفظ جديد </button>
    
@endif --}}

{{-- بيانات العمل الحالي --}}
@include('employeeadmin.employeenew.main.in.a5') <div style="padding: 3px;width:100%"></div>
    {{-- job --}}
{{-- @include('employeeadmin.employeenew.main.in.a6') <div style="padding: 3px;width:100%"></div> --}}
{{-- Qualification --}}
@include('employeeadmin.employeenew.main.in.a7') <div style="padding: 3px;width:100%"></div> 
@include('employeeadmin.employeenew.main.in.a8') <div style="padding: 3px;width:100%"></div> 

{{-- ======end==========بيانات=========================================== --}}
 


{{-- <button type="button" class="btn btn-primary btn-lg p-2 w-100" wire:click='createnew' >انشاء جديد</button> --}}
{{-- 


<style>
        #hideMe:hover {
            width:0;
        height:0;
        overflow:hidden;
            overflow:hidden;

        }
    #hideMe {
    -moz-animation: cssAnimation 0s ease-in 2s forwards;
    /* Firefox */
    -webkit-animation: cssAnimation 0s ease-in 2s forwards;
    /* Safari and Chrome */
    -o-animation: cssAnimation 0s ease-in 2s forwards;
    /* Opera */
    animation: cssAnimation 0s ease-in 2s forwards;
    -webkit-animation-fill-mode: forwards;
    animation-fill-mode: forwards;
}
@keyframes cssAnimation {
    to {
        width:0;
        height:0;
        overflow:hidden;
    }
}
@-webkit-keyframes cssAnimation {
    to {
        width:0;
        height:0;
        visibility:hidden;
    }
}
</style> --}}
  

  {{-- <div class="flash-message  "  >
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))
      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
      @endif
    @endforeach
  </div> --}}
   {{-- <br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br> --}}

{{-- <button type="button" class="btn btn-primary btn-lg p-2 w-100" wire:click='createnew' >انشاء جديد</button> --}}

{{-- <div class="card bg-light mb-0">
    <div class="card-header p-1 d-flex justify-content-center"> 
       <button type="submit" class="btn btn-primary btn-lg p-2 w-100"  wire:click='submit'> حفظ البيانات واستكمال</button>  
<button type="button" class="btn btn-primary btn-lg p-2 w-100" >حفظ الحالي وانشاء جديد</button>
 
    </div></div> --}}
    {{-- <div class="card-body">
      <div class="row"> --}}

{{-- </form> --}}