$(document).ready(function() {

    $('.btn-region').on('click', function() {
        $('.btn-region').each(function() {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
    });




    /*
     * Organization chart
     */
    var config = {
            container: "#chart",
            rootOrientation: 'NORTH',
            hideRootNode: true,
            connectors: {
                type: 'step',
                style: {
                    stroke: '#D9D9D9'
                }
            },
            node: {
                HTMLclass: 'category-chart-node'
            },
            siblingSeparation: 20
        },
        root_node = {},
        button_junior = {
            nodeAlign: 'TOP',
            parent: root_node,
            innerHTML: '<span class="btn-close"></span><button type="button" class="btn btn-default btn-classification active">Juniors</button>'
        },
        button_senior = {
            parent: root_node,
            innerHTML: '<span class="btn-close"></span><button type="button" class="btn btn-default btn-classification ">Seniors</button>'
        },
        full = {
            parent: button_junior,
            image: "../public/src/image/category-icon/court-icons/full-off.jpg",
            HTMLclass: 'court-size-node'
        },
        mini_short = {
            parent: button_junior,
            image: "../public/src/image/category-icon/court-icons/mini-short-off.jpg",
            HTMLclass: 'court-size-node'
        },
        _3_4 = {
            parent: button_junior,
            image: "../public/src/image/category-icon/court-icons/3_4-off.jpg",
            HTMLclass: 'court-size-node'
        },
        mini_long = {
            parent: button_junior,
            image: "../public/src/image/category-icon/court-icons/mini-long-off.jpg",
            HTMLclass: 'court-size-node'
        },
        mini_serve = {
            parent: button_junior,
            // stackChildren: true,
            image: "../public/src/image/category-icon/court-icons/mini-serve-off.jpg",
            HTMLclass: 'court-size-node'
        },
        gender_male = {
            parent: full,
            innerHTML: '<span class="btn-close"></span><button type="button" class="btn btn-default btn-gender ">Male</button>'
        },
        gender_female = {
            parent: full,
            innerHTML: '<span class="btn-close"></span><button type="button" class="btn btn-default btn-gender ">Female</button>'
        },
        gender_mixed = {
            parent: full,
            innerHTML: '<span class="btn-close"></span><button type="button" class="btn btn-default btn-gender ">Mixed</button>'
        },
        type_male_single = {
            parent: gender_male,
            innerHTML: '<span class="btn-close"></span><span>Single</span>',
            HTMLclass: 'gender-node'
        },
        type_male_double = {
            parent: gender_male,
            innerHTML: '<span class="btn-close"></span><span>Double</span>',
            HTMLclass: 'gender-node'
        },
        type_female_single = {
            parent: gender_female,
            innerHTML: '<span class="btn-close"></span><span>Single</span>',
            HTMLclass: 'gender-node'
        },
        type_female_double = {
            parent: gender_female,
            innerHTML: '<span class="btn-close"></span><span>Double</span>',
            HTMLclass: 'gender-node'
        },
        new_category_buton_1 = {
            parent: type_male_single,
            HTMLclass: 'new-category-button-container',
            innerHTML: '<span class="new-category-button">New Category</span>'
        },
        new_category_buton_2 = {
            parent: type_male_double,
            HTMLclass: 'new-category-button-container',
            innerHTML: '<span class="new-category-button">New Category</span>'
        },
        new_category_buton_3 = {
            parent: type_female_single,
            HTMLclass: 'new-category-button-container',
            innerHTML: '<span class="new-category-button">New Category</span>'
        },
        new_category_buton_4 = {
            parent: type_female_double,
            HTMLclass: 'new-category-button-container',
            innerHTML: '<span class="new-category-button">New Category</span>'
        }


    chart_config = [
        config,
        root_node,
        button_junior,
        button_senior,
        full,
        mini_short,
        _3_4,
        mini_long,
        mini_serve,
        gender_male,
        gender_female,
        gender_mixed,
        type_male_single,
        type_male_double,
        type_female_single,
        type_female_double,
        new_category_buton_1,
        new_category_buton_2,
        new_category_buton_3,
        new_category_buton_4
    ];
    var category_chart = new Treant(chart_config, (function() {
        $('.btn-classification').on('click', function(e) {
            $('.btn-classification').each(function() {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            var left = $(this).offset().left;
            console.log($(this).position());
            console.log($(this).offset());
            $("#courtsize-dialog").css({
                'position': 'absolute',
                'left': left - 1100,
                'top': '95px'
            }).show("slow");
        });

        $('.btn-gender').on('click', function(e) {
            $('.btn-gender').each(function() {
                $(this).removeClass('active');
            });
            $(this).addClass('active');
            $("#competition-type-dialog").css({
                'position': 'absolute',
                'left': $(this).offset().left - 300,
                'top': '330px'
            }).show("slow");
        });

        $(".close-thik").on('click', function() {
            // $('#courtsize-dialog').fadeOut();
            $(this).closest('.dialog').fadeOut();
        });
        $('.btn-close-dialog').on('click', function() {
            // $('#courtsize-dialog').fadeOut();
            $(this).closest('.dialog').fadeOut();
        });
        $('.btn-close').on('click', function(){
            $('#confirmModal').modal();
        })
    }), $);
    /*
     * End Organization chart
     */
});
