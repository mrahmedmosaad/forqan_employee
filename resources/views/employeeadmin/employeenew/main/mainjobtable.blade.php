<table class="table rtl text-right table-hover table-inverse table-responsive">
  <thead class="thead-inverse">
    <tr>
      <th>#<i class="fa fa-eye"></i></th>
      <th>السنة</th>
      <th>الوظيفة</th>
      <th>التخصص</th>
      <th>المدرسة</th>
      <th>المرحلة</th>
      <th> حالة العمل</th>
      <th>تاريخ المباشرة من</th>
      <th>الي</th>
      <th>ملاحظات</th>
      <th> ملف المباشرة </th>
      <th>ملف النقل او التكليف</th>

    </tr>
  </thead>
  <tbody>
    {{-- @if ($datajob!==[] ) --}}

    @if (is_array($datajob) || is_object($datajob))
    @foreach ($datajob as $item)
    <tr>
      <td scope="row">{{ $counter++}}</td>
      <td> {!! $item->jobyear !!}</td>
      <td> {!! $item->job !!}</td>
      <td> {!! $item->job_division !!}</td>
      <td> {!! $item->school !!}</td>
      <td> {!! $item->stage !!}</td>
      <td> {!! $item->job_status !!}</td>
      <td> {!! $item->jobstartdate !!}</td>
      <td> {!! $item->jobfinishdate !!}</td>
      <td> {!! $item->notesjob !!}</td>
      <td>







        <img class="svgsm"
          src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/job'.$item->id.'.png'))?'2':'1'}}.svg"
          alt="" class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgjob{{$item->id}}"
          data-backdrop="static" data-keyboard="false">
        <!-- Central Modal Small -->
        <div wire:ignore class="modal fade" id="myModalfileimgjob{{$item->id}}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <!--Content-->
            <div class="modal-content">
              <!--Header-->
              {{-- <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalfileimgjob{{$item->id}}">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> --}}
              <!--Body-->


              <div class="modal-body">
                <input type="file" name="" id="fileimgjob{{$item->id}}" hidden wire:model='img1'
                  accept="image/png, image/gif, image/jpeg" />
                <img class="svgsm   m-3" src="storage/icons/fileaddimg.svg" alt="fileaddimg"
                  onclick="fileimgjob{{$item->id}}.click()">
                <img class="svgsm  m-3" src="storage/icons/savedata.svg" alt="savedata"
                  wire:click='uploadimg("job{{ $item->id }}")'>
                <hr>
                <img class="svgvsm  m-3" src="storage/icons/view.svg" alt="view"
                  onClick="window.open('storage/images/{{$userid}}/job{{$item->id}}.png');">
                <img class="svgvsm    m-3" src="storage/icons/delete.svg" alt="delete"
                  wire:click='deleteimg("job{{ $item->id }}")'>
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


        <img class="svgsm"
          src="storage/icons/upload{{(Storage::disk('public')->exists('images/'.$userid.'/job2'.$item->id.'.png'))?'2':'1'}}.svg"
          alt="" class="btn btn-primary" data-toggle="modal" data-target="#myModalfileimgjob2{{$item->id}}"
          data-backdrop="static" data-keyboard="false">
        {{--
        <!-- Central Modal Small 22222222222222222222222222222222222222222222222222--> --}}
        <div wire:ignore class="modal fade" id="myModalfileimgjob2{{$item->id}}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <!--Content-->
            <div class="modal-content">
              <!--Header-->
              {{-- <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalfileimgjob{{$item->id}}">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> --}}
              <!--Body-->


              <div class="modal-body">
                <input type="file" name="" id="fileimgjob2{{$item->id}}" hidden wire:model='img1'
                  accept="image/png, image/gif, image/jpeg" />
                <img class="svgsm" src="storage/icons/fileaddimg.svg" alt="fileaddimg"
                  onclick="fileimgjob2{{$item->id}}.click()">
                <img class="svgsm" src="storage/icons/savedata.svg" alt="savedata"
                  wire:click='uploadimg("job2{{ $item->id }}")'>
                <hr>
                <img class="svgvsm" src="storage/icons/view.svg" alt="view"
                  onClick="window.open('storage/images/{{$userid}}/job2{{$item->id}}.png');">
                <img class="svgvsm" src="storage/icons/delete.svg" alt="delete"
                  wire:click='deleteimg("job2{{ $item->id }}")'>
              </div>
              <!--Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                {{-- <button type="button" class="btn btn-primary btn-sm">Save changes</button> --}}
              </div>
            </div>
            {{--
            <!--/.Content--> --}}
          </div>
        </div>
        {{--
        <!-- Central Modal Small 222222222222222222222222222222222222222222--> --}}



      </td>
      <td>
        <img class="svgvsm" src="storage/icons/edit.svg" alt="edit" wire:click='editjob({{$item->id}})'>
      </td>
      <td>
        <img class="svgvsm" src="storage/icons/delete.svg" alt="edit" class="btn btn-primary" data-toggle="modal"
          data-target="#myModalfiledeljob{{$item->id}}" data-backdrop="static" data-keyboard="false">
        {{-- <img class="svgvsm" src="storage/icons/delete.svg" alt="edit" wire:click='deletejob({{$item->id}})'> --}}








        {{--
        <!--Central Modal Small ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd--> --}}
        <div wire:ignore class="modal fade" id="myModalfiledeljob{{$item->id}}" tabindex="-1" role="dialog"
          aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-sm" role="document">
            <!--Content-->
<div class="modal-content">
              <!--Header-->
              {{-- <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalfileimgjob{{$item->id}}">Modal title</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div> --}}
              <!--Body-->

              <div class="modal-body">
                هل انت متاكد من الحذف !!

              </div>
              <!--Footer-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger btn-sm" wire:click='deletejob({{$item->id}})'
                  data-dismiss="modal">Delete</button>
                {{-- <img class="svgvsm" src="storage/icons/delete.svg" alt="edit" wire:click='deletejob({{$item->id}})'
                  data-dismiss="modal"> --}}
              </div>
            </div>
            <!--/.Content-->
          </div>
        </div>
        {{--
        <!-- Central Modal Small dddddddddddddddddddddddddddddddddddddddddddd--> --}}













      </td>



    </tr>

    @endforeach

    @endif
    <tr>


    </tr>
    <tr>
      {{-- edit section --}}
      <td scope="row"></td>
      <td class="  p-0 m-0">

        <select class="form-control p-0 m-0 w-100" wire:model.lazy='jobyear'>

          <option value=""> اختر</option>
          @foreach ($listall->where("listdev_id","26") as $item)

          <option value="{{ $item->list_item_ar }}" {{ ($item->list_item_ar==$listallschoolyear)?"selected":"" }} >{{
            $item->list_item_ar }}</option>
          @endforeach

        </select>
        {{-- <input type="text" class="form-control p-0 m-0 w-100" autocomplete="off" wire:model.lazy='jobyear' /> --}}
        @error('jobyear') <small class="text-danger">{{ $message }}</small> @enderror

      </td>
      <td class="  p-0 m-0">

        <select class="form-control p-0 m-0 w-100" wire:model.lazy='jobname'>
          <option value=""> اختر</option>
          @foreach ($listall->where("listdev_id","5") as $item)

          <option>{{ $item->list_item_ar }}</option>
          @endforeach

        </select>

        {{-- <input type="text" class="form-control p-0 m-0 w-100" autocomplete="off" required
          wire:model.lazy='jobname' /> --}}
        @error('jobname') <small class="text-danger">{{ $message }}</small> @enderror

      <td class="  p-0 m-0">


        <select class="form-control p-0 m-0 w-100" wire:model.lazy='job_division'>
          <option value=""> اختر</option>
          @foreach ($listall->where("listdev_id","20") as $item)

          <option>{{ $item->list_item_ar }}</option>
          @endforeach

        </select>
        {{-- <input type="text" class="form-control p-0 m-0 w-100" autocomplete="off" required
          wire:model.lazy='job_division' /> --}}
        @error('job_division') <small class="text-danger">{{ $message }}</small> @enderror

      </td>

      <td class="  p-0 m-0">



        <select class="form-control p-0 m-0 w-100" wire:model.lazy='school'>
          <option value=""> اختر</option>
          @foreach ($listall->where("listdev_id","7") as $item)

          <option>{{ $item->list_item_ar }}</option>
          @endforeach

        </select>


        {{-- <input class="form-control p-0 m-0 w-100" type="text" name="school" wire:model.lazy='school' /> --}}

        @error('school') <small class="text-danger">{{ $message }}</small> @enderror

      </td>

      <td class="  p-0 m-0">


        <select class="form-control p-0 m-0 w-100" wire:model.lazy='stage'>
          <option value=""> اختر</option>
          @foreach ($listall->where("listdev_id","12") as $item)

          <option>{{ $item->list_item_ar }}</option>
          @endforeach

        </select>

        {{-- <input class="form-control p-0 m-0 w-100" type="text" name="stage" wire:model.lazy='stage' /> --}}

        @error('stage') <small class="text-danger">{{ $message }}</small> @enderror

      </td>

      <td class="  p-0 m-0">
        {{-- {{$job_status}} --}}
        <select class="form-control p-0 m-0 w-100" wire:model.lazy='job_status'>
          <option value=""> اختر</option>
          @foreach ($listall->where("listdev_id","22") as $item)

          <option>{{ $item->list_item_ar }}</option>
          @endforeach

        </select>
        @error('job_status') <small class="text-danger">{{ $message }}</small> @enderror
      </td>



      <td class="  p-0 m-0">
        <input class="form-control p-0 m-0 w-100" type="date" name="jobstartdate" wire:model.lazy='jobstartdate' />

        @error('jobstartdate') <small class="text-danger">{{ $message }}</small> @enderror

      </td>

      <td class="  p-0 m-0">
        <input class="form-control p-0 m-0 w-100" type="date" name="jobfinishdate" wire:model.lazy='jobfinishdate' />

        @error('jobfinishdate') <small class="text-danger">{{ $message }}</small> @enderror

      </td>
      <td class="  p-0 m-0">
        <input class="form-control p-0 m-0 w-100" type="text" wire:model.lazy='notesjob' />

        @error('notesjob') <small class="text-danger">{{ $message }}</small> @enderror


      </td>

      <td class="  p-0 m-0">
        {{-- <div class="form-group"> --}}

          <select wire:model.lazy='jobactive' class="form-control p-0 m-0 w-100">
            <option value="1" selected>نشط</option>
            <option value="0">غير نشط </option>

          </select>
          @error('jobactive') <small class="text-danger">{{ $message }}</small> @enderror
          {{--
        </div> --}}

        {{--
        <input type="checkbox" wire:model.lazy='jobactive'> --}}


      </td>

      <td>


        <img class="svgvsm" src="storage/icons/savedata.svg" alt="edit"
          wire:click='insrteditjob({{ ($jobeditmood==0)?$userid:$jobid}})'>
        {{-- jobeditmood{{$jobeditmood}} --}}
        {{-- <br> --}}
        {{-- userid{{$userid}}:jobid{{$jobid}} --}}

      </td>

      <td>

        <img class="svgvsm" src="storage/icons/cancel.svg" alt="edit" wire:click='cleartxtjob()'>
      </td>


    </tr>


  </tbody>
</table>

