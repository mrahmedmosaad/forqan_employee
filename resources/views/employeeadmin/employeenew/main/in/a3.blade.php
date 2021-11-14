{{-- بيانات كما في  الهوية او الاقامة --}}
<div class="container-fluid text-justify" dir="rtl">
    <div class="card bg-light mb-0">
                <div class="card-header p-1"> بيانات كما في  الهوية او الاقامة

                </div>
            <div class="card-body">
                <div class="row">

                                <div class={{ $class }}>
                                    <label>رقم الاقامة </label>
                                    <input class={{ $inputClass }} type="text" name="nationalid"  
                                        autocomplete="off" value="" required 	  wire:model.lazy='nationalid' />		

                                        @error('nationalid') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                <div class={{ $class }}>

                                    
                                    <label> المهنة </label>


                                    <select    class="form-control p-0 m-0 w-100" 
                                    wire:model.lazy='stay_job' 
                                    >
                                     <option  value=""> اختر</option>
                                    @foreach ($listall->where("listdev_id","5") as $item)
                              
                                    <option>{{ $item->list_item_ar }}</option>
                                    @endforeach
                                    
                                  </select>




{{-- 
                                    <input class={{ $inputClass }} type="text" name="stay_job" 
                                        autocomplete="off" value="" required 	  wire:model.lazy='stay_job' />		 --}}

                                        @error('stay_job') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                <div class={{ $class }}>
                                    <label> صاحب العمل</label>


                                    <select    class="form-control p-0 m-0 w-100" 
                                    wire:model.lazy='stay_job_owner' 
                                    >
                                     <option  value=""> اختر</option>
                                    @foreach ($listall->where("listdev_id","6") as $item)
                              
                                    <option>{{ $item->list_item_ar }}</option>
                                    @endforeach
                                    
                                  </select>



                                    {{-- <input class={{ $inputClass }} type="text"   name="job_owner"
                                        value="" 	  wire:model.lazy='job_owner' />		 --}}

                                        @error('stay_job_owner') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                <div class={{ $class }}>
                                    <label  >      تاريخ الاصدار     </label>
                                    <input class={{ $inputClass }} type="date"   name="stay_start_date" value="" 	  wire:model.lazy='stay_start_date' />		

                                    @error('stay_start_date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>


                                <div class={{ $class }}>
                                    <label  >     تاريخ الانتهاء    </label>
                                    <input class={{ $inputClass }} type="date"  name="stay_end_date" value="" 	  wire:model.lazy='stay_end_date' />		

                                    @error('stay_end_date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                
                    
                </div>
            </div>
        </div>
    </div>