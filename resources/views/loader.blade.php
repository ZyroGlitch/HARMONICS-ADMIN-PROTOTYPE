@extends('components.app')

@section('content')
    <div class="building-blocks">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <script>
        // Set a timer for 5 seconds (5000 milliseconds)
        setTimeout(function() {
            window.location.href = '{{ route('view.dashboard') }}';
        }, 5000);
    </script>
@endsection
