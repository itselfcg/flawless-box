@extends('layout.home')

@section('section-content')
    <div id="edit-profile" class="row">
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Edit Profile</h4>
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

                        <form action="update-profile/{{$user->id}}" method="post">
                            @csrf
                            <div class="form-contain">
                                    <div class="form-group row ">
                                        <div class="col-12">
                                            <div class="form-floating">

                                                <input name="name"
                                                       type="text"
                                                       value="{{$user->name}}"
                                                       class="form-control  @error('name') is-invalid @enderror" />
                                                <label for="name">Name</label>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row ">

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input name="lastName"
                                                       class="form-control  @error('lastName') is-invalid @enderror"
                                                       type="text"
                                                        value="{{$user->last_name}}"/>
                                                <label for="lastName">Last name</label>
                                                @error('lastName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <div class="col-12">
                                            <div class="form-floating">

                                                <input name="email"
                                                        type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{$user->email}}" />
                                                <label for="email">Email address</label>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                            </div>
                                        </div>
                                    </div>

                            </div>

                            <button type="submit" class="btn btn-yellow w-100">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
