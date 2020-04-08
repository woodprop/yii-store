jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });

    var navoffeset=$(".agileits_header").offset().top;
    $(window).scroll(function(){
        var scrollpos=$(window).scrollTop();
        if(scrollpos >=navoffeset){
            $(".agileits_header").addClass("fixed");
        }else{
            $(".agileits_header").removeClass("fixed");
        }
    });

    $(".dropdown").hover(
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');
        }
    );

    /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

    $().UItoTop({ easingType: 'easeOutQuart' });


    $('.button-show-cart').on('click', getCart);
    $('.button-clear-cart').on('click', clearCart);
    $('.button-checkout').on('click', () => location.href = '/cart/checkout');

    function showCart(cart) {
        $('#cart-modal .modal-body').html(cart);
        $('#cart-modal').modal();
    }

    function getCart(){
        $.ajax({
            url: '/cart/show',
            type: 'GET',
            success: (res) => {
                showCart(res)
            },
            error: () => alert('ERROR'),

        });
    }

    function clearCart(){
        $.ajax({
            url: '/cart/clear',
            type: 'GET',
            success: (res) => {
                showCart(res)
            },
            error: () => alert('ERROR'),

        });
    }


    $('.add-to-cart-btn').on('click', function () {
        let id = $(this).data('id');
        $.ajax({
            url: '/cart/add',
            data: {id: id},
            type: 'GET',
            success: (res) => {
                showCart(res)
            },
            error: () => alert('ERROR'),

        });
        return false;
    });

    $('.modal-body').on('click', '.cart-del-item-btn', function () {
        console.log('ok');
        let id = $(this).data('id');
        $.ajax({
            url: '/cart/delete-item',
            data: {id: id},
            type: 'GET',
            success: (res) => {
                showCart(res)
            },
            error: () => alert('ERROR'),

        });
    });


});

$(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
            $('body').removeClass('loading');
        }
    });



});

paypal.minicart.render();

paypal.minicart.cart.on('checkout', function (evt) {
    var items = this.items(),
        len = items.length,
        total = 0,
        i;

    // Count the number of each item in the cart
    for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
    }

    if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
    }
});