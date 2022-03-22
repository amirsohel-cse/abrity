@extends('layouts.app')

@section('content')

<div class="col-8 col-offset-2">
    <div class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">{{__('Add Notification')}}</h3>
        </div>

        <!--Horizontal Form-->
        <!--===================================================-->
        <form class="form-horizontal" action="{{ route('notification.store') }}" method="POST" enctype="multipart/form-data">
        	@csrf
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="name">{{__('Notification Type')}}</label>
                    <div class="col-sm-9">
                        <select name="notify_type" required class="form-control demo-select2-placeholder">
                            <option value="all">All</option>
                            <option value="user">User</option>
                            <option value="provider">Provider</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">{{__('Description')}}</label>
                    <div class="col-sm-9">
						<input class="form-control" autocomplete="off"  type="text" value="{{ old('description') }}" name="description" required id="description">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="image">{{__('Image')}}</label>
                    <div class="col-sm-9">
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="status">{{__('Status')}}</label>
                    <div class="col-sm-9">
                        <select name="status" class="form-control demo-select2-placeholder">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
            </div>
        </form>
        <!--===================================================-->
        <!--End Horizontal Form-->

    </div>
</div>

@endsection
