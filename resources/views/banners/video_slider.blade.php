<div class="panel">
    <div class="panel-heading">
        <h3 class="panel-title">{{__('Video Slider Information')}}</h3>
    </div>

    <!--Horizontal Form-->
    <!--===================================================-->
    <form class="form-horizontal" action="{{ route('home_banners.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="panel-body">
            <div class="form-group">
                <label class="col-sm-3" for="url">{{__('Title')}}</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="{{__('Title')}}" id="url" name="title" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="url">{{__('Photo URL')}}</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="{{__('URL')}}" id="url" name="photo_link" class="form-control" >
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3" for="url">{{__('Video URL')}}</label>
                <div class="col-sm-9">
                    <input type="text" placeholder="{{__('URL')}}" id="url" name="video_link" class="form-control" >
                </div>
            </div>
            <input type="hidden" name="position" value="{{ $position }}">
            {{-- <div class="form-group">
                <label class="col-sm-3" for="url">{{__('Banner Position')}}</label>
                <div class="col-sm-9">
                    <select class="form-control demo-select2" name="position" required>
                        <option value="1">{{__('Banner Position 1')}}</option>
                        <option value="2">{{__('Banner Position 2')}}</option>
                    </select>
                </div>
            </div> --}}

        </div>
        <div class="panel-footer text-right">
            <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
        </div>
    </form>
    <!--===================================================-->
    <!--End Horizontal Form-->

</div>
