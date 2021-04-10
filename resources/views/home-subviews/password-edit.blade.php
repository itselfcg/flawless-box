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

                        <form id="create-account">

                            <div class="form-contain">
                                <div class="form-group">
                                    <div class="row ">
                                        <div class="col-12">
                                            <div class="form-floating">

                                                <input name="password"
                                                       class="form-control"
                                                       type="text"
                                                       placeholder="Current Password" required/>
                                                <label for="password">Current Password</label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">

                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input name="newPassword"
                                                       class="form-control"
                                                       type="text"
                                                       placeholder="New Password" required/>
                                                <label for="newPassword">New Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">

                                        <div class="col-12">
                                            <div class="form-floating">

                                                <input name="newPassword_confirmation"
                                                       class="form-control"
                                                       type="text"
                                                       placeholder="Confirm password" required/>
                                                <label for="newPassword_confirmation">Confirm password</label>

                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <button class="btn btn-yellow w-100 mt-3">SAVE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop
