@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div id="errors" style="display: none;">
    <div class="alert alert-danger">
        <ul></ul>
    </div>
</div>