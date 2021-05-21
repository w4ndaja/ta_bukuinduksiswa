<form action="{{$action}}" method="post" novalidate>
    @csrf
    @if($method !== null) @method($method) @endif
    {{ $slot }}
</form>
