<div class="breadcrumb-env">
@if ($breadcrumbs)
    <ul class="breadcrumb bc-1">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <li><a href="{{{ $breadcrumb->url }}}">{{{ $breadcrumb->title }}}</a></li>
            @else
            <li class="active"><strong>{{{ $breadcrumb->title }}}</strong></li>
            @endif
        @endforeach
    </ul>
@endif
</div>