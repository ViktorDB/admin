@extends('layouts.office')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Striped Table with Hover</h4>
                            <p class="category">Here is a subtitle for this table</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                            <table class="table table-striped">
                                <thead>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Password</th>
                                <th>Photos</th>
                                <th>Following</th>
                                <th>Followers</th>
                                </thead>
                                <tbody>

                                @foreach ($users as $user)
                                    <tr>
                                        <td><?= $user["id"]; ?></td>
                                        <td><?= $user["username"]; ?></td>
                                        <td><?= $user["email"]; ?></td>
                                        <td><?= $user["firstname"]; ?></td>
                                        <td><?= $user["lastname"]; ?></td>
                                        <td><?= $user["password"]; ?></td>
                                        <td><a class="btn" href="">Photos</a></td>
                                        <td><a class="btn" href="">Following</a></td>
                                        <td><a class="btn" href="">Followers</a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection