@extends('layout.home')


@section('section-content')
    <div id="edit-address" class="row">
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Edit Address</h4>
                    </div>
                    <div class="col text-end">
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
                                        <div class="form-group row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input name="name"
                                                           class="form-control @error('name') is-invalid @enderror"
                                                           type="text"
                                                           value="{{$address->name}}"/>
                                                    <label for="name">Name</label>

                                                    @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input name="lastName"
                                                           class="form-control @error('lastName') is-invalid @enderror"
                                                           type="text"
                                                           value="{{$address->last_name}}"/>
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
                                            <div class="col-8 col-lg-8 col-md-12">
                                                <div class="form-floating">
                                                    <input name="street"
                                                           class="form-control @error('street') is-invalid @enderror"
                                                           type="text"
                                                           value="{{$address->street}}"/>
                                                    <label for="street">Street</label>

                                                    @error('street')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-4 col-lg-4 col-md-12">
                                                <div class="form-floating">
                                                    <input name="zipcode"
                                                           class="form-control @error('zipcode') is-invalid @enderror"
                                                           type="text"
                                                           value="{{$address->zip_code}}"/>
                                                    <label for="zipcode">Zip code</label>

                                                    @error('zipcode')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input name="city"
                                                           class="form-control @error('city') is-invalid @enderror"
                                                           type="text"
                                                           value="{{$address->city}}"/>
                                                    <label for="city">City</label>
                                                    @error('city')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <div class="form-floating">
                                                    <input name="state"
                                                           class="form-control @error('state') is-invalid @enderror"
                                                           type="text"
                                                           value="{{$address->state}}"/>
                                                    <label for="state">State</label>
                                                    @error('state')
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
                                                    <input name="phoneNumber"
                                                           class="form-control @error('phoneNumber') is-invalid @enderror"
                                                           type="text"
                                                           value="{{$address->phone_number}}"/>
                                                    <label for="phoneNumber">Phone number</label>
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

                            <button type="submit" class="btn btn-yellow w-100 ">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
