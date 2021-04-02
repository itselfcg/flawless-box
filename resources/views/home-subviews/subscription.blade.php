@extends('layout.home')


@section('account-section')
    @include('models/modal',
['content'=>'Are you sure you want to cancel your Flawless Subscription?'])

    <div>
        <div id="plan" class="row ">
            <div class="col-12">
                <div class="row">
                    <div class="col">

                        <h3>02</h3>

                        <h4>current subscription</h4>
                    </div>
                </div>
                <hr class="sep1">


                <div class="row">



                    <div class="col-lg-7 col-12">

                        <table class="table">

                            <tbody>
                            <tr>
                                <th scope="row" class="bg-lightgray">Plan</th>
                                <td>3 months subscription</td>

                            </tr>
                            <tr>
                                <th scope="row" class="bg-lightgray">Start Date</th>
                                <td>2021-03-18</td>

                            </tr>
                            <tr>
                                <th scope="row" class="bg-lightgray">Billing Period</th>
                                <td>Every 3 months Prepay</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-lightgray">New billing date</th>
                                <td>2021-06-18</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-lightgray">Payment method</th>
                                <td>Paypal</td>
                            </tr>
                            <tr>
                                <th scope="row" class="bg-lightgray">Status</th>
                                <td>Auto renewal</td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                    <div class="col-lg-5 col-12">
                        <img class="w-100" src="{{asset('images/pictures/carton-box.jpg')}}">

                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-right pt-5">

                        <button class="btn btn-outline-dark"

                                data-toggle="modal" data-target="#dynamicModal"> Cancel</button>
                        <button id="btnEditPlan" class="btn btn-yellow"> Change plan</button>

                    </div>

                </div>

            </div>


        </div>


        <div id="edit-plan" class="row" style="display: none;">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h4>CHANGE plan</h4>
                    </div>
                    <div class="col text-right">
                        <a href="#" class="btnBackPlan link">
                            <i class="fa fa-angle-left"></i>
                            Back to Subscription
                        </a>
                    </div>

                </div>
                <hr class="sep1">
                    <div class="row text-center no-gutters ">
                        <div class="col-6" style="display: none;">
                            <div class="package">

                                <img class="w-75" src="{{asset('images/pictures/carton-box.jpg')}}">

                                <p>
                                <h6>Monthly</h6>
                                <h7>$25/Month</h7>

                                </p>
                                <p>
                                    <a class="btn btn-yellow" href="cart">
                                        SELECT
                                    </a>
                                </p>
                                <p>
                                    $25 billed monthly<br><br>

                                    <b>Non-Refundable</b><br><br>

                                    Renews Automatically<br>
                                    Cancel Anytime<br>

                                </p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="package">

                                <img class="w-75" src="{{asset('images/pictures/carton-box2.jpg')}}">
                                <p>
                                <h6>3 MONTHS</h6>
                                <h7>$23.33/Month</h7>

                                </p>
                                <p>
                                    <a class="btn btn-yellow" href="cart">
                                        SELECT
                                    </a>
                                </p>
                                <p>
                                    Prepay $70 for 3 months<br>
                                    Save $5 compared to monthly!<br><br>
                                    <b>Non-Refundable</b><br><br>
                                    Renews Automatically<br>
                                    Cancel Anytime<br>

                                </p>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="package">
                                <img class="w-75" src="{{asset('images/pictures/carton-box3.jpg')}}">
                                <p>
                                <h6>6 MONTHS</h6>
                                <h7>$23/Month</h7>

                                </p>
                                <p>
                                    <a class="btn btn-yellow" href="cart">
                                        SELECT
                                    </a>
                                </p>
                                <p>
                                    Prepay $138 for 6 months<br>
                                    Save $12 compared to monthly!<br><br>
                                    <b>Non-Refundable</b><br><br>
                                    Renews Automatically<br>
                                    Cancel Anytime<br>

                                </p>
                            </div>


                        </div>
                    </div>


            </div>
        </div>


    </div>
@stop
