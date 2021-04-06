@extends('layout.home')

@section('section-content')
    <div id="profile">
        <div class="row">
            <div class="col">
                <h3>01</h3>
                <h4>Profile</h4>
                <hr class="sep1">
                <div class="row pt-2">
                    <div class="col-10">
                        <p>{{$user->name}} {{$user->last_name}}<br>
                            {{$user->email}} </p>
                    </div>
                    <div class="col-2 text-center">
                        <a href="{{asset('profile-edit')}}"  class="link">
                            Edit
                        </a>
                    </div>

                </div>
                <div class="row">
                    <div class="col-10">
                        <p>Password</p>
                    </div>
                    <div class="col-2 text-center">
                        <a href="{{asset('password-edit')}}" class="link">
                            Edit
                        </a>
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop

