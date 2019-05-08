
@extends('admin.master')

@section('body')

    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>Update Company Info</h3></label>

                    </div>
                </div>
            </div>
            <div class="tile-body col-md-8 m-auto">
                <form class="form-horizontal" action="{{route('update-company')}}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="control-label col-md-3">Company Name</label>
                        <div class="col-md-8">
                            <input class="form-control" type="text" value="{{ $company->company_name }}" name="company_name">
                            <input type="hidden" name="id" value="{{$company->id}}" class="form-control">

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Email</label>
                        <div class="col-md-8">
                            <input class="form-control" type="email" name="email" value="{{ $company->email}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Address</label>
                        <div class="col-md-8">
                            <textarea class="form-control" rows="4" name="address" >{{$company->address}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3"></label>
                        <div class="col-md-6">
                            <button class="btn btn-success" name="update" type="submit" value="update">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
