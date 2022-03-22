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
        <h3 class="panel-title pull-left pad-no">{{__('Contact Us')}}</h3>
        <div class="pull-right clearfix">
            <form class="" id="sort_categories" action="" method="GET">
                <div class="box-inline pad-rgt pull-left">
                    <div class="" style="min-width: 200px;">
                        <input type="text" class="form-control" id="search" name="search"@isset($sort_search) value="{{ $sort_search }}" @endisset placeholder=" Type name & Enter">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-striped res-table mar-no" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Email')}}</th>
                    <th>{{__('Mobile')}}</th>
                    <th>{{__('Message')}}</th>
                    <th width="10%">{{__('Options')}}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $key => $contact)
                    <tr>
                        <td>{{ ($key+1) + ($contacts->currentPage() - 1)*$contacts->perPage() }}</td>
                        <td>{{__($contact->name)}}</td>
                        <td>{{__($contact->email)}}</td>
                        <td>{{__($contact->phone)}}</td>
                        <td>{{__($contact->comments)}}</td>

                        <td>
                            <div class="btn-group dropdown">
                                <button class="btn btn-primary dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                                    {{__('Actions')}} <i class="dropdown-caret"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('contact_us.show', encrypt($contact->id))}}">{{__('View')}}</a></li>
                                    <li><a onclick="confirm_modal('{{route('contact_us.destroy', $contact->id)}}');">{{__('Delete')}}</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="clearfix">
            <div class="pull-right">
                {{ $contacts->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection
