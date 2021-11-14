
<table class="table rtl text-right table-hover table-inverse table-responsive">
    <thead class="thead-inverse">
      <tr>
        <th>#</th>
        <th>المؤهل</th>
        <th>الجامعة</th>
         <th>الكلية</th>
        <th>التخصص</th>
        <th>النسبة « ٪ »</th>
        <th>عام</th>
         <th>التقدير</th>
         
        <th>ملاحظات</th>
        <th> ملف   </th>
        
        
      </tr>
      </thead>
      <tbody>
   @if ($dataqualify!==[] )
       
  
       @foreach ($dataqualify as $item)
       {{-- @foreach ($datajob as $item) --}}
         <tr>
                   <td scope="row">{{ $counter2++}}</td>
                   <td> {!! $item->qualification !!}</td>
                   <td> {!! $item->university !!}</td>
                  
                   <td> {!! $item->college !!}</td>
                   <td> {!! $item->specialization !!}</td>
                   <td> {!! $item->graduation_year !!}</td>
                   <td> {!! $item->rating_me !!}</td>
            
                   <td> {!! $item->notesqualify !!}</td>
      
                   <td> 





                     

<img  class="svgsm" src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/job'.$item->id.'.png'))?'2':'1'}}.svg" alt=""class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgqua{{$item->id}}" data-backdrop="static" data-keyboard="false">
    <!-- Central Modal Small -->
    <div wire:ignore class="modal fade" id="myModalfileimgqua{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm" role="document">
        <!--Content-->
        <div class="modal-content">
          <!--Header-->
          {{-- <div class="modal-header">
            <h4 class="modal-title w-100" id="myModalfileimgqua{{$item->id}}">Modal title</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div> --}}
          <!--Body--> 
          
          
          <div class="modal-body" >
            <input type="file" name="" id="fileimgjob{{$item->id}}" hidden  wire:model='img1' accept="image/png, image/gif, image/jpeg" />
            <img class="svgsm" src="storage/icons/fileaddimg.svg" alt="fileaddimg"     onclick="fileimgjob{{$item->id}}.click()">
            <img class="svgsm" src="storage/icons/savedata.svg" alt="savedata"      wire:click='uploadimg({{$item->id}})'>
            <hr>
            <img class="svgvsm" src="storage/icons/view.svg" alt="view"     onClick="window.open('storage/images/{{$userid}}/job{{$item->id}}.png');"  >
            <img class="svgvsm" src="storage/icons/delete.svg" alt="delete"     wire:click='deleteimg({{$item->id}})'  >
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
                     </td>
                    <td>


                      <img  class="svgsm" src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/job2'.$item->id.'.png'))?'2':'1'}}.svg" alt="" class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgqua2{{$item->id}}" data-backdrop="static" data-keyboard="false">
                      {{-- <!-- Central Modal Small 22222222222222222222222222222222222222222222222222--> --}}
                      <div wire:ignore class="modal fade" id="myModalfileimgqua2{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <!--Content-->
                          <div class="modal-content">
                            <!--Header-->
                            {{-- <div class="modal-header">
                              <h4 class="modal-title w-100" id="myModalfileimgqua{{$item->id}}">Modal title</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div> --}}
                            <!--Body--> 
                            
                            
                            <div class="modal-body" >
                              <input type="file" name="" id="fileimgjob2{{$item->id}}" hidden  wire:model='img1' accept="image/png, image/gif, image/jpeg" />
                              <img class="svgsm" src="storage/icons/fileaddimg.svg" alt="fileaddimg"     onclick="fileimgjob2{{$item->id}}.click()">
                              <img class="svgsm" src="storage/icons/savedata.svg" alt="savedata"      wire:click='uploadimg({{'2'.$item->id}})'>
                              <hr>
                              <img class="svgvsm" src="storage/icons/view.svg" alt="view"     onClick="window.open('storage/images/{{$userid}}/job2{{$item->id}}.png');"  >
                              <img class="svgvsm" src="storage/icons/delete.svg" alt="delete"     wire:click='deleteimg({{'2'.$item->id}})'  >
                            </div>
                            <!--Footer-->
                            <div class="modal-footer"> 
                              <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button> 
                              {{-- <button type="button" class="btn btn-primary btn-sm">Save changes</button> --}}
                            </div>
                          </div>
                          {{-- <!--/.Content--> --}}
                        </div>
                      </div>
                      {{-- <!-- Central Modal Small 222222222222222222222222222222222222222222--> --}}
                               


</td>

