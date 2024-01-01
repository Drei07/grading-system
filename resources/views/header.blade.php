<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-LXkTb2WJzfQosXHlM5fDZtWysQb9KTq3zH2e5pM5tW9SRi5/iZiG1B/6nc2m/RZyLlJGeQY9JW7jD3R9xqq%2Bmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- Include SweetAlert script -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Check if there is a status message in the session -->
@if(session('status_code'))
<script>
    // Display SweetAlert when the page is loaded
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: '{{ session('status_code') }}',
            title: '{{ session('status_title') }}',
            text: '{{ session('status') }}',
            timer: {{ session('status_timer') }},
            showConfirmButton: false,
        });
        // Remove the session data after displaying SweetAlert
        @php
            session()->forget('status_title');
            session()->forget('status');
            session()->forget('status_code');
            session()->forget('status_timer');
        @endphp
    });
</script>
@endif
