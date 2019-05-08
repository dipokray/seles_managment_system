

@extends('admin.master')

@section('body')
    <div class="modal fade" id="addQuantity">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>Add Quantity</h3>
                    <button type="button" class="close" data-dismiss="modal" >
                        &Cross;
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" action="" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="control-label col-md-3">Add quantity</label>
                            <div class="col-md-9">
                                <input class="form-control" name="quantity_name" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3"></label>
                            <div class="col-md-6">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="tile">
            <div class="tile-title">
                <div class="row">
                    <div class="col-md-12">
                        <label><h3>quantity List</h3></label>
                        <a href="" data-toggle="modal" class="btn btn-info pull-right" data-target="#addQuantity">Add Quantity</a>
                    </div>
                </div>
            </div>
            <div class="tile-body">
                <div class="row">
                    <table class="table table-hover table-bordered" id="sampleTable">


                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Quantity Name</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                        <tbody>



{{--                        @php($i=1)--}}
{{--                        @foreach($categories as $category)--}}

                            <tr>
                              <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
{{--                        @endforeach--}}


                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection