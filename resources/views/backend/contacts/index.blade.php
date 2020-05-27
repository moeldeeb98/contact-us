@extends('backend.layouts.app')
@php
    $pageTitle = ' Contact';
@endphp

@section('title')
    {{ $page_title }}
@endsection
@section('content')

    <div class="inbox-head">
        <h3>{{ $page_title }}</h3>
        <div class="row">
            <div class="col-md-10">
                <p class="text-left">{{ $page_desc }}</p>
            </div>
            <div class="col-md-2">
                <div class="text-right">
                    <a href="{{ route('contacts.create') }}" class="btn btn-primary btn-round">Add Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-11" style="margin: 30px">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>User</th>
                                <th class="text-right">control</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($rows as $row)
                                <tr>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->email}}</td>
                                    <td>{{$row->user->name}}</td>
                                    <td class="td-actions text-right">
                                        @component('backend.shared.buttons.edit', [
                                            'folder_name' => $folder_name,
                                            'module_name' => $module_name,
                                            'routeArray' => ['contact' => $row->id]
                                            ])
                                        @endcomponent
                                        @component('backend.shared.buttons.delete', [
                                            'folder_name' => $folder_name,
                                            'module_name' => $module_name,
                                            'routeArray' => ['contact' => $row->id]
                                            ])
                                        @endcomponent
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {!! $rows->links() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