<td>
                      
                     <img class="svgvsm" src="storage/icons/edit.svg" alt="edit"    wire:click='editjob({{$item->id}})' >
 
                  </td>
                   <td>
 
  <img class="svgvsm" src="storage/icons/delete.svg" alt="edit"   
  class="btn btn-primary" data-toggle="modal" data-target="#myModalfiledelqua{{$item->id}}" data-backdrop="static" data-keyboard="false">  
  {{-- <img class="svgvsm" src="storage/icons/delete.svg" alt="edit"     wire:click='deletequa({{$item->id}})'  > --}}









 {{-- <!-- Central Modal Small ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd--> --}}
 <div wire:ignore class="modal fade" id="myModalfiledelqua{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      {{-- <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalfileimgqua{{$item->id}}">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> --}}
      <!--Body--> 
      
      
      <div class="modal-body" >
       هل انت متاكد من الحذف !!
    
      </div>
      <!--Footer-->
      <div class="modal-footer"> 
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button> 
        <button type="button" class="btn btn-danger btn-sm"   wire:click='deletequa({{$item->id}})'   data-dismiss="modal">Delete</button> 
        {{-- <img class="svgvsm" src="storage/icons/delete.svg" alt="edit"     wire:click='deletequa({{$item->id}})'   data-dismiss="modal"> --}}
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
{{-- <!-- Central Modal Small dddddddddddddddddddddddddddddddddddddddddddd--> --}}
         










 
                  
                  </td>
         
 
           
        </tr>
           
        @endforeach  
       
   @endif
   <tr>
  
    
  </tr>
   <tr>
     {{-- edit section --}}
    <td scope="row"></td>
    <td>
  
        <input  type="text"  class={{ $inputClass }} autocomplete="off" 	  wire:model.lazy='jobyear' />		
        @error('jobyear') <small class="text-danger">{{ $message }}</small> @enderror
       
    </td>
    <td>
      <input   type="text" class={{ $inputClass }}  autocomplete="off"  required 	  wire:model.lazy='jobname' />		
      @error('jobname') <small class="text-danger">{{ $message }}</small> @enderror
   
    <td>
   
      <input type="text"  class={{ $inputClass }}  autocomplete="off"  required 	  wire:model.lazy='job_division' />		
      @error('job_division') <small class="text-danger">{{ $message }}</small> @enderror
     
    </td>
    
    <td>
      <input class={{$inputClass}} type="text" name="school"  	  wire:model.lazy='school' />		
                
      @error('school') <small class="text-danger">{{ $message }}</small> @enderror
  
    </td>
    
    <td>
      <input class={{$inputClass}} type="text"   name="stage"  	  wire:model.lazy='stage' />		
                
      @error('stage') <small class="text-danger">{{ $message }}</small> @enderror
  
    </td>
    
    <td  >{{$job_status}}
      <select   class={{$inputClass}}  
      wire:model.lazy='job_status' 
      >
       <option value=""> اختر</option>
      @foreach ($listall->where("listdev_id","22") as $item)

      <option>{{ $item->list_item_ar }}</option>
      @endforeach
      
    </select>
    @error('job_status') <small class="text-danger">{{ $message }}</small> @enderror
       </td>
    

    
    <td>
      <input class={{$inputClass}} type="date"   name="jobstartdate"  	  wire:model.lazy='jobstartdate' />		
                
      @error('jobstartdate') <small class="text-danger">{{ $message }}</small> @enderror
  
    </td>
    
    <td>
      <input class={{$inputClass}} type="date"   name="jobfinishdate"  	  wire:model.lazy='jobfinishdate' />		
                
      @error('jobfinishdate') <small class="text-danger">{{ $message }}</small> @enderror
  
    </td>
    <td>
        <input class={{$inputClass}} type="text"      	  wire:model.lazy='notesjob' />		
                
        @error('notesjob') <small class="text-danger">{{ $message }}</small> @enderror    


    </td>
  
    <td>
      نشط      <input type="checkbox"  wire:model.lazy='jobactive'>
      @error('jobactive') <small class="text-danger">{{ $message }}</small> @enderror    

          </td>
    
    <td>
  
    
   <img class="svgvsm" src="storage/icons/savedata.svg" alt="edit"    wire:click='insrteditqua({{ ($quaeditmood==0)?$userid:$quaid}})'>
</td>
  
    <td>
    
  <img class="svgvsm" src="storage/icons/cancel.svg" alt="edit"    wire:click='cleartxtqua()'>
    </td>
   
   
   </tr>
  
          
      </tbody>
  </table>
 
  