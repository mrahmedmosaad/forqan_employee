<div class="container-fluid text-justify" dir="rtl">
  <div class="card bg-light mb-0">
    <div class="card-header  bg-primary p-1 text-light">بيانات اساسية </div>
    <div class="card-body">
      <div class="row">



                    <div class={{ $class }}>
                      <div class="form-group">
                        <label for="name_ar"> <span class="font-weight-bold">الاسم</span> - عربي</label> <small class="text-muted font-xs">كما في جواز السفر او الاقامة او الهوية </small>
                        <input  autocomplete="off" wire:model='name_ar'   class={{ $inputClass }} type="text" name="name_ar"   autocomplete="off"   style="min-width: 350px">
                        @error('name_ar') <small class="text-danger">{{ $message }}</small> @enderror
                      </div>
                      
                      

                      

                    </div>
                    <div class={{ $class }}>
                      <div class="form-group">
                        <label for="name_en"> <span class="font-weight-bold">الاسم</span> - English </label><small class="text-muted"> كما في جواز السفر او الاقامة او الهوية </small>
                        <input  autocomplete="off" wire:model='name_en' class={{ $inputClass }} type="text" name="name_en"    style="min-width: 350px">
                        @error('name_en') <small class="text-danger">{{ $message }}</small> @enderror
                      </div>
                    </div>

                    {{-- <div class="row"> --}}


                    
                    <div class={{ $class }}>
                      <label for="gender">النوع </label>
                      <select class={{ $inputClass }} name="gender" style="max-width: 150px"   required  wire:model.lazy='gender' >
                        <option value="">اختر</option>
                        <option value="ذكر"> ذكر</option>
                        <option value="انثي"> انثى</option>
                      </select>





                      @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>


                    <div class={{ $class }}>
                      <div class="form-group">
                        <label for="nationality">الجنسية</label>
                        <select class={{ $inputClass }} name="nationality"    style="max-width: 150px"  wire:model.lazy='nationality'>
<option value="">اختر</option>
                          @foreach ($listall->where('listdev_id', '=', 8) as $listalla)
                          <option value="{{ $listalla->list_item_ar }}">{{ $listalla->list_item_ar }}</option>
                          @endforeach

                        </select>
                        @error('nationality') <small class="text-danger">{{ $message }}</small> @enderror
                      </div>
                    </div>

                  {{-- </div> --}}
        </div>
        
        <div class="row">



          <div class={{ $class }}>
            {{-- -------------------------------------- --}}
            <div class="form-group">
              <label> البريد الالكتروني</label>
              <input  autocomplete="off" class={{ $inputClass }} type="email" name="email"style="min-width: 350px"  onkeyup="ValidateEmail(this.value)"   wire:model='email'   />
              @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
          </div>


                    <div class={{ $class }}>
                      <div class="form-group">
                        <label> تاريخ الميلاد </label>
                        <input  autocomplete="off" class={{ $inputClass }} type="date" max="" name="birth_date"  id="birth_date"   onchange="ageCalc_me(this.value,'message_birth','birth_calc_me1')"  wire:model.lazy='birth_date' />
                        <span id="message_birth"  style="padding: 1px;color: yellow;background-color: green;font-size: 12px"> 
                          العمر:    <span id="birth_calc_me1" class="birth_calc"    style="padding: 1px;color: yellow;background-color: green;font-size: 12px">
                            
                            {{-- - يوم -    شهر - سنة --}}
                        
                        
                        {{-- {{ \Carbon\Carbon::parse($birth_date)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days');}} --}}
                        {{ \Carbon\Carbon::parse($birth_date)->diff(\Carbon\Carbon::now())->format('%y سنة -  %m شهر - %d يوم');}}
                        
                        </span> </span>
                      @error('birth_date') <small class="text-danger">{{ $message }}</small> @enderror
                      </div>
                    </div>
                    <div class={{ $class }}>
                      <label> تاريخ بداية اول عمل بالمنظومة </label>
                      <input  autocomplete="off" 	  wire:model.lazy='job_start_date'  class={{ $inputClass }} type="date"  
                          autocomplete="off"  required>
                          @error('job_start_date') <small class="text-danger">{{ $message }}</small> @enderror
                  </div>

                  <div class={{ $class }}>
                    <div class="form-group">
                      <label>رقم الجوال السعودي </label>
                      <input  autocomplete="off" class={{ $inputClass }} type="number"  name="mobile1"  required maxlength="10"      placeholder="05xxxxxxxx" onkeypress="return isnumber_only(event)"  wire:model.lazy='mobile1' />
                        @error('mobile1') <small class="text-danger">{{ $message }}</small> @enderror
                      </div>
                    </div>
                    <div class={{ $class }}>
                      <div class="form-group">
                        <label>رقم الجوال الدولي </label>
                        <input  autocomplete="off" class={{ $inputClass }} type="number"  name="mobile2"  required maxlength="10"      placeholder="05xxxxxxxx" onkeypress="return isnumber_only(event)"  wire:model.lazy='mobile1' />
                          @error('mobile2') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>
                      </div>
                      

                  <div class={{ $class }}>
                    <label> رقم الواتس آب </label>
                    <input  autocomplete="off" class={{ $inputClass }} type="number" name="mobile_whats"   autocomplete="off"   wire:model.lazy='mobile_whats' >
                      @error('mobile_whats') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    



                </div>
<div class="row">


                  <div class={{ $class }}>
                    <div class="form-group">
                      <label>  العنوان الحالي </label>
                      <input  autocomplete="off"    wire:model.lazy='address_current' class={{ $inputClass }} type="text" name="address_current" value=" " autocomplete="off"  
                        required>
                        @error('address_current') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                  </div>
                  <div class={{ $class }}>
                    <div class="form-group row">
                      <div class="col">
                      <label>  استمارة البيانات </label>










                      {{-- addressfile1 ================================================= --}}

                      <img   class="svgsm" src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/addressfile1.png'))?'2':'1'}}.svg" alt=""class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgaddressfile1" data-backdrop="static" data-keyboard="false">
                      <!-- Central Modal Small -->
                      <div wire:ignore  class="modal fade" id="myModalfileimgaddressfile1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <!--Content-->
                          <div class="modal-content">
                            <!--Header-->
                            {{-- <div class="modal-header">
                              <h4 class="modal-title w-100" id="myModalfileimgaddressfile1">Modal title</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div> --}}
                            <!--Body--> 
                            
                            
                            <div class="modal-body" >
                              <input  autocomplete="off" type="file" name="" id="fileimgaddressfile1" hidden  wire:model='img1' accept="image/png, image/gif, image/jpeg" />
                              <img class="svgsm   m-3" src="storage/icons/fileaddimg.svg" alt="fileaddimg"     onclick="fileimgaddressfile1.click()">
                              <img class="svgsm  m-3" src="storage/icons/savedata.svg" alt="savedata"      wire:click='uploadimg("addressfile1")'>
                              <hr>
                              <img class="svgvsm  m-3" src="storage/icons/view.svg" alt="view"     onClick="window.open('storage/images/{{$userid}}/addressfile1.png');"  >
                              <img class="svgvsm    m-3" src="storage/icons/delete.svg" alt="delete"     wire:click='deleteimg("addressfile1")'  >
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
     
                      {{-- addressfile1 ================================================= --}}






















                      {{-- <input  autocomplete="off" class={{ $inputClass }} type="file"  accept="image/png, image/gif, image/jpeg"  name="address_nationalfile1"  > --}}
                      @error('address_nationalfile1') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div class="col">
                        <label>  العنوان الوطني </label>


                        
                      {{-- addressfile2 ================================================= --}}

<img   class="svgsm" src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/addressfile2.png'))?'2':'1'}}.svg" alt=""class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgaddressfile2" data-backdrop="static" data-keyboard="false">
<!-- Central Modal Small -->
<div wire:ignore  class="modal fade" id="myModalfileimgaddressfile2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      
      
      <div class="modal-body" >
        <input    type="file" name="" id="fileimgaddressfile2" hidden  wire:model='img1' accept="image/png, image/gif, image/jpeg" />
        <img class="svgsm   m-3" src="storage/icons/fileaddimg.svg" alt="fileaddimg"     onclick="fileimgaddressfile2.click()">
        <img class="svgsm  m-3" src="storage/icons/savedata.svg" alt="savedata"      wire:click='uploadimg("addressfile2")'>
        <hr>
        <img class="svgvsm  m-3" src="storage/icons/view.svg" alt="view"     onClick="window.open('storage/images/{{$userid}}/addressfile2.png');"  >
        <img class="svgvsm    m-3" src="storage/icons/delete.svg" alt="delete"     wire:click='deleteimg("addressfile2")'  >
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
                        {{-- <input  autocomplete="off" class={{ $inputClass }} type="file"  accept="image/png, image/gif, image/jpeg"  name="address_nationalfile2"  > --}}
                        @error('address_nationalfile2') <small class="text-danger">{{ $message }}</small> @enderror
                      </div>
      
                    </div>
                  </div>




                <div class={{$class}}>
                  {{-- -------------------------------------- --}}
                  <label> notes</label>
                  <input  autocomplete="off"  	  wire:model.lazy='notesmain' class={{$inputClass}} type="text"   name="notesmain" />		
        
                  @error('notesmain') <small class="text-danger">{{ $message }}</small> @enderror
                  {{-- -------------------------------------- --}}
                </div>
              </div>

      
    </div>
  </div>
</div>