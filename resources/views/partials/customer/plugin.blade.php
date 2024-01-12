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
@if ($message = Session::get('login-success'))
    <script type="text/javascript">
        Swal.fire({
            html: '<a href="{{ url('/cara-belanja') }}"><img src="/customer/assets/images/cara-belanja.png"/></a>',
            button: true,
            confirmButtonText: "X",
        })
        $(".swal2-modal").css('background-color', 'transparent');
        $(".swal2-confirm").css({
            'position': 'absolute',
            'top': '0',
            'right': '0',
            'background': '#FFF',
            'color': '#7a7373',
            'font-size': '16px',
            'padding': '5px 10px',
            'border-radius': '50%'
        });
        $(".swal2-popup").css('width', '45em');
    </script>
@endif
@if ($message = Session::get('add-cart-success'))
    <script type="text/javascript">
        Swal.fire({
            html: '<img src="{{ url('/customer/assets/images/icon-cart-option2.png') }}" /><p id="text-cart">Product telah ditambahkan ke keranjang belanja</p>',
            showConfirmButton: false,
            timer: 3000,
            onClose: function() {
                location.reload(true);
            }
        });

        $(".swal2-modal").css('background-color', 'rgba(0, 0, 0, 0.5)');
        $(".swal2-popup").css({
            'width': '45em',
            'padding': '4em 1em'
        });
        $("#text-cart").css({
            'color': '#fff',
            'font-size': '18px',
            'padding-top': '20px'
        });
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
