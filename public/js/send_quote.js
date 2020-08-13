$('#quote').on('click', function(){
    let origin = $('#origin_input').val();
    let destination = $('#destination_input').val();
    let shipping_method = $('#shipping_method').val()
    let distance = $('#distance').val();
    let cost = $('#cost').val();
    let name = $('#name').val();
    let phone = $('#phone').val();
    let email = $('#email').val();

    if(
        origin == '' ||
        destination == '' ||
        shipping_method == '' ||
        distance == '' ||
        cost == '' ||
        name == '' ||
        phone == '' ||
        email == ''

    ) {
        Swal.fire(
            'Atención!',
            'Complete todos los campos!',
            'warning'
        )


        $('input[type="text"]:not(#distance,#cost)').each(function(){
            if(!$(this).val()){
                $(this).addClass("error");
            } else{
                $(this).removeClass("error");
            }
        });

        if($('#shipping_method').val() == '') {

            $('#shipping_method').addClass("error");
        } else {
            $('#shipping_method').removeClass("error");
        }

        return false;
    }

    if(! ValidateEmail(email)) {
        Swal.fire(
            'Atención!',
            'Verifique que la dirección de email, sea válida',
            'warning'
        )
        return false;
    }

    $(this).prop("disabled", true);

    // add spinner to button
    $(this).html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando Solicitud...`
    );

    let button = $(this);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type:'POST',
        url: $('meta[name="quote_store_route"]').attr('content'),
        data:{
            origin,
            destination,
            shipping_method: $('#shipping_method option:selected').text(),
            distance,
            cost,
            name,
            phone,
            email
        },
        success(data){
            Swal.fire(
                'Perfecto!',
                'Nos comunicaremos contigo para coordinar el envío!',
                'success'
            ).then((result) => {
                $('#exampleModalCenter').modal('hide')
            })
        },
        error(data){
            Swal.fire(
                'Upss!',
                'Hubo un error...vuelve a intentarlo más tarde.',
                'warning'
            ).then((result) => {
                $('#exampleModalCenter').modal('hide')
            })
        },
        complete(data) {
            button.prop("disabled", false);

            // remove spinner from button
            button.html(
                `Solicitar Servicio`
            );
        }
    });
})
