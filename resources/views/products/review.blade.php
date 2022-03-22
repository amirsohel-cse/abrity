@extends('layouts.app')

@section('content')

    <div class="col-lg-6 col-lg-offset-3">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">{{__('Review')}}</h3>
            </div>

            <!--Horizontal Form-->
            <!--===================================================-->

            @if($review != Null)
            <form class="form-horizontal" action="{{ route('products.review.update',$review->id ) }}" method="POST" >
                @csrf
                <input type="hidden" name="product_id" value="{{$product_id}}">
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Ratings')}}</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="rating" value="{{ $review->rating }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">{{__('Comment')}}</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4" name="comment" required>{{$review->comment}}</textarea>
                        </div>
                    </div>

                </div>
                <div class="panel-footer text-right">
                    <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                </div>
            </form>
                @else
                <form class="form-horizontal" action="{{ route('products.review.update',1 ) }}" method="POST" >
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product_id}}">

                    <div class="panel-body">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">{{__('Ratings')}}</label>
                            <div class="col-sm-9">
                                <input type="text" id="name" name="rating" value="" class="form-control" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="name">{{__('Comment')}}</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="4" name="comment" required></textarea>
                            </div>
                        </div>

                    </div>
                    <div class="panel-footer text-right">
                        <button class="btn btn-purple" type="submit">{{__('Save')}}</button>
                    </div>
                </form>
            @endif
            <!--===================================================-->
            <!--End Horizontal Form-->

        </div>
    </div>

@endsection
