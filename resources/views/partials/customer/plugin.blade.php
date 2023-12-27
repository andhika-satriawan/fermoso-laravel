{{-- Sweetalert2 --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
@if ($message = Session::get('success'))
    <script type="text/javascript">
        Swal.fire({
            icon: 'success',
            title: 'Success..',
            text: '{{ $message }}',
        })
    </script>
@endif
@if ($message = Session::get('error'))
    <script type="text/javascript">
        Swal.fire({
            icon: 'error',
            title: 'Error..',
            text: '{{ $message }}',
        })
    </script>
@endif
{{-- END - Sweetalert2 --}}
