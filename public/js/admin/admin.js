$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function readURL1(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view1')
                a.attr('src', e.target.result);
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img1").change(function() {
        readURL1(this);
    });
    function readURL2(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view2')
                a.attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img2").change(function() {
        readURL2(this);
    });

    function readURL3(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view3')
                a.attr('src', e.target.result);
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img3").change(function() {
        readURL3(this);
    });
    function readURL4(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view4')
                a.attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img4").change(function() {
        readURL4(this);
    });

    function readURL5(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view5');
                a.attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img5").change(function() {
        readURL5(this);
    });


    function readURL6(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view6');
                a.attr('src', e.target.result)
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img6").change(function() {
        readURL6(this);
    });


    function readURL7(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view7');
                a.attr('src', e.target.result)
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img7").change(function() {
        readURL7(this);
    });


    function readURL8(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view8');
                a.attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img8").change(function() {
        readURL8(this);
    });



    function readURL9(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view9');
                a.attr('src', e.target.result);
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img9").change(function() {
        readURL9(this);
    });


    function readURL10(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view10');
                a.attr('src', e.target.result);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img10").change(function() {
        readURL10(this);
    });


    function readURL11(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view11');
                a.attr('src', e.target.result);
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img11").change(function() {
        readURL11(this);
    });



    function readURL12(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view12');
                a.attr('src', e.target.result);
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img12").change(function() {
        readURL12(this);
    });

    function readURL13(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view13');
                a.attr('src', e.target.result);

            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img13").change(function() {
        readURL13(this);
    });


    function readURL14(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                var a=$('#view14');
                a.attr('src', e.target.result);
                a.removeClass('hide');
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#img14").change(function() {
        readURL14(this);
    });


    $(".select option").val(function(idx, val) {
        $(this).siblings('[value="'+ val +'"]').remove();
    });
});