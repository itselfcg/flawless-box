@extends('layout.home')


@section('section-content')
    <div id="history">
        <div class="row">
            <div class="col">
                <h3>04</h3>

                <h4>boxes history</h4>
                <hr class="sep1">


                <div class="row">
                    <div class="col">

                        <table class="table  ">
                            <thead>
                            <tr class="bg-lightgray">
                                <th scope="col">Code</th>
                                <th scope="col">Month</th>

                                <th scope="col">Status</th>
                                <th scope="col">Shipping date</th>
                                <th scope="col">Tracking number</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($purchases as $purchase)
                            <tr>
                                <td>{{$purchase->subscription_id}}</td>
                                <td>{{$purchase->description}}</td>
                                <td>{{$purchase->status}}</td>
                                <td>{{$purchase->shipping_date}}</td>
                                <td>{{$purchase->tracking_number}}</td>
                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>
    </div>
@stop
