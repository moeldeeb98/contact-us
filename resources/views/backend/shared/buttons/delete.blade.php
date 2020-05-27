<a href="{{ route($folder_name . '.index') }}"
   onclick="event.preventDefault();
    document.getElementById('delete-form').submit();">
    <i class="fa fa-trash"></i>
</a>
<form id="delete-form" action="{{ route( $folder_name . '.destroy', $routeArray ) }}" method="POST" style="display: none;">
    {{ csrf_field() }}
    {{ method_field('delete') }}
</form>
