@if ($errors->any())
<div>
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{ $error }}
    </div>
    @endforeach
</div>
@endif