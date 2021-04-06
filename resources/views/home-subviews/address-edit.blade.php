@extends('layout.home')


@section('section-content')
    <div id="edit-address" class="row">
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Edit Address</h4>
                    </div>
                    <div class="col text-right">
                        <a href="{{asset('address')}}" class="btnBackAddress link">
                            <i class="fa fa-angle-left"></i>
                            Back to Address
                        </a>
                    </div>

                </div>
                <hr class="sep1">

                <div class="row">
                    <div class="col">

                        <form action="update-address/{{$user->id}}" method="post">
                            @csrf

                            <div class="form-contain">
                                <div class="form-contain">
                                    <div class="form-group">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input name="name"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       type="text"
                                                       value="{{$address->name}}"/>
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input name="lastName"
                                                       class="form-control @error('lastName') is-invalid @enderror"
                                                       type="text"
                                                       value="{{$address->last_name}}"/>
                                                @error('lastName')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-8 col-lg-8 col-md-12">
                                                <input name="street"
                                                       class="form-control @error('street') is-invalid @enderror"
                                                       type="text"
                                                       value="{{$address->street}}"/>
                                                @error('street')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-4 col-lg-4 col-md-12">
                                                <input name="zipcode"
                                                       class="form-control @error('zipcode') is-invalid @enderror"
                                                       type="text"
                                                       value="{{$address->zip_code}}"/>
                                                @error('zipcode')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input name="city"
                                                       class="form-control @error('city') is-invalid @enderror"
                                                       type="text"
                                                       value="{{$address->city}}"/>
                                                @error('city')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input name="state"
                                                       class="form-control @error('state') is-invalid @enderror"
                                                       type="text"
                                                       value="{{$address->state}}"/>
                                                @error('state')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>

                                        </div>
                                        <div class="row ">

                                            <div class="col-12">
                                                <input name="phoneNumber"
                                                        class="form-control @error('phoneNumber') is-invalid @enderror"
                                                       type="text"
                                                       value="{{$address->phone_number}}"/>
                                                @error('phoneNumber')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                                @enderror
                                            </div>
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
