@extends('students.layout')
@section('content')
<div class="container">
    <div class="row" style="margin: 20px;">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>Laravel 9 Crud ( Create, Read, Update and Delete)</h2>
                </div>
                <div class="card-body">
                    <a href="" class="btn btn-success btn-sm" title="add new student">
                        Add New Student
                    </a>
                    <br>
                    <table class="table table-bordered table-striped mt-3">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>USA</td>
                                <td>123456789</td>
                                <td>
                                    <a href="" class="btn btn-info btn-sm" title="view student">
                                       <i class="fa fa-eye" aria-hidden="true"></i>
                                        View
                                    </a>
                                    
                                    <a href="" class="btn btn-primary btn-sm" title="edit student">
                                       <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Edit
                                    </a>
                                    <a href="" class="btn btn-danger btn-sm" title="delete student">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection