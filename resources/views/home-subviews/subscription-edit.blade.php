@extends('layout.home')


@section('section-content')

    <div id="edit-plan" class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h4>CHANGE plan</h4>
                </div>
                <div class="col text-end">
                    <a href="{{asset('subscription')}}" class="btnBackPlan link">
                        <i class="fa fa-angle-left"></i>
                        Back to Subscription
                    </a>
                </div>

            </div>
            <hr class="sep1">
            <div class="row text-center g-0 pt-5 pb-5">
                @foreach($plans as $plan)

                    <div class="col-md-6 pb-5">
                        <div class="package">

                            <img class="w-75" src="{{ asset($plan->photo) }}">

                            <p>
                            <h6>{{ $plan->name }}</h6>
                            <h7>{{ $plan->monthly_price }}/Month</h7>

                            </p>
                            <p>
                                <a class="btn btn-yellow" href="{{ url('add-to-cart/'.$plan->id) }}">
                                    SELECT
                                </a>

                            </p>
                            <p>
                                {{ $plan->description }}<br><br>

                                <b>Non-Refundable</b><br><br>

                                Renews Automatically<br>
                                Cancel Anytime<br>

                            </p>
                        </div>
                    </div>

                @endforeach

            </div>


        </div>
    </div>
@stop
