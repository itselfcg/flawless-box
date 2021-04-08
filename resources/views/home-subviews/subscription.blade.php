@extends('layout.home')


@section('section-content')


    <div id="plan">

        <div>

            <div class="row">
                <div class="col">
                    <h3>02</h3>
                </div>
            </div>

            @if($activeSubscription!=null)
                <div class="row">
                    <div class="col">
                        <h4>subscription</h4>
                    </div>
                </div>
                <hr class="sep1">
                <div class="row pb-5">
                    <div class="col">
                        <div class="row">
                            <div class="col-lg-7 col-12 table-responsive">

                                <table class="table table-borderliness table-product">

                                    <tbody>
                                    <tr>
                                        <th scope="row" class="bg-lightgray">Code</th>
                                        <td>{{$activeSubscription->id}} </td>

                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-lightgray">Plan</th>
                                        <td>{{$activeSubscription->plan->duration}} months subscription</td>

                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-lightgray">Start Date</th>
                                        <td>{{$activeSubscription->starts_at}}</td>

                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-lightgray">Billing Period</th>
                                        <td>Every {{$activeSubscription->plan->billing_period}} months Prepay</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-lightgray">

                                            @if($activeSubscription->status==\App\Models\SubscriptionStatus::AUTO_RENEWAL)
                                                New billing date
                                            @else
                                                Billing date
                                            @endif


                                        </th>


                                        <td>{{$activeSubscription->billing_date}}</td>


                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-lightgray">Payment method</th>
                                        <td>{{$activeSubscription->payment->paymentMethod->description}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-lightgray">Status</th>
                                        <td>{{$activeSubscription->status}}</td>
                                    </tr>
                                    </tbody>
                                </table>


                            </div>
                            <div class="col-lg-5 col-12">
                                <img class="w-100" src="{{asset($activeSubscription->plan->photo)}}">

                            </div>
                        </div>

                        @if($activeSubscription->status==\App\Models\SubscriptionStatus::AUTO_RENEWAL)
                            <div class="row">


                                <div class="col text-right ">


                                    <form action="subscription-edit/{{$activeSubscription->plan->id}}"
                                          method="post">
                                        @csrf

                                        <button type="submit" class="btn btn-yellow"> Change plan</button>
                                    </form>

                                    <div class="pt-2">


                                        <button class="btn btn-outline-dark "
                                                data-toggle="modal" data-target="#cancelModal">
                                            Cancel
                                        </button>
                                    </div>

                                </div>

                            </div>
                        @endif

                    </div>
                    @include('models/cancel-subscription',
                   ["id"=> "{$activeSubscription->id}"])
                </div>
            @endif
            @if($subscriptions!=null)
                <div class="row">
                    <div class="col">
                        <h4>subscription history</h4>
                    </div>
                        @if(!$activeFlag)
                            <div class="col-4 align-self-end">
                                <a class="btn btn-join w-100" href="box#join-now">JOIN NOW</a>
                            </div>
                        @endif
                </div>
                <hr class="sep1">
                @foreach($subscriptions as $subscription)

                    <div class="row ">

                        <div class="col-lg-7 col-12 table-responsive">

                            <table class="table table-product">

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
                        <div class="col-lg-5 col-12 ">
                            <img class="w-100" src="{{asset($subscription->plan->photo)}}">

                        </div>

                    </div>
                    <hr>

                @endforeach
            @endif


        </div>


    </div>
@stop
