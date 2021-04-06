@extends('layout.home')


@section('section-content')


    <div id="plan" class="row ">

            <div class="col-12">
                <div class="row">
                    <div class="col-8">

                        <h3>02</h3>

                        <h4>current subscription</h4>
                    </div>
                    @if(!$activeFlag)
                    <div class="col-4 align-self-end">
                        <a class="btn btn-join w-100" href="box#join-now">JOIN NOW</a>
                    </div>
                    @endif
                </div>
                <hr class="sep1">

                @foreach($subscriptions as $subscription)


                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-lg-7 col-12 table-responsive">

                                    <table class="table table-borderliness table-product">

                                        <tbody>
                                        <tr>
                                            <th scope="row" class="bg-lightgray">Code</th>
                                            <td>{{$subscription->id}} </td>

                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-lightgray">Plan</th>
                                            <td>{{$subscription->plan->duration}} months subscription</td>

                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-lightgray">Start Date</th>
                                            <td>{{$subscription->starts_at}}</td>

                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-lightgray">Billing Period</th>
                                            <td>Every {{$subscription->plan->billing_period}} months Prepay</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-lightgray">

                                                @if($subscription->status==\App\Models\SubscriptionStatus::AUTO_RENEWAL)
                                                    New billing date
                                                @else
                                                    Billing date
                                                @endif


                                            </th>


                                            <td>{{$subscription->billing_date}}</td>


                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-lightgray">Payment method</th>
                                            <td>{{$subscription->payment->paymentMethod->description}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row" class="bg-lightgray">Status</th>
                                            <td>{{$subscription->status}}</td>
                                        </tr>
                                        </tbody>
                                    </table>


                                </div>
                                <div class="col-lg-5 col-12">
                                    <img class="w-100" src="{{asset($subscription->plan->photo)}}">

                                </div>
                            </div>

                            @if($subscription->status==\App\Models\SubscriptionStatus::AUTO_RENEWAL)
                                <div class="row">


                                    <div class="col text-right ">


                                        <form action="subscription-edit/{{$subscription->plan->id}}" method="post">
                                            @csrf

                                            <button type="submit" class="btn btn-yellow"> Change plan</button>
                                        </form>

                                        <div class="pt-2">



                                            <button class="btn btn-outline-dark "
                                                    data-toggle="modal" data-target="#cancelModal"> Cancel
                                            </button>
                                        </div>

                                    </div>

                                </div>
                            @endif

                        </div>
                    </div>
                    <hr>

                    @include('models/cancel-subscription',
                        ["id"=> "{$subscription->id}"])
                @endforeach


            </div>


        </div>
@stop
