@extends('admin.master')

@section('body')

    <div class="modal-body">
        <form class="form-horizontal" action="{{route('update')}}" method="post">
            @csrf
            <div class="form-group row">
                <label class="control-label col-md-3">Category Name</label>
                <div class="col-md-9">
                    <input class="form-control" name="category_name" type="text" value="{{$category->category_name}}" placeholder="Category Name">
                    <input type="hidden" name="id" value="{{$category->id}}" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-3"></label>
                <div class="col-md-6">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </div>
        </form>
    @endsection
