@extends('admin.master')

@section('body')
    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>View Info</h3></label>
                    </div>
                </div>
            </div>
            <div class="tile-body">
                <div class="row">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Company Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        @php($i=1)
                        @foreach($companies as $company)
                        <tbody>
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$company->company_name}}</td>
                            <td>{{$company->email}}</td>
                            <td>{{$company->address}}</td>
                            <td>{{$company->created_at}}</td>
                            <td>
                                <a href="{{route('edit-company',['id'=>$company->id])}}" class="btn btn-success">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a href="{{route('delete-company',['id'=>$company->id])}}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i></a>
                            </td>
                        </tr>

                        </tbody>
                            @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection