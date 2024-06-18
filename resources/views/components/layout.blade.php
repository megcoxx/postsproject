@include('partials.start')
<x-navbar /><br>
<div style="margin-left:35%;margin-right:35%">
    {{ $slot }}
</div>
@include('partials.end')
