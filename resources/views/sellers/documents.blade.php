@extends('layouts.app')

@section('content')

    <div class="panel">
    	<div class="panel-body">
    		<div class="invoice-masthead">
    			<div class="invoice-text pull-left" >
    				<h3 class="h1 text-thin mar-no  text-primary">{{ __('Documents Details') }}</h3>
    			</div>
    		</div>
            <div class="row">
                <div class="col-md-6">
                    <h3> Trade License</h3>
                    <a target="_blank" href="{{asset($documents->trade_license)}}" download="{{'trade_license'.$documents->name}}">
                        <img src="{{asset($documents->trade_license)}}"  height="300" width="400">
                    </a>
                </div>

                <div class="col-md-6">
                    <h3> NID Front-Side</h3>
                    <a target="_blank" href="{{asset($documents->nid_front)}}" download="{{'nid_front'.$documents->name}}">
                        <img src="{{asset($documents->nid_front)}}"  height="300" width="400">
                    </a>

                </div>

            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3> NID Back-Side</h3>
                    <a target="_blank" href="{{asset($documents->nid_back)}}" download="{{'nid_back'.$documents->name}}">
                        <img src="{{asset($documents->nid_back)}}"  height="300" width="400">
                    </a>
                </div>

            </div>
    </div>
    </div>
@endsection
