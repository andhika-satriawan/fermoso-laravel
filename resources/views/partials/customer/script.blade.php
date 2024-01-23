<script type="text/javascript" src="{{ asset('customer/assets/lib/jquery/jquery-1.11.2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/assets/lib/select2/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/assets/lib/jquery.bxslider/jquery.bxslider.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/assets/lib/owl.carousel/owl.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/assets/lib/jquery.countdown/jquery.countdown.min.js') }}">
</script>
<script type="text/javascript" src="{{ asset('customer/assets/js/jquery.actual.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('customer/assets/js/theme-script.js') }}"></script>

@auth
    <script>
        // setInterval(function() {
        // }, 5000); 

        $.ajax({
            type: 'GET',
            url: '{{ route('api.cart') }}',
            data: {
                _token: $('meta[name="csrf-token"]').attr('content')
            },
            dataType: 'JSON',
            error: function(error) {
                console.log(error);
                // Swal.fire("Error!", 'Something is wrong', "error");
            },
            success: function(response) {
                if (response.success == true) {

                    const responseData = response.data;

                    if (responseData.length > 0) {
                        $('#cart-block .cart-block').show();

                        const cartTotal = responseData.reduce((curr, next) => {
                            return curr + (next.quantity * next.product_detail.price)
                        }, 0);
                        $('#cart-block span.total').text(
                            `${responseData.length} item${responseData.length > 0 ? `s` : ''}`)
                        $('#cart-block span.notify').text(`${responseData.length}`)

                        $('#cart-block h5.cart-title').text(`${responseData.length} Item di Keranjang Saya`);

                        const cartBlockList = responseData.map((e) => {
                            return `
                            <li class="product-info">
                                <div class="p-left">
                                    <a href="{{ url('product') }}/${e.product.slug}">
                                        <img class="img-responsive"
                                            src="{{ Storage::url('') }}${e.product.photo}"
                                            alt="p10">
                                    </a>
                                </div>
                                <div class="p-right">
                                    <p class="p-name">${e.product.name}</p>
                                    <p class="p-rice">Rp ${parseInt(e.product_detail.price).toLocaleString()}</p>
                                    <p>Qty: ${e.quantity}</p>
                                </div>
                            </li>
                        `;
                        });
                        $('#cart-block .cart-block .cart-block-list ul').html('')
                            .prepend(cartBlockList);

                        $('#cart-block .cart-block .total-cart .total-price').text(
                            `Rp ${parseInt(cartTotal).toLocaleString()}`)

                    } else {
                        $('#cart-block .cart-block').hide();
                        $('#cart-block span.total').text(`0 items`)
                        $('#cart-block span.notify').text(`0`)
                        $('#cart-block h5.cart-title').text(`0 Item di keranjang saya`);
                    }


                    // $('#cart-block').html('')
                    // .prepend(categoryMenuList);

                    if ($('#cartSummary').length) {

                    }

                    // const 
                    // SUCCESS
                    // Swal.fire({
                    //     title: 'Deleted successfully!',
                    //     text: response.message,
                    //     icon: 'success',
                    //     showCancelButton: false,
                    //     confirmButtonText: 'OK'
                    // }).then((result) => {
                    //     if (result.isConfirmed == true) {
                    //         location.reload();
                    //     }
                    // })
                    // END SUCCESS DELETE

                } else {
                    console.log(response)
                    // Swal.fire("Error!", response.message, "error");
                }
            }
        })

        $('#cartSummary .cart-increase').on('click', async function() {
            const itemPrice = await $(this).attr("data-item-price");
            const quantityBefore = await $(this).siblings('.cart-quantity').val();
            const addQuantity = await $(this).siblings('.cart-quantity').val(parseInt(quantityBefore) + 1);
            // const consoleLog = await console.log('Increased');
            const quantityAfter = await $(this).siblings('.cart-quantity').val();
            const setTotal = await $(this).closest('.cart-item').find('.total-item-price').html('').prepend(
                `<span>Rp ${(quantityAfter * itemPrice).toLocaleString()}</span>`);
            const triggerChange = await $(this).siblings('.cart-quantity').trigger('change');
        });

        $('#cartSummary .cart-decrease').on('click', async function() {
            const itemPrice = await $(this).attr("data-item-price");
            const quantityBefore = await $(this).siblings('.cart-quantity').val();
            if (quantityBefore > 1) {
                const addQuantity = await $(this).siblings('.cart-quantity').val(parseInt(quantityBefore) - 1);
                // const consoleLog = await console.log('Decreased');
                const quantityAfter = await $(this).siblings('.cart-quantity').val();
                const setTotal = await $(this).closest('.cart-item').find('.total-item-price').html('').prepend(
                    `<span>Rp ${(quantityAfter * itemPrice).toLocaleString()}</span>`);
                const triggerChange = await $(this).siblings('.cart-quantity').trigger('change');
            }
        });

        $("#cartSummary .cart-quantity").change(function() {
            const quantity = $(this).val();
            const product_id = $(this).siblings('.cart-product-id').val();
            const product_detail_id = $(this).siblings('.cart-product-detail-id').val();

            console.log('quantity');
            console.log(quantity);
            console.log('product_id');
            console.log(product_id);
            console.log('product_detail_id');
            console.log(product_detail_id);

            $.ajax({
                type: 'POST',
                url: '{{ route('api.cart.store_api') }}',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    set_quantity: quantity,
                    product_id: product_id,
                    product_detail_id: product_detail_id,
                },
                dataType: 'JSON',
                error: function(error) {
                    console.log(error);
                    // Swal.fire("Error!", 'Something is wrong', "error");
                },
                success: function(response) {
                    if (response.success == true) {

                        location.reload();

                    } else {
                        console.log(response)
                        Swal.fire("Error!", response.message, "error");
                    }
                }
            })

        });
    </script>
@endauth
<script>
    // MENU LIST
    $.ajax({
        type: 'GET',
        url: '{{ route('api.product_category') }}',
        data: {
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'JSON',
        error: function(error) {
            console.log(error);
            // Swal.fire("Error!", 'Something is wrong', "error");
        },
        success: function(response) {
            if (response.success == true) {

                const responseData = response.data;

                const categoryMenuList = responseData.map((e) => {
                    return `
                        <li>
                            <a href="{{ url('product/category') }}/${e.slug}">
                                <img
                                    class="icon-menu" alt="${e.name}"
                                    src="{{ Storage::url('') }}${e.icon}" height="25px">
                                ${e.name}
                            </a>
                        </li>
                    `;
                });
                $('ul#categoryMenuList').html('')
                    .prepend(categoryMenuList);

                const selectCategory = responseData.map((e) => {
                    return `
                        <option class="level-0" value="${e.id}">${e.name}</option>
                    `;
                });
                $('#selectCategory').html('')
                    .prepend(`<option value="2" selected>All Categories</option>`)
                    .append(selectCategory)


            } else {
                console.log(response)
                // Swal.fire("Error!", response.message, "error");
            }
        }
    });

    $('form#formSubmission').submit(function(e) {
        $(this).find('button[type="submit"]').hide();
        $(this).find('.loader').show();
    });

    const deleteCartItem = (product_id, product_detail_id) => {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    type: 'DELETE',
                    url: '{{ route('cart.delete') }}',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        product_id: product_id,
                        product_detail_id: product_detail_id,
                    },
                    dataType: 'JSON',
                    error: function(error) {
                        console.log(error);
                        Swal.fire("Error!", 'Something is wrong', "error")
                            .then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                    },
                    success: function(response) {
                        // console.log(response);
                        if (response.success == true) {
                            Swal.fire("Success!", response.message, "success")
                                .then((result) => {
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });
                        } else {
                            Swal.fire("Error!", response.message, "error").then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            });
                        }
                    }
                });
            }
        });
    }
</script>
