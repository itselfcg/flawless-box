@extends('layout.home')


@section('section-content')
    <div id="address">
        <div class="row">
            <div class="col">
                <h3>03</h3>

                <h4>Address</h4>
                <hr class="sep1">
                <div class="row pt-2">
                    <div class="col-10">
                        <p> {{$address->name}} {{$address->last_name}} <br>
                            {{$address->street}}<br>
                            {{$address->city}}, {{$address->state}} {{$address->zip_code}}<br>

                            {{$address->phone_number}}
                        </p>
                    </div>
                    <div class="col-2 text-center">
                        <a href="{{asset('address-edit')}}"   class="link">
                            Edit
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop

