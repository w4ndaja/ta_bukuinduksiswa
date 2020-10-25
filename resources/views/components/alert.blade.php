@if(session($name))
<div class="alert alert-{{$type}} alert-dismissible bg-{{$type}} text-white border-0 fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{$message ?? session($name)}}
    {{$slot}}
</div>
@endif
