@push('stylesheets')
    <link rel="stylesheet" href="{{ asset("/summernote/css/summernote.css") }}">
@endpush
@push('footscripts')
    <script src="{{ asset("/summernote/js/summernote.min.js") }}"></script>
    <script src="{{ asset("/summernote/js/summernote-ext-highlight.js") }}"></script>
    <script>
        $(document).ready(function() {
            @component('summernote::setupSummernote')
            @endcomponent
        });
    </script>
@endpush