<html lang="en">
@include('backend.layouts.header')
<body>
<div id="snippetContent">

    <div class="container bootstrap snippets">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="mail-box">

                        @include('backend.layouts.sidebar')

                        <aside class="lg-side">
                            @yield('content')
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">--}}
{{--        <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--           onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--            {{ __('Logout') }}--}}
{{--        </a>--}}

{{--        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--            @csrf--}}
{{--        </form>--}}
{{--    </div>--}}

    <style
        type="text/css">body{
            margin-top:20px;
            background:#eee;
        }

        /*
            =================================
            MAIL INBOX
            =================================
        */

        .mail-box {
            border-collapse: collapse;
            border-spacing: 0;
            display: table;
            table-layout: fixed;
            width: 100%;
        }

        .mail-box aside {
            display: table-cell;
            float: none;
            height: 100%;
            padding: 0;
            vertical-align: top;
        }

        .mail-box .sm-side {
            width: 25%;
            background: #ecf0f1;
            border-radius: 4px 0 0 4px;
            -webkit-border-radius: 4px 0 0 4px;
        }
        .mail-box .lg-side {
            width: 75%;
            background: #fff;
            border-radius: 0px 4px 4px 0;
            -webkit-border-radius: 0px 4px 4px 0;
        }

        .mail-box .sm-side .user-head {
            background: #2980b9;
            border-radius: 4px 0px 0px 0;
            -webkit-border-radius: 4px 0px 0px 0;
            padding: 10px;
            color: #fff;
            min-height: 80px;
        }

        .user-head .inbox-avatar {
            width: 65px;
            float: left;
        }

        .user-head .inbox-avatar img {
            border-radius: 4px;
            -webkit-border-radius: 4px;
        }
        .user-head .user-name {
            display: inline-block;
            margin:0 0 0 10px;
        }

        .user-head .user-name h5 {
            font-size: 14px;
            margin-top: 15px;
            margin-bottom: 0;
            font-weight: 300;
        }
        .user-head .user-name h5 a {
            color: #fff;
        }

        .user-head .user-name span a {
            font-size: 12px;
            color: #87e2e7;
        }

        a.mail-dropdown {
            background: #1abc9c;
            padding:3px 5px;
            font-size: 10px;
            color: #ddd;
            border-radius: 2px;
            margin-top: 20px;
        }

        .inbox-body {
            padding: 20px;
        }

        .btn-compose {
            background: #9b59b6;
            padding: 12px 0;
            text-align: center;
            width: 100%;
            color: #fff;
        }
        .btn-compose:hover {
            background: #8e44ad;
            color: #fff;
        }

        ul.inbox-nav  {
            display: inline-block;
            width: 100%;
            margin: 0;
            padding: 0;
        }

        .inbox-divider {
            border-bottom: 1px solid #d5d8df;
        }

        ul.inbox-nav li {
            display: inline-block;
            line-height: 45px;
            width: 100%;
        }

        ul.inbox-nav li a  {
            color: #6a6a6a;
            line-height: 45px;
            width: 100%;
            display: inline-block;
            padding: 0 20px;
        }

        ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus  {
            color: #6a6a6a;
            background: #d5d7de;
        }

        ul.inbox-nav li a i {
            padding-right: 10px;
            font-size: 16px;
            color: #6a6a6a;
        }

        ul.inbox-nav li a span.label {
            margin-top: 13px;
        }

        ul.labels-info li h4 {
            padding-left:15px;
            padding-right:15px;
            padding-top: 5px;
            color: #5c5c5e;
            font-size: 13px;
            text-transform: uppercase;
        }

        ul.labels-info li  {
            margin: 0;
        }

        ul.labels-info li a {
            color: #6a6a6a;
            border-radius: 0;
        }

        ul.labels-info li a:hover, ul.labels-info li a:focus {
            color: #6a6a6a;
            background: #d5d7de;
        }

        ul.labels-info li a i {
            padding-right: 10px;
        }

        .nav.nav-pills.nav-stacked.labels-info p {
            margin-bottom: 0;
            padding: 0 22px;
            color: #9d9f9e;
            font-size: 11px;
        }

        .inbox-head {
            padding:20px;
            background: #3498db;
            color: #fff;
            border-radius: 0 4px 0 0;
            -webkit-border-radius: 0 4px 0 0;
            min-height: 80px;
        }

        .inbox-head  h3 {
            margin: 0;
            display: inline-block;
            padding-top: 6px;
            font-weight: 300;
        }

        .inbox-head  .sr-input {
            height: 40px;
            border: none;
            box-shadow: none;
            padding: 0 10px;
            float: left;
            border-radius: 4px 0 0 4px;
            color: #8a8a8a;
        }
        .inbox-head  .sr-btn {
            height: 40px;
            border: none;
            background: #2980b9;
            color: #fff;
            padding: 0 20px;
            border-radius: 0 4px 4px 0;
            -webkit-border-radius: 0 4px 4px 0;
        }

        .table-inbox {
            border: 1px solid #d3d3d3;
            margin-bottom: 0;
        }

        .table-inbox tr td{
            padding: 12px !important;
        }

        .table-inbox tr td:hover{
            cursor: pointer;
        }

        .table-inbox tr td .fa-star.inbox-started ,.table-inbox tr td .fa-star:hover{
            color: #f78a09;
        }

        .table-inbox tr td .fa-star{
            color: #d5d5d5;
        }

        .table-inbox tr.unread td {
            font-weight: 600;
            background: #f7f7f7;
        }

        ul.inbox-pagination  {
            float: right;
            list-style: none;
        }

        ul.inbox-pagination li {
            float: left;
        }

        .mail-option {
            display: inline-block;
            margin-bottom: 10px;
            width: 100%;
        }

        .mail-option .chk-all, .mail-option .btn-group {
            margin-right: 5px;
        }

        .mail-option .chk-all, .mail-option .btn-group a.btn {
            border: 1px solid #e7e7e7;
            padding: 5px 10px;
            display: inline-block;
            background: #fcfcfc;
            color: #afafaf;
            border-radius: 3px !important;
            -webkit-border-radius: 3px !important;
        }
        .inbox-pagination a.np-btn  {
            border: 1px solid #e7e7e7;
            padding: 5px 15px;
            display: inline-block;
            background: #fcfcfc;
            color: #afafaf;
            border-radius: 3px !important;
            -webkit-border-radius: 3px !important;
        }

        .mail-option .chk-all input[type=checkbox] {
            margin-top: 0;
        }

        .mail-option .btn-group a.all {
            padding: 0;
            border: none;
        }

        .inbox-pagination a.np-btn {
            margin-left: 5px;
        }

        .inbox-pagination li span {
            display: inline-block;
            margin-top: 7px;
            margin-right: 5px;
        }

        .fileinput-button {
            border: 1px solid #e6e6e6;
            background: #eeeeee;
        }

        .inbox-body .modal .modal-body input, .inbox-body .modal .modal-body textarea{
            border: 1px solid #e6e6e6;
            box-shadow: none;
        }

        .btn-send, .btn-send:hover {
            background: #00A8B3;
            color: #fff;
        }

        .btn-send:hover {
            background: #009da7;
        }

        .modal-header h4.modal-title {
            font-weight: 300;
            font-family: 'Open Sans', sans-serif;
        }

        .modal-body label {
            font-weight: 400;
            font-family: 'Open Sans', sans-serif;
        }

        .heading-inbox h4{
            font-size: 18px;
            color: #444;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
            margin-top: 20px;
        }

        .sender-info {
            margin-bottom: 20px;
        }

        .sender-info img {
            width: 30px;
            height: 30px;
        }

        .sender-dropdown {
            background: #eaeaea;
            padding:0 3px;
            color: #777;
            font-size: 10px;
        }

        .view-mail a {
            color: #FF6C60;
        }

        .attachment-mail {
            margin-top: 30px;
        }
        .attachment-mail ul {
            width: 100%;
            display: inline-block;
            margin-bottom: 30px;
        }

        .attachment-mail ul li {
            float: left;
            width: 150px;
            margin-right: 10px;
            margin-bottom: 10px;
        }

        .attachment-mail ul li img {
            width: 100%;
        }

        .attachment-mail ul li span {
            float: right;
        }
        .attachment-mail .file-name {
            float: left;
        }

        .attachment-mail .links {
            width: 100%;
            display: inline-block;
        }
    </style>

</div>


</body>
</html>
