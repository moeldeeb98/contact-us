@extends('backend.layouts.app')
@php
    $pageTitle = 'Message';
@endphp

@section('title')
    {{ $pageTitle }}
@endsection
@section('content')

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>

    <div class="inbox-head">
        <h3>{{ $pageTitle }}</h3>
    </div>

    <div class="container" style="margin: 50px; padding: 30px; background-color: #D5D7DE; width: 85%; min-height: 300px">
        <div class="">
            <div class="row" style="margin-top: 20px">
                <div class="col-md-10">
                    <h4>Name : {{ $message->name }}</h4>
                </div>
                <div class="col-md-12">
                    <h5 >From : {{ $message->email }}</h5>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <p style="margin-top: 30px; padding: 10px; background-color: white; min-height: 100px">{{ $message->message }}</p>
                </div>
            </div>

            <hr>
            <h5>You can Reply on the Message below...</h5>
            <hr>


            <form class="form" action="{{ route('admin.replyMessage', ['id' => $message->id]) }}" method="post">
                {{ csrf_field() }}


                <div class="row">
                    <div class="col-md-4">
                        @php $input = 'name' @endphp
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Name</label>
                            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
                                @foreach($user->contacts as $contact)
                                    <option value="{{ $contact->name }}" {{ (isset($row) && $row->{$input} == $contact->name) ? 'selected' : '' }}>{{ $contact->name }}</option>
                                @endforeach
                            </select>
                            <input type="url" >
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        @php $input = 'email' @endphp
                        <div class="form-group bmd-form-group">
                            <label class="bmd-label-floating">Email</label>
                            <select name="{{ $input }}" class="form-control @error($input) is-invalid @enderror">
                                @foreach($user->contacts as $contact)
                                    <option value="{{ $contact->email }}" {{ (isset($row) && $row->{$input} == $contact->email) ? 'selected' : '' }}>{{ $contact->email }}</option>
                                @endforeach
                            </select>
                            <input type="url" >
                            @error($input)
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 30px">
                    @php $input = 'message'; @endphp
                    <div class="col-md-12">
                        <textarea style="padding: 10px;" class="form-control @error($input) is-invalid @enderror" name="{{ $input }}" rows="4" placeholder="Write your Reply..."></textarea>
                        @error($input)
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="row" style="margin-top: 10px">
                    <div class="col-md-10"></div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary btn-round">Reply</button>
                    </div>
                </div>

            </form>


        </div>
    </div>

@endsection
