<div>
    <div class="text-center">
    {{-- In work, do what you enjoy. --}}

    {{-- ok --}}
    @include('admin.class_sys.style')
    @include('admin.class_sys.class_sys_randlist')
    {{-- <button class="btn button-transparent" data-toggle="collapse" data-target="#demo1">Show Table</button> --}}
<input type="checkbox" name="" id="showall1" value="1" wire:model='showtimetable'>
<label for="showall1">show</label>

{{  $showtimetable}}
      <div class="{{ ($showtimetable==1)? "":"d-none" }}">
        {{-- <button type="submit">show</button> --}}
       @if ($showtimetable==1)
           @include('admin.class_sys.table')
       @endif
      
      </div>

{{-- php artisan make:livewire admin.class_sys.class_sys_reportwire
admin.class_sys.class_sys_reportwire --}}
 

    @include('admin.class_sys.studentlist')
   
    @if ($showtimetable==1)
    @include('admin.class_sys.timeline')
@endif
   
      <div class="bg-danger m-0 p-0"  style="width: 0px;height:0px" id="tl"> </div>
   

  

        
    <a href="#tl"  style="width: 0px;height:0px">aling</a>


 
</div>
</div>


 