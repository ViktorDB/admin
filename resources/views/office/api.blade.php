@extends('layouts.office')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <h2>User</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Get all users</h4>
                            <p class="category"></p>
                        </div>
                        <div class="content">

                            <div class="footer">
                                <a href="../api/users/all" class="btn btn-info btn-fill">View</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Get user by id</h4>
                            <p class="category"></p>
                        </div>
                        <div class="content">

                            {!! Form::open(array('action' => 'ApiController@usersById')) !!}

                            <div class="form-group">
                                {!! Form::label('id', 'id'); !!}
                                {!! Form::text('id', '1', ['class' => 'form-control mb10']); !!}
                                {!! Form::submit('View', ['class' => 'btn btn-info btn-fill']); !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Get user by username</h4>
                            <p class="category"></p>
                        </div>
                        <div class="content">

                            {!! Form::open(array('action' => 'ApiController@usersByUsername')) !!}

                            <div class="form-group">
                                {!! Form::label('username', 'username'); !!}
                                {!! Form::text('username', 'viktordebock', ['class' => 'form-control mb10']); !!}
                                {!! Form::submit('View', ['class' => 'btn btn-info btn-fill']); !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Create user</h4>
                            <p class="category"></p>
                        </div>
                        <div class="content">

                            {!! Form::open(array('action' => 'ApiController@usersCreate')) !!}

                            <div class="form-group">
                                {!! Form::label('username', 'username'); !!}
                                {!! Form::text('username', 'test', ['class' => 'form-control mb10']); !!}

                                {!! Form::label('email', 'email'); !!}
                                {!! Form::text('email', 'test', ['class' => 'form-control mb10']); !!}

                                {!! Form::label('password', 'password'); !!}
                                {!! Form::text('password', 'test', ['class' => 'form-control mb10']); !!}

                                {!! Form::submit('View', ['class' => 'btn btn-info btn-fill']); !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>

            <h2>Followers</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Follow</h4>
                            <p class="category"></p>
                        </div>
                        <div class="content">

                            {!! Form::open(array('action' => 'ApiController@followersFollow')) !!}

                            <div class="form-group">
                                {!! Form::label('user_id', 'user_id'); !!}
                                {!! Form::text('user_id', '1', ['class' => 'form-control mb10']); !!}

                                {!! Form::label('follow_id', 'follow_id'); !!}
                                {!! Form::text('follow_id', '2', ['class' => 'form-control mb10']); !!}

                                {!! Form::submit('View', ['class' => 'btn btn-info btn-fill']); !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Unfollow</h4>
                            <p class="category"></p>
                        </div>
                        <div class="content">

                            {!! Form::open(array('action' => 'ApiController@followersUnfollow')) !!}

                            <div class="form-group">
                                {!! Form::label('user_id', 'user_id'); !!}
                                {!! Form::text('user_id', '1', ['class' => 'form-control mb10']); !!}

                                {!! Form::label('follow_id', 'follow_id'); !!}
                                {!! Form::text('follow_id', '2', ['class' => 'form-control mb10']); !!}

                                {!! Form::submit('View', ['class' => 'btn btn-info btn-fill']); !!}
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection