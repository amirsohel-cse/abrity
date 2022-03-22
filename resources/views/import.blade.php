@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header" style="padding-right: 10px;padding-left: 10px;margin-right: 20px">
            <p style="padding-right: 100px;font-size: medium">
            The first line in downloaded csv file should remain as it is. Please do not change the order of columns.
            The correct column order is (Product Code, Product Name, Purchase Price, Product Tax, Product Price, Category Code) & you must follow this.
                If you are using any other language then English, please make sure the csv file is UTF-8 encoded and not saved with byte order mark (BOM)
            </p>
        </div>

        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import User Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export Products file</a>
            </form>
        </div>
    </div>
</div>

@endsection
