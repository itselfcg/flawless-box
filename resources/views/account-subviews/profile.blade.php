@extends('layout.account')
@section('account-section')
    <div id="profile">
        <div class="row">
            <div class="col">
                <h3>01</h3>
                <h4>Profile</h4>
                <hr class="sep1">
                <div class="row pt-2">
                    <div class="col-10">
                        <p>Itzel Contreras <br>
                            itzelgpec@gmail.com <br>
                            7602552233</p>
                    </div>
                    <div class="col-2 text-center">
                        <a href="#" id="btnEditAccount" class="edit-link">
                            Edit
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10">
                        <p>Password</p>
                    </div>
                    <div class="col-2 text-center">
                        <a href="#" id="btnEditPassword"  class="edit-link">
                            Edit
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop

@section('edit-sections')
    <div id="edit-profile" class="row" style="display:none">
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Edit Profile</h4>
                    </div>
                    <div class="col text-right">
                        <a href="#" class="btnBackProfile">
                            <i class="fa fa-angle-left"></i>
                            Back to Profile
                        </a>
                    </div>

                </div>
                <hr class="sep1">

                <div class="row">
                    <div class="col">

                        <form id="create-account">

                            <div class="form-contain">
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-12">
                                            <input id="name" class="form-control" type="text"
                                                   name="name-label"
                                                   placeholder="First name" required/>
                                        </div>
                                    </div>
                                    <div class="row ">

                                        <div class="col-12">
                                            <input id="lastname" class="form-control"
                                                   type="text"
                                                   name="lastname-label"
                                                   placeholder="Last name" required/>
                                        </div>
                                    </div>
                                    <div class="row ">

                                        <div class="col-12">
                                            <input id="email" class="form-control" type="text"
                                                   name="email-label"
                                                   placeholder="Email" required/>
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

                            <button class="btn btn-yellow w-100">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="edit-password" style="display:none">
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Change Password</h4>
                    </div>
                    <div class="col text-right">
                        <a href="#" class="btnBackProfile">
                            <i class="fa fa-angle-left"></i>
                            Back to Profile
                        </a>
                    </div>

                </div>
                <hr class="sep1">

                <div class="row">
                    <div class="col">

                        <form id="create-account">

                            <div class="form-contain">
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-12">
                                            <input id="name" class="form-control" type="text"
                                                   name="name-label"
                                                   placeholder="Current Password" required/>
                                        </div>
                                    </div>
                                    <div class="row ">

                                        <div class="col-12">
                                            <input id="lastname" class="form-control"
                                                   type="text"
                                                   name="lastname-label"
                                                   placeholder="New Password" required/>
                                        </div>
                                    </div>
                                    <div class="row ">

                                        <div class="col-12">
                                            <input id="email" class="form-control" type="text"
                                                   name="email-label"
                                                   placeholder="Confirm password" required/>
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
