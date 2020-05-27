@extends('backend.layouts.app')
@php
    $pageTitle = ' Contact';
@endphp

@section('title')
    {{ $page_title }}
@endsection
@section('content')


    @component('backend.shared.create', [
       'page_title' => $page_title,
       'page_desc' => $page_desc
    ])

        <div class="row" style="margin: 50px;padding: 30px; background-color: #D5D7DE">
            <div class="col-md-10">
                <form action="{{ route( $folder_name . '.update' , ['contact' => $row->id])}}" method="post">
                    {{ method_field('put') }}
                    {{ csrf_field() }}
                    @include('backend.' . $folder_name . '.form-fields')
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                    <button type="submit" class="btn btn-primary pull-right">Update {{ $module_name }}</button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>

    @endcomponent
@endsection
