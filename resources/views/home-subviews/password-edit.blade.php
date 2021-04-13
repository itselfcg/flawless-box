@extends('layout.home')

@section('section-content')
    <div id="edit-password">
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Change Password</h4>
                    </div>
                    <div class="col text-end">
                        <a href="{{asset('profile')}}" class="btnBackProfile link">
                            <i class="fa fa-angle-left"></i>
                            Back to Profile
                        </a>
                    </div>

                </div>
                <hr class="sep1">

                <div class="row">
                    <div class="col">

                        <form action="update-password" method="post">
                            @csrf
                            <div class="form-contain">
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input
                                                    name="old_password"
                                                    type="password"
                                                    class="form-control @error('old_password') is-invalid @enderror"
                                                    placeholder="Current password">
                                                    <label for="old_password">Current Password</label>

                                                    @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input
                                                    name="password"
                                                    type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    placeholder="Password">
                                                <label for="password">New Password</label>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input
                                                    name="password_confirmation"
                                                    type="password"
                                                    class="form-control"
                                                    placeholder="Confirm password">
                                                    <label for="password_confirmation">New Password</label>

                                                    @error('password_confirmation')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-yellow w-100 mt-3">SAVE</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
