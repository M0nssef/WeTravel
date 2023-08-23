@props(['type'])
<div class="alert-{{$type}}" >
    <div class="alert alert-{{$type}}">
        {{$slot}}
    </div>
</div>