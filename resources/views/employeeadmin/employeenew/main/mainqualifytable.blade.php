{{$dataquaalls}}
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
   {{-- @if ($dataqua!==[] ) --}}
       
   @if (is_array($dataqua) || is_object($dataqua))
   {{-- @endif --}}
       @foreach ($dataqua as $item)

       {{-- @foreach ($collection as $item) --}}
           
       {{-- @endforeach --}}
         <tr>
          <td scope="row">{{ $counter2 ++}}</td>
          <td> {!! $item->qualification !!}</td>
          <td> {!! $item->university !!}</td>
         
          <td> {!! $item->college !!}</td>
          <td> {!! $item->specialization !!}</td>
          <td> {!! $item->percentage !!}</td>
          <td> {!! $item->graduation_year !!}</td>
          <td> {!! $item->rating_me !!}</td>
   
          <td> {!! $item->notesqualify !!}</td>
{{-- 
          "user_id"           => 22
          "qualification"     => "Sit dolor ullamco m"
          "university"        => "Voluptate itaque est"
          "college"           => "Ut vitae quasi nisi "
          "specialization"    => "Dolore minima est in"
          "percentage"        => null
          "graduation_year"   => "2003"
          "rate"              => null
          "notes"             => "Nisi sit ut perspic"



          "user_id" => 22
          "qualification" => "Sit dolor ullamco m"
          "university" => "Voluptate itaque est"
          "college" => "Ut vitae quasi nisi "
          "specialization" => "Dolore minima est in"
          "percentage" => null
          "graduation_year" => "2003"
          "rating_me" => null
          "notesqualify" => "Nisi sit ut perspic" --}}

          {{-- fileimgqua --}}
<td> 

 


                     

 <img   class="svgsm" src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/qua'.$item->id.'.png'))?'2':'1'}}.svg" alt=""class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgqua{{$item->id}}" data-backdrop="static" data-keyboard="false">
    <!-- Central Modal Small -->
    <div wire:ignore  class="modal fade" id="myModalfileimgqua{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
            <input type="file" name="" id="fileimgqua{{$item->id}}" hidden  wire:model='img1' accept="image/png, image/gif, image/jpeg" />
            <img class="svgsm   m-3" src="storage/icons/fileaddimg.svg" alt="fileaddimg"     onclick="fileimgqua{{$item->id}}.click()">
            <img class="svgsm  m-3" src="storage/icons/savedata.svg" alt="savedata"      wire:click='uploadimg("qua{{ $item->id }}")'>
            <hr>
            <img class="svgvsm  m-3" src="storage/icons/view.svg" alt="view"     onClick="window.open('storage/images/{{$userid}}/qua{{$item->id}}.png');"  >
            <img class="svgvsm    m-3" src="storage/icons/delete.svg" alt="delete"     wire:click='deleteimg("qua{{ $item->id }}")'  >
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


                      <img  class="svgsm" src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/qua2'.$item->id.'.png'))?'2':'1'}}.svg" alt="" class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgqua2{{$item->id}}" data-backdrop="static" data-keyboard="false">
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
                              <input type="file" name="" id="fileimgqua2{{$item->id}}" hidden  wire:model='img1' accept="image/png, image/gif, image/jpeg" />
                              <img class="svgsm" src="storage/icons/fileaddimg.svg" alt="fileaddimg"     onclick="fileimgqua2{{$item->id}}.click()">
                              <img class="svgsm" src="storage/icons/savedata.svg" alt="savedata"     wire:click='uploadimg("qua2{{ $item->id }}")'>
                              <hr>
                              <img class="svgvsm" src="storage/icons/view.svg" alt="view"     onClick="window.open('storage/images/{{$userid}}/qua2{{$item->id}}.png');"  >
                              <img class="svgvsm" src="storage/icons/delete.svg" alt="delete"     wire:click='deleteimg("qua2{{ $item->id }}")'  >
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
                      
                     <img class="svgvsm" src="storage/icons/edit.svg" alt="edit"    wire:click='editqua({{$item->id}})' >
 
                  </td>
                   <td>
 
  <img class="svgvsm" src="storage/icons/delete.svg" alt="edit"   
  class="btn btn-primary" data-toggle="modal" data-target="#myModalfiledelqua{{$item->id}}" data-backdrop="static" data-keyboard="false">  
  {{-- <img class="svgvsm" src="storage/icons/delete.svg" alt="edit"     wire:click='deletequa({{$item->id}})'  > --}}









 {{-- <!--Central Modal Small ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd--> --}}
 <div wire:ignore  class="modal fade" id="myModalfiledelqua{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        {{-- <h4 class="modal-title w-100" id="myModalfileimgqua{{$item->id}}">Modal title</h4> --}}
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
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
    <td  class="  p-0 m-0">

      <select wire:model.lazy='qualification' class="form-control p-0 m-0 w-100">
        <option value=""> اختر</option>
        @foreach ($listall->where("listdev_id","1") as $item)
        <option>{{ $item->list_item_ar }}</option>
        @endforeach
      </select>
  
        {{-- <input  type="text"   class="form-control p-0 m-0 w-100" autocomplete="off" 	  wire:model.lazy='qualification' />		 --}}
        @error('qualification') <small class="text-danger">{{ $message }}</small> @enderror
       
    </td>
    <td  class="  p-0 m-0">

      <select wire:model.lazy='university' class="form-control p-0 m-0 w-100">
        <option value=""> اختر</option>
        @foreach ($listall->where("listdev_id","2") as $item)
        <option>{{ $item->list_item_ar }}</option>
        @endforeach
      </select>

      {{-- <input   type="text"  class="form-control p-0 m-0 w-100"  autocomplete="off"  required 	  wire:model.lazy='university' />		 --}}
      @error('university') <small class="text-danger">{{ $message }}</small> @enderror
   
    <td  class="  p-0 m-0">
      <select wire:model.lazy='college' class="form-control p-0 m-0 w-100">
        <option value=""> اختر</option>
        @foreach ($listall->where("listdev_id","3") as $item)
        <option>{{ $item->list_item_ar }}</option>
        @endforeach
      </select>
   
      {{-- <input type="text"   class="form-control p-0 m-0 w-100"  autocomplete="off"  required 	  wire:model.lazy='college' />		 --}}
      @error('college') <small class="text-danger">{{ $message }}</small> @enderror
     
    </td>
    
    <td  class="  p-0 m-0">

      <select wire:model.lazy='specialization' class="form-control p-0 m-0 w-100">
        <option value=""> اختر</option>
        @foreach ($listall->where("listdev_id","4") as $item)
        <option>{{ $item->list_item_ar }}</option>
        @endforeach
      </select>

      {{-- <input  class="form-control p-0 m-0 w-100" type="text" 	  wire:model.lazy='specialization' />		 --}}
                
      @error('specialization') <small class="text-danger">{{ $message }}</small> @enderror
  
    </td>
        <td  class="  p-0 m-0">
      <select wire:model.lazy='percentage' class="form-control p-0 m-0 w-100">
        <option value=""> اختر</option>
        @foreach ($listall->where("listdev_id","24") as $item)
        <option>{{ $item->list_item_ar }}</option>
        @endforeach
      </select>
      {{-- <input  class="form-control p-0 m-0 w-100" type="text"    	  wire:model.lazy='percentage' />		 --}}
                
      @error('percentage') <small class="text-danger">{{ $message }}</small> @enderror
  
    </td>
    <td  class="  p-0 m-0">
      <select wire:model.lazy='graduation_year' class="form-control p-0 m-0 w-100">
        <option value=""> اختر</option>
       {{ $cur_year = date('Y') }}
         @for ($i=70; $i>=0; $i --)  
        <option value="{{$cur_year-$i }}"> {{$cur_year - $i}}</option>

            {{-- echo $cur_year++ . ','; --}}
         {{-- @for ($i = 0; $i < $count; $i++) --}}
             
         @endfor  



{{-- 
        @foreach ($listall->where("listdev_id","22") as $item)
        <option>{{ $item->list_item_ar }}</option>
        @endforeach
      </select>
      {{-- <input  class="form-control p-0 m-0 w-100" type="text"    	  wire:model.lazy='graduation_year' />		 --}}
     
      @error('graduation_year') <small class="text-danger">{{ $message }}</small> @enderror
  
    </td>
    
    <td  class="  p-0 m-0"  >
       <select    class="form-control p-0 m-0 w-100" 
      wire:model.lazy='rating_me' 
      >
       <option  value=""> اختر</option>
      @foreach ($listall->where("listdev_id","18") as $item)

      <option>{{ $item->list_item_ar }}</option>
      @endforeach
      
    </select>
    @error('rating_me') <small class="text-danger">{{ $message }}</small> @enderror
       </td>
    

    
    <td  class="  p-0 m-0">
      <input    class="form-control p-0 m-0 w-100" type="text"    	  wire:model.lazy='notesqualify' />		
                
      @error('notesqualify') <small class="text-danger">{{ $message }}</small> @enderror
  
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
 
  