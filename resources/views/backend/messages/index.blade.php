@extends('backend.layouts.app')
@php
    $pageTitle = 'Messages';
@endphp

@section('title')
    {{ $pageTitle }}
@endsection
@section('content')

    <div class="inbox-head">
        <h3>{{ $pageTitle }}</h3>
    </div>
    <div>
        <table class="table table-inbox table-hover" style="margin: 40px; width: 90%">
            <tbody>
                @foreach($messages as $message)
                        <tr class="{{ ($message->readed == 0) ? 'unread' : ''}}">
                            <td class="inbox-small-cells"><i class="fa fa-envelope-o"></i></td>
                            <td class="view-message  dont-show"><a href="{{ route('admin.showMessage', ['id' => $message->id]) }}" style="">{{ $message->name }}</a></td>
                            <td class="view-message">{{ $message->email }}</td>
                            <td class="view-message text-right">{{ $message->created_at }}</td>
                            <td class="">
{{--                                <form name="delete-form" action="{{ route('admin.destroyMessage', ['id' => $message->id]) }}" method="post">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                    {{ method_field('delete') }}--}}
{{--                                    <button type="submit"><i class=" fa fa-trash-o"></i></button>--}}
{{--                                </form>--}}
                                @component('backend.shared.buttons.delete', [
                                            'folder_name' => 'messages',
                                            'module_name' => $message,
                                            'routeArray' => ['message' => $message->id]
                                            ])
                                @endcomponent
                            </td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
