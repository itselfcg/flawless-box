@extends('layout.home')

@section('section-content')
    <div id="edit-password" >
        <div class="row w-100">

            <div class="col-12">
                <div class="row">
                    <div class="col">
                        <h4>Change Password</h4>
                    </div>
                    <div class="col text-right">
                        <a href="{{asset('profile')}}" class="btnBackProfile link">
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
