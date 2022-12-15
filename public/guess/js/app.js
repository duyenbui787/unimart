$(document).ready(function() {
        $('.nav-link.active .sub-menu').slideDown();
        // $("p").slideUp();

        $('#sidebar-menu .arrow').click(function() {
            $(this).parents('li').children('.sub-menu').slideToggle();
            $(this).toggleClass('fa-angle-right fa-angle-down');
        });

        $("input[name='checkall']").click(function() {
            var checked = $(this).is(':checked');
            $('.table-checkall tbody tr td input:checkbox').prop('checked', checked);
        });

        //Header
        $('ul.menu-header-left li a').click(function() {
            if (!$(this).hasClass('active')) {
                $('ul.menu-header-left li a').removeClass('active');
                $(this).addClass('active');
            }
        })
        $('#toggle').click(function() {
            $('.menu-responsive').toggle();
        });
        $('.close').click(function() {
            $('.menu-responsive').hide();
        });

        //MENU RESPONSIVE
        $('.item-title').click(function() {
            $(this).next('.item-content-wp').toggle() && $(this).children('.icon-plus').toggle() && $('.icon-minus').show();


        })
        $('.item-title-sub').click(function() {
            $('.icon-circle').removeClass('active');
            $(this).next('.sub-menu').toggle() && $(this).children('.icon-plus-sub').toggle() && $('.icon-minus-sub').show() &&
                $(this).find('.icon-circle').toggleClass('active');
            // return false;
        })
        $(window).scroll(function() {
            $('.menu-responsive').hide();
        });
        //Banner
        $('.discount-outside').click(function() {

            $('.icon-arrow').toggleClass('open');
            if ($('.icon-arrow').hasClass('open')) {
                $('.discount-inside').toggle() && $('.discount-outside').offset({
                    left: 875
                }) && $('#discount-wp').offset({
                    left: 910
                });
            } else {
                $('.discount-inside').hide() && $('.discount-outside').offset({
                    left: 1485
                })
            }
        })


        //Btn-top
        $(window).scroll(function() {
            if ($(this).scrollTop()) {
                $('#btn-top').fadeIn();
            } else {
                $('#btn-top').fadeOut();
            }
        });
        $('#btn-top').click(function() {
            $('html,body').animate({ scrollTop: 0 }, 500);
        });

        //LiST THUMB
        $('ul.list-thumb li').removeClass('active');
        $('ul.list-thumb li:first-child').addClass('active');
        $('ul.list-thumb li').click(function() {
            var src_img = $(this).find('img').attr('src');
            $('.show-picture img').attr('src', src_img);
            $('ul.list-thumb li').removeClass('active');
            $(this).addClass('active');
        });

        // $('ul.list-thumb li').click(function() {
        //     var src_img = $(this).find('img').attr('src');
        //     $('.show-picture img').attr('src', src_img);

        // })



    })
    // amount
let amountElement = document.getElementById('amount')
let amount = amountElement.value

let render = (amount) => {
        amountElement.value = amount
    }
    //Handle Plus
let handlePlus = () => {
        amount++
        render(amount);
    }
    //Handle Minus
let handleMinus = () => {
    if (amount > 1)
        amount--
        render(amount);
}

amountElement.addEventListener('input', () => {
    amount = amountElemet.value;
    amount = parseInt(amount);
    amount = (isNaN(amount) || amount == 0) ? 1 : amount;
    render(amount);
});