<div  >
    {{-- <button wire:click='msg'>msg</button> --}}
    {{-- @include('employeeadmin.employeenew.main.search3') --}}
{{-- @include('employeeadmin.employeenew.main.flashmsg') --}}
 
{{-- @toastr_css --}}


{{-- <input type="file" id="fileimg1" wire:model='img1'> --}}
 



{{-- <button onclick="fileimg1.click()" wire:click='uploadimg'>up</button>
<button wire:click='deleteimg(2)'>delimg</button> --}}
{{-- <img src="/storage/images/1.png" /> --}}

{{-- @if  (Storage::disk('public')->exists('/images/2.png'))
    <div class="bg-success">
    <img class="svgsm" src="storage/icons/fileaddimg.svg" alt="edit"     onclick="fileimg1.click()">
<img class="svgsm" src="storage/icons/savedata.svg" alt="edit"      wire:click='uploadimg'>
<img class="svgsm" src="storage/icons/view.svg" alt="edit"      >
<img class="svgsm" src="storage/icons/filedelet.svg" alt="edit"      wire:click='deleteimg(2)'>
<img class="svgsm" src="storage/icons/check.svg" alt="edit"       >

</div>
<img src="{{ asset('/storage/images/2.png?'.  now()) }}" width="122px">
@else
    <div class=" ">
    <img class="svgsm" src="storage/icons/fileaddimg.svg" alt="edit"     onclick="fileimg1.click()">
<img class="svgsm" src="storage/icons/savedata.svg" alt="edit"      wire:click='uploadimg'>
<img class="svgsm" src="storage/icons/view.svg" alt="edit"      >
{{-- <img src="{{ asset('/storage/images/2.png?'.  now()) }}" width="122px">  
</div>
@endif --}}
{{-- <img src="{{ url('/storage/images/1.png') }}">
<img src="{{ URL::asset('/storage/images/1.png') }}"> --}}
{{-- <br> --}}
 
 


@include('employeeadmin.employeenew.main.1')
{{-- check if user found --}} 
<!-- #region(collapsed) [NAME] -->
{{-- <img src="/icon/view.svg" alt="" sizes="" srcset=""> --}}
 {{-- <div class="iconview">dddd</div> --}}
 

{{-- session()->flash --}}


{{-- session()->flash --}}
<br>
{{-- {{$found}} --}}
{{-- @if ($chekme==1)

@else
$chekme== {{$chekme}}

@endif --}}



{{-------------------------------------- alerts  errors --}}
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Sorry!</strong> invalid input.<br><br>
        <ul style="list-style-type:none;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif           
{{-------------------------------------- alerts  errors --}}
        

        
        @if ($newrecord==1)
        <div class="w-100" style="background-color: rgba(218, 214, 214, 0.603)" >
        @include('employeeadmin.employeenew.main.2')
          </div>
        @endif


        
{{-- 
            @if ($loading==1)
               <span>Looding<span class="   fa fa-spinner fa-spin    text-success"></span></span> 
            @endif
                @if ($saving==1)
                <span>جاري الحفظ<span class="   fa fa-spinner fa-spin    text-success"></span></span> 
    
            @endif    
                    @if ($savingnew==1)
                    <span>جاري حفظ التعديل<span class="   fa fa-spinner fa-spin    text-success"></span></span> 
    
            @endif
            @if ($done==1)
                    <span>تم الحفظ  <span class="   fa  fa-solid fa-check-double    text-success"></span></span> 
    
            @endif
            
   
        </div> --}}
 
       