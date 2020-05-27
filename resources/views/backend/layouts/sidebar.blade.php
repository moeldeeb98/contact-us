<aside class="sm-side">
    <div class="user-head">

    </div>

    <ul class="inbox-nav inbox-divider">
        <li class="{{ (request()->has('unreaded') && request()->get('unreaded') == 'true') ? 'active' : '' }}">
            <a href="{{ route('messages.index', 'unreaded=true') }}"><i class="fa fa-inbox"></i>
                Unreaded
            </a>
        </li>
        <li class="{{ ( request()->url() == route('messages.index') && request()->query() == null) ? 'active' : '' }}">
            <a href="{{ route('messages.index') }}"><i class="fa fa-envelope-o"></i>All Mails</a>
        </li>
    </ul>
    <ul class="nav nav-pills nav-stacked labels-info inbox-divider">
        <li><h4>Settings</h4></li>

        <li class="{{ ( request()->segment(2) !== null && request()->segment(2) == 'contacts' ) ? 'active' : '' }}">
            <a href="{{ route('contacts.index') }}"><i class="fa fa-cogs"></i>Contacts</a>
        </li>
    </ul>

</aside>
