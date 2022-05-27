@extends('templates.content')

@section('title_page', 'Profile')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @elseif($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="card">
                <div class="card-header"><i data-feather="settings"></i> <span class="card-title">Profile</span></div>
                <div class="card-body">
                    <form action="{{ route('update.profile', $user->id) }}" method="POST" role="form">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" />
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" />
                        </div>
                        <div class="form-group mb-3">
                            <label>Old Password</label>
                            <input type="password" class="form-control" name="old_password" />
                        </div>
                        <div class="form-group mb-3">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="new_password" />
                        </div>
                        <div class="col-12 text-right">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
