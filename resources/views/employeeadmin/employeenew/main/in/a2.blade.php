{{-- بيانات كما في جواز السفر --}}
<div class="container-fluid text-justify" dir="rtl">
    <div class="card bg-light mb-0">
                <div class="card-header p-1"> بيانات كما في جواز السفر

                </div>
            <div class="card-body">
                <div class="row">

                                <div class={{ $class }}>
                                    <label>رقم جواز السفر </label>
                                    <input  wire:model.lazy='passport_number'  class={{ $inputClass }} type="text" name="passport_number"  
                                        autocomplete="off" value="" required>
                                        @error('passport_number') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                <div class={{ $class }}>
                                    <label> الوظيفة </label>


                                    <select    class="form-control p-0 m-0 w-100" 
                                    wire:model.lazy='passport_job' 
                                    >
                                     <option  value=""> اختر</option>
                                    @foreach ($listall->where("listdev_id","5") as $item)
                              
                                    <option>{{ $item->list_item_ar }}</option>
                                    @endforeach
                                    
                                  </select>


                                    {{-- <input class={{ $inputClass }} type="text" name="passport_job" id="passport_job"
                                        autocomplete="off" value="" required   wire:model.lazy='passport_job' />		 --}}
                                        @error('passport_job') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                <div class={{ $class }}>
                                    <label> العنوان</label>
                                    <input class={{ $inputClass }} type="text"   name="passport_address"
                                        value="" 	  wire:model.lazy='passport_address' />		

                                        @error('passport_address') <small class="text-danger">{{ $message }}</small> @enderror
                                    </div>

                                <div class={{ $class }}>
                                    <label  >      تاريخ الاصدار     </label>
                                    <input class={{ $inputClass }} type="date" name="passport_start_date" value="" 	  wire:model.lazy='passport_start_date' />		

                                    @error('passport_start_date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>


                                <div class={{ $class }}>
                                    <label  >     تاريخ الانتهاء    </label>
                                    <input class={{ $inputClass }} type="date"   name="passport_end_date" value="" 	  wire:model.lazy='passport_end_date' />		

<span

class="bg-{{(\Carbon\Carbon::parse($passport_end_date)> \Carbon\Carbon::now())?"success":"danger"}}"

>

                         {{ \Carbon\Carbon::parse($passport_end_date)->diff(\Carbon\Carbon::now())->format('%y سنة -  %m شهر - %d يوم') }}
 
</span>

                                    @error('passport_end_date') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>
                                
                    
                </div>
            </div>
        </div>
    </div>