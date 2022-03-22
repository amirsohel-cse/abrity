@extends('layouts.app')

@section('content')

    {{--<div class="row">--}}
    {{--    <div class="col-sm-12">--}}
    {{--        <a href="{{ route('blogcategories.create')}}" class="btn btn-rounded btn-info pull-right">{{__('Add New Category')}}</a>--}}
    {{--    </div>--}}
    {{--</div>--}}

    <br>

    <!-- Basic Data Tables -->
    <!--===================================================-->
    <div class="panel">
        <div class="panel-heading bord-btm clearfix pad-all h-100">
            <h3 class="panel-title pull-left pad-no">{{__('Contact Details')}}</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">

                <tbody>

                    <tr>
                        <td>First Name : </td>
                        <td>{{__($contact->name)}}</td>
                    </tr>

                    <tr>
                        <td>Email : </td>
                        <td>{{__($contact->email)}}</td>
                    </tr>

                    <tr>
                        <td>Mobile : </td>
                        <td>{{__($contact->phone)}}</td>
                    </tr>

                    <tr>
                        <td>Message : </td>
                        <td>{{__($contact->comments)}}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection
