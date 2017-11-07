$(document).ready(function() {

    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;
        $(".sidebar a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("a").addClass("active");
            }
        });

        $(".sidebar-child-third a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("a").addClass("active");
                // $(this).closest("ul").slideToggle();
            }
        });
    });

    $('[data-toggle-slide]').on('click', function(e) {
        e.preventDefault();
        $('.caret').each(function() {
                $(this).removeClass('up');

            })
            // $(this).toggleClass('up');  
        $('.sidebar-child-second li').not(this).find('ul').hide();
        // $('.sidebar-child-second li span').toggleClass('up');
        // $(this).closest('span').toggleClass('up');
        $(this).next('ul').slideToggle();
        $(this).find('span').toggleClass('up');

    });

    $('.sidebar-child-third').find('li').find('a').on('click', function(){
        $(this).closest('li').find('ul').slideToggle();
    });

    (function($) {
        $.fn.onEnter = function(func) {
            this.bind('keypress', function(e) {
                if (e.keyCode == 13) func.apply(this, [e]);
            });
            return this;
        };
    })(jQuery);

    // $("#bt-submit-login").on("click", function(){
    //     console.log('click');
    //     $(".fa-spinner").removeClass("hidden");
    // });



    $("#login-form").validate({

        submitHandler: function(form) {
            var formData = new FormData($('#login-form')[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });

            $.ajax({
                type: "POST",
                url: 'login',
                data: formData,
                dataType: 'json',
                beforeSend: function() { $(".fa-spinner").removeClass("hidden") },
                async: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.status === "error") {
                        $('.view-error').css('display', 'block');
                        $('.error-message').html(data.msg);
                        $(".fa-spinner").addClass('hidden');
                    } else {
                        window.location.href = "./organization";
                    }
                },
                error: function(data) {

                },
                complete: function() {
                    $(".fa-spinner").addClass("hidden");
                }
            });
        }
    });




    // open modal create new club
    $("#btn-create-new-club").on("click", function() {
        $("#newClubModal").modal();
        $("#addVenueModal").modal('hide');
    });
    //end
    $("#club-control").mCustomScrollbar({
        axis: "y"
    });

    // $("#competition-category-junior-table").mCustomScrollbar({
    // });

    $("#competition-setup-modal-table-scroll").mCustomScrollbar({
        axis: "y"
    });
    $("#table-scroll").mCustomScrollbar({
        axis: "x"
    });
    $("#table-scroll2").mCustomScrollbar({
        axis: "x"
    });


    $(".btn-hamburger").on("click", function() {
        $("body").toggleClass("hide-sidebar");
    });

    // add the rule for select
    $.validator.addMethod("valueNotEquals", function(value, element, arg) {
        return arg != value;
    }, "Value must not equal arg.");
    $.validator.setDefaults({
        ignore: []
    });

    $("#pic_position").change(function() {
        option_value = $("#pic_position option:selected").text();
        if (option_value == "Other") {
            $("#other_position").removeClass("hidden");
            $("#pic_other_position").attr("required", "true");

        } else {
            $("#other_position").addClass("hidden");
            // $("#pic_other_position").val("");
            // $("#pic_other_position").attr("required", "false");
        }
    })

    $("#addSubOrganizationModal #pic_position").change(function() {
        option_value = $("#addSubOrganizationModal #pic_position option:selected").text();
        if (option_value == "Other") {
            $("#addSubOrganizationModal #other_position").removeClass("hidden");
            $("#addSubOrganizationModal #pic_other_position").attr("required", "true");

        } else {
            $("#addSubOrganizationModal #other_position").addClass("hidden");
            // $("#pic_other_position").val("");
            $("#pic_other_position").attr("required", "false");
        }
    });

    $("#form-organization").validate({

        submitHandler: function(form) {

            var formData = new FormData($('#form-organization')[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });

            $.ajax({
                type: "POST",
                url: 'storeOrganization',
                data: formData,
                dataType: 'json',
                async: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.status === "error") {
                        showMessage("error", data.message);
                    } else {
                        // window.location.href = "./organization";
                        showMessage("sucess", data.message);
                    }
                },
                error: function(data) {

                }
            });
        }
    });

    $("#sub-organization-form").validate({

        submitHandler: function(form) {

            var formData = new FormData($('#sub-organization-form')[0]);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name="_token"]').val()
                }
            });

            $.ajax({
                type: "POST",
                url: 'storeSubOrganization',
                data: formData,
                dataType: 'json',
                async: false,
                processData: false,
                contentType: false,
                success: function(data) {
                    if (data.status === "error") {
                        showMessage("error", data.message);
                    } else {
                        // window.location.href = "./organization";
                        showMessage("sucess", data.message);
                    }
                },
                error: function(data) {

                }
            });
        }
    });

    $('#btn-remove-logo').on('click', function() {
        var img = document.getElementById("thumbnil");
        var default_url = $(img).data('defaultUrl');
        img.src = default_url;
    });
    $("#addSubOrganizationModal").find("#btn-remove-logo").on('click', function() {
        var img = document.getElementById("sub_thumbnil");
        var default_url = $(img).data('defaultUrl');
        img.src = default_url;
    });

    $(".add-new-level-link").on('click', function() {
        $("#newLevelModal").modal();
    });
    $(".btn-edit-ranking").on('click', function() {
        $("#rankingModal").modal();
    });
    $(".btn-edit-price").on('click', function() {
        $("#editPriceModal").modal();
    });
    $(".btn-edit-age").on('click', function() {
        $("#editAgeModal").modal();
    });
    $(".btn-create-new-stage").on('click', function() {
        $("#newStageModal").modal();
    });
    $(".btn-add-sub-organization").on('click', function() {
        $("#addSubOrganizationModal").modal();
    });
    $("#btn-start-new-organization").on('click', function() {
        window.location.href = $(this).data('href');
    });
    $(".btn-new-classification").on('click', function() {
        $('#newClassificationModal').modal();
    });
    $('.btn-add-venue').on('click', function() {
        $("#addVenueModal").modal();
    });
    $('.btn-new-area').on('click', function() {
        $("#newAreaModal").modal();
    });

    (function() {
        var id_ = 'drag-zone';
        var boxes_ = document.querySelectorAll('#' + id_ + ' .drag-box');
        var dragSrcEl_ = null;

        this.handleDragStart = function(e) {
            e.dataTransfer.effectAllowed = 'move';
            e.dataTransfer.setData('text/html', this.innerHTML);

            dragSrcEl_ = this;

            // this.style.opacity = '0.5';

            // this/e.target is the source node.
            // this.addClassName('moving');
        };

        this.handleDragOver = function(e) {
            if (e.preventDefault) {
                e.preventDefault(); // Allows us to drop.
            }

            e.dataTransfer.dropEffect = 'move';

            return false;
        };

        this.handleDragEnter = function(e) {
            // this.addClassName('over');
        };

        this.handleDragLeave = function(e) {
            // this/e.target is previous target element.

            // this.removeClassName('over');
        };

        this.handleDrop = function(e) {
            // this/e.target is current target element.

            if (e.stopPropagation) {
                e.stopPropagation(); // stops the browser from redirecting.
            }

            // Don't do anything if we're dropping on the same box we're dragging.
            if (dragSrcEl_ != this) {
                dragSrcEl_.innerHTML = this.innerHTML;
                this.innerHTML = e.dataTransfer.getData('text/html');
            }

            return false;
        };

        this.handleDragEnd = function(e) {
            // this/e.target is the source node.
            this.style.opacity = '1';

            [].forEach.call(boxes_, function(box) {
                // box.removeClassName('over');
                // box.removeClassName('moving');
            });
        };

        [].forEach.call(boxes_, function(box) {
            box.setAttribute('draggable', 'true'); // Enable boxes to be draggable.
            box.addEventListener('dragstart', this.handleDragStart, false);
            box.addEventListener('dragenter', this.handleDragEnter, false);
            box.addEventListener('dragover', this.handleDragOver, false);
            box.addEventListener('dragleave', this.handleDragLeave, false);
            box.addEventListener('drop', this.handleDrop, false);
            box.addEventListener('dragend', this.handleDragEnd, false);
        });
    })();

    $('.hide-column').on('click', function() {
        $(this).closest("td").addClass('hide');
        var col_class_name = $(this).closest("a").attr('class').split(' ')[1];
        var table_id = $(this).closest("table").attr('id');
        $('#' + table_id).find('td.' + col_class_name).addClass('hide');
    });

    $('.ui.dropdown').dropdown();




});


function isEmail(email) {
    var regex = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;;
    return regex.test(email);
}

function showMessage(status, msg) {

    if (status == "error") {
        $('#view-message').removeClass('success');
        $('#view-message').addClass('error');
    } else {
        $('#view-message').removeClass('error');
        $('#view-message').addClass('success');
    }

    $('.view-message').css('display', 'block');
    $('.view-message').html(msg);
    $('html,body').animate({
            scrollTop: $("#view-message").offset().top
        },
        'slow');
}

function showMyImage(fileInput, img_id) {
    var files = fileInput.files;
    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var imageType = /image.*/;
        if (!file.type.match(imageType)) {
            continue;
        }
        var img = document.getElementById(img_id);
        img.file = file;
        var reader = new FileReader();
        reader.onload = (function(aImg) {
            return function(e) {
                aImg.src = e.target.result;
            };
        })(img);
        reader.readAsDataURL(file);
    }
}

// $(function() {
//         $("#pass-login").onEnter(function() {
//             login();
//         });
//     });
// $("#bt-submit-login").on('click', function(e) {

//     login();
//     // $('#form-login').submit();
// }); 

// function login() {
//     var email = $("#email-login").val();
//     var pass = $("#pass-login").val();

//     if (email == "" && pass == "") {
//         $('.view-error').css('display', 'block');

//         $('.view-error span').html('Your email / password is incorrect! Please try again.');
//         return false;
//     }

//     if (email != "") {
//         var validate = isEmail(email);

//         if (!validate) {
//             $('.view-error').css('display', 'block');
//             $('.view-error span').html('Your email / password is incorrect! Please try again.');

//             return false;
//         }
//     }


//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-Token': $('input[name="_token"]').val()
//         }
//     });

//     $.ajax({

//         type: "POST",
//         url: './login',
//         data: { "email": email, "pass": pass },
//         dataType: 'json',
//         success: function(data) {
//             if (data.status === "error") {
//                 $('.view-error').css('display', 'block');
//                 $('.view-error').html(data.msg);
//             } else {
//                 window.location.href = "./organization_start";
//             }
//         },
//         error: function(data) {

//         }
//     })

// }
