{{-- بيانات العمل الحالي --}}
<div class="container-fluid text-justify" dir="rtl">
    <div class="card bg-light mb-0">
                <div class="card-header p-1"> بيانات العمل الحالي
<button class="btn btn-primary   hvr-float-shadow" wire:click='viewalljobs(1,{{$userid}})'>عرض الكل</button>
<button class="btn btn   hvr-float-shadow" wire:click='viewalljobs(0,{{$userid}})'> History</button>
                </div>
            <div class="card-body">
 
@include('employeeadmin.employeenew.main.mainjobtable')
{{-- @include('employeeadmin.employeenew.main.modalall')  jobactive    --}}
 
            </div>
        </div>
    </div>