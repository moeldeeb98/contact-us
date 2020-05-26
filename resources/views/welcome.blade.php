@extends('frontend.layouts.app')

@section('title')
    Contact-us
@endsection


@section('content')

    <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
            alert(msg);
        }
    </script>

    <div class="section landing-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                    <h2 class="text-center">Keep in touch</h2>
                    <form class="contact-form" action="{{ route('contact-us.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            @include('frontend.messages.form-fields')
                        </div>
                        <div class="row">
                            <div class="col-md-4 ml-auto mr-auto">
                                <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
