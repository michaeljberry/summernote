@push('stylesheets')
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css">
@endpush
@push('footscripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            @component('summernote::setupSummernote')
            @endcomponent
        });
    </script>
@endpush