@extends('layout.home')


@section('account-section')
    <div id="address">
        <div class="row">
            <div class="col">
                <h3>03</h3>

                <h4>Address</h4>
                <hr class="sep1">
                <div class="row pt-2">
                    <div class="col-10">
                        <p>Itzel Contreras <br>
                            123 Main Street,<br>
                            New York, NY 10030<br>

                            7602552233
                        </p>
                    </div>
                    <div class="col-2 text-center">
                        <a href="#" id="btnEditAddress"  class="link">
                            Edit
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop

@section('edit-sections')
    <div id="edit-address" class="row" style="display:none">
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Edit Address</h4>
                    </div>
                    <div class="col text-right">
                        <a href="#" class="btnBackAddress link">
                            <i class="fa fa-angle-left"></i>
                            Back to Address
                        </a>
                    </div>

                </div>
                <hr class="sep1">

                <div class="row">
                    <div class="col">

                        <form id="create-account">

                            <div class="form-contain">
                                <div class="form-contain">
                                    <div class="form-group">
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="name" class="form-control" type="text"
                                                       name="name-label"
                                                       placeholder="First name" required/>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="lastname" class="form-control" type="text"
                                                       name="lastname-label"
                                                       placeholder="Last name" required/>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-8 col-lg-8 col-md-12">
                                                <input id="address" class="form-control" type="text"
                                                       name="address-label"
                                                       placeholder="Street Address" required/>
                                            </div>
                                            <div class="col-4 col-lg-4 col-md-12">
                                                <input id="zipcode" class="form-control" type="text"
                                                       name="zipcode-label"
                                                       placeholder="Zipcode" required/>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="city" class="form-control" type="text"
                                                       name="city-label"
                                                       placeholder="City" required/>
                                            </div>
                                            <div class="col-6 col-lg-6 col-md-12">
                                                <input id="state" class="form-control" type="text"
                                                       name="state-label"
                                                       placeholder="State / Providence" required/>
                                            </div>

                                        </div>
                                        <div class="row ">

                                            <div class="col-12">
                                                <input id="phone" class="form-control" type="text"
                                                       name="phone-label"
                                                       placeholder="Phone number" required/>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-yellow w-100">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
