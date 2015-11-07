@extends('layouts.office')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Users</h4>
                            <p class="category">Get the JSON from all users</p>
                        </div>
                        <div class="content">

                            <div class="footer">
                                <a href="../api/users" class="btn btn-info btn-fill">View</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection