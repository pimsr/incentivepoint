$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
        $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    var $subMenu = $(this).next(".dropdown-menu");
    $subMenu.toggleClass('show');


    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass("show");
    });


    return false;
});

if ($(window).width() > 992){
  jQuery(function($) {
    $('.navbar .dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideDown();

    }, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).delay(0).slideUp();

    });

    $('.navbar .dropdown > a').click(function(){
    location.href = this.href;
    });

    });
}


(function($) {
    $.fn.checkFileType = function(options) {
        var defaults = {
            allowedExtensions: [],
            success: function() {},
            error: function() {}
        };
        options = $.extend(defaults, options);

        return this.each(function() {

            $(this).on('change', function() {
                var value = $(this).val(),
                    file = value.toLowerCase(),
                    extension = file.substring(file.lastIndexOf('.') + 1);

                if ($.inArray(extension, options.allowedExtensions) == -1) {
                    options.error();
                    $(this).focus();
                } else {
                    options.success();

                }

            });

        });
    };

})(jQuery);

 // dropdown 
jQuery('.help-click.dropdown-toggle').on('click', function (e) {
  $(this).next().toggle();
});
jQuery('dropdown-menu.help-content.show').on('click', function (e) {
  e.stopPropagation();
});

if(1) {
  $('body').attr('tabindex', '0');
}
else {
  alertify.confirm().set({'reverseButtons': true});
  alertify.prompt().set({'reverseButtons': true});
}

// dropdown 
jQuery('.btn-1').on('click', function (e) {
  $('.help-click.dropdown-toggle').next().toggle();
});


jQuery('.help-box-button').on('click', function (e) {
    $('.help-box').slideDown("slow");
     
});

jQuery('.help-box .close').on('click', function (e) {
    $('.help-box').slideUp("slow");
     
});


$(document).ready(function () {

    $('.sublevel').click(function () {
        $(this).find('.container_custom1').toggle();
    });

});

jQuery('.menu-cate').on('click', function (e) {
    $('#sidebar').toggleClass('active');

});