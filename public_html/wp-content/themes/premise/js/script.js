(function($) {
    $(document).ready(function() {
        bindHeader();
        customSelect();
        initSliders();
        initAccordions();
    });

    function initAccordions() {
        $('.accordion-button').click(function(e) {
            e.preventDefault();
            var $this = $(this)
            var $accordion = $this.parents('.accordion');
            if(!$this.parents('.accordion-item').hasClass('active')) {
                $accordion
                    .find('.active')
                    .removeClass('active')
                    .find('.collapse')
                    .slideUp(function() {
                        $this
                            .parents('.accordion-item')
                            .addClass('active')
                            .find('.collapse')
                            .slideDown();
                    });
            }
        });
    }

    function bindHeader() {
        $('.mm-trigger').click(function() {
            $('.main').toggle();
        });
    }

    function customSelect() {
        $('select').each(function(){
            var $this = $(this), numberOfOptions = $(this).children('option').length;
            $this.addClass('select-hidden'); 
            $this.wrap('<div class="select"></div>');
            $this.after('<div class="select-styled" tabindex="0"></div>');

            var $styledSelect = $this.next('div.select-styled');
            $styledSelect.text($this.children('option').eq(0).text());

            var $list = $('<ul />', {
                'class': 'select-options'
            }).insertAfter($styledSelect);

            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).text(),
                    rel: $this.children('option').eq(i).val(),
                    class: $this.children('option').eq(i).attr("class"),
                    tabindex: "0"
                }).appendTo($list);
            }

            var $listItems = $list.children('li');

            $styledSelect.click(function(e) {
                e.stopPropagation();
                $('div.select-styled.active').not(this).each(function(){
                    $(this).removeClass('active').siblings('ul.select-options').slideToggle(200).removeClass('open');
                });
                $(this).toggleClass('active').siblings('ul.select-options').slideToggle(200).toggleClass('open');
            });

            $listItems.click(function(e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel')).change();
                $list.slideUp(200).removeClass('open');
            });

            $(document).click(function() {
                $styledSelect.removeClass('active');
                $list.slideUp(200).removeClass('open');
            });
        });
    }

    function initSliders() {
        $('.slider').slick({
            slidesToShow    : 1,
            slidesToScroll  : 1,
            variableWidth   : true,
            autoplay        : true,
            autoplaySpeed   : 2000,
            infinite        : true,
            arrows          : false,
            focusOnSelect   : true,
            centerMode      : true,
        });
    }

})( jQuery )
