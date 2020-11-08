@if(session($name))
<div class="alert alert-{{$type}} alert-dismissible bg-{{$type}} text-white border-0 fade show mt-3" role="alert" id="alert-{{$id = rand(111,999)}}">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{$message ?? session($name)}}
    {{$slot}}
</div>
<script>
    setTimeout(() => {
        $('#alert-{{$id}}').slideUp()
    }, 4000);
</script>
@endif
