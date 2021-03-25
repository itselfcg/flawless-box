@extends('layout.account')


@section('account-section')
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
                                <th scope="col">Plan code</th>
                                <th scope="col">Month</th>

                                <th scope="col">Status</th>
                                <th scope="col">Shipping date</th>
                                <th scope="col">Tracking number</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>XGAHS</td>
                                <td>APRIL</td>
                                <td>Waiting to be ship</td>
                                <td>2021-04-18</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>XGAHS</td>
                                <td>MARCH</td>
                                <td>Sent to:<br> 123 Main Street,<br>New York, NY 10030

                                </td>
                                <td>2021-03-18</td>
                                <td>0151000001552</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>

        </div>
    </div>
@stop
