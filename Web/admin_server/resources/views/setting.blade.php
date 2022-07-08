@extends('templates.content')

@section('title_page', 'Setting')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            <div class="card">
                <div class="card-header"><i data-feather="settings"></i> <span class="card-title">Application Settings</span></div>
                <div class="card-body">
                    <form action="{{ route('setting.update') }}" method="POST" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-1">
                                @if (config('settings.app_logo'))
                                    <img src="{{ asset('storage/'.config('settings.app_logo')) }}" id="logoImg" style="width: 80px; height: auto;">
                                @else
                                    <img src="https://via.placeholder.com/80x80?text=Moon+Light+VPN" id="logoImg" style="width: 80px; height: auto;">
                                @endif
                            </div>
                            <div class="col-md-11">
                                <div class="form-group">
                                    <label class="control-label">App Logo</label>
                                    <input class="form-control" type="file" name="app_logo" onchange="loadFile(event,'logoImg')"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="app_name">App Name</label>
                            <input
                                class="form-control"
                                type="text"
                                placeholder="Enter App Name"
                                id="app_name"
                                name="app_name"
                                value="{{ config('settings.app_name') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="app_description">App Description</label>
                            <textarea class="form-control" id="app_description" name="app_description" rows="10" cols="30" placeholder="Enter App Description">{{ config('settings.app_description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="phone_number">Phone</label>
                            <input
                                class="form-control"
                                type="text"
                                id="phone_number"
                                name="phone_number"
                                value="{{ config('settings.phone_number') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="email">Email</label>
                            <input
                                class="form-control"
                                type="email"
                                id="email"
                                name="email"
                                value="{{ config('settings.email') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="address">Address</label>
                            <input
                                class="form-control"
                                type="text"
                                id="address"
                                name="address"
                                value="{{ config('settings.address') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="facebook">Facebook</label>
                            <input
                                class="form-control"
                                type="text"
                                id="facebook"
                                name="facebook"
                                value="{{ config('settings.facebook') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="instagram">Instagram</label>
                            <input
                                class="form-control"
                                type="text"
                                id="instagram"
                                name="instagram"
                                value="{{ config('settings.instagram') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="twitter">Twitter</label>
                            <input
                                class="form-control"
                                type="text"
                                id="twitter"
                                name="twitter"
                                value="{{ config('settings.twitter') }}"
                            />
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="linkedin">Linkedin</label>
                            <input
                                class="form-control"
                                type="text"
                                id="linkedin"
                                name="linkedin"
                                value="{{ config('settings.linkedin') }}"
                            />
                        </div>
                        <div class="col-12 text-right">
                            <button class="btn btn-primary" type="submit">Update Settings</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascripts')
    <script>
        loadFile = function(event, id) {
            var output = document.getElementById(id);
            output.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>
@endsection
