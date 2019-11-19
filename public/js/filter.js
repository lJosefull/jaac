$(document).on('change', '.select', function () {
    $.ajaxSetup(
        {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    id = $(this).val();

    type = $(this).data('type')
    console.log("typo:", type)
    $.ajax({
        type: 'POST',
        url: 'select',
        dataType: 'json',
        data: { id: id, type: type },
        success: function (data) {
            switch (type) {
                case 1:
                    console.log("DATA:", data)
                    $('.opcionec').remove();
                    $.each(data, function (index, c) {
                        $('.select2').append('<option class="opcionec" value="' + c.id + '">' + c.name + '</option> ');

                    });
                    break;

                case 2:
                    console.log("DATA:", data)
                    $('.opcioned').remove();
                    $.each(data, function (index, c) {
                        $('.select3').append('<option class="opcioned" value="' + c.id_municipio + '">' + c.municipio + '</option> ');

                    });
                    break;

            }

        },
        error: function (data) {
            console.log("no funciona", data);
        }
    });
});




$(document).on('click', '.search', function () {

    $.ajaxSetup(
        {
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    var state = $("select[name='state']").val();
    var city = $("select[name='city']").val();
    var educacion = $("select[name='educacion']").val();
    var title = $("select[name='title']").val();


    $.ajax({
        type: 'POST',
        url: 'search',
        dataType: 'json',
        data: { state: state, city: city, educacion: educacion, title: title },
        success: function (data) {
            console.log(data)
            $('.section-search').show()
            $('.section-search .container .row .filter').remove();
            $.each(data, function (index, user) {

                $('.section-search .container .row').append(
                    ' <div class="col-md-4 filter"  ><div class="card"><img class="img-fluid" src="https://www.biography.com/.image/ar_1:1%2Cc_fill%2Ccs_srgb%2Cg_face%2Cq_auto:good%2Cw_300/MTU0NjQzOTk4OTQ4OTkyMzQy/ansel-elgort-poses-for-a-portrait-during-the-baby-driver-premiere-2017-sxsw-conference-and-festivals-on-march-11-2017-in-austin-texas-photo-by-matt-winkelmeyer_getty-imagesfor-sxsw-square.jpg" alt="Card image cap"><div class="card-body"><h4 class="card-title">'+user.name+'</h4><p class="card-text"></p><p class="card-text">'+user.education_name+'</p><p class="card-text">'+user.education_type_name+'</p><a href="/profile/'+user.id+'" class="btn btn-primary">Button</a></div></div></div> ');
                });
                 },
                 error:function(data){
                            console.log("no funciona", data);
                      }
                    });

                   });

