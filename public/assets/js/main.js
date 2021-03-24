$(document).ready(function () {
  $(".header-slider").slick({
    speed: 500,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
  });

  $(".new-ads-slider").slick({
    dots: true,
    infinite: false,
    touchMove: true,
    swipe: true,
    swipeToSlide: true,
    speed: 200,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    loop: true,
    arrows: false,
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        },
      },
    ],
  });

  $(".main-department-slider").slick({
    dots: true,
    infinite: false,
    speed: 200,
    touchMove: true,
    swipe: true,
    swipeToSlide: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: false,
    loop: false,
    arrows: false,
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        },
      },
    ],
  });

  $(".department-slider").slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    loop: true,
    arrows: false,
    infinite: true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 3,
          infinite: true,
          dots: true,
        },
      },
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
          dots: true,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        },
      },
    ],
  });

  $(".slider-top").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    dots: false,
    asNavFor: ".slider-bottom",
  });
  $(".slider-bottom").slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ".slider-top",
    dots: false,
    centerMode: false,
    focusOnSelect: true,
  });

  // AOS.init();

  if (
    typeof window.location.hash != "undefined" &&
    window.location.hash == "#account-ads"
  ) {
    $("#v-pills-profile-tab").click();
  }

  if (
    typeof window.location.hash != "undefined" &&
    window.location.hash == "#account-info"
  ) {
    $("#v-pills-home-tab").click();
  }

  if (
    typeof window.location.hash != "undefined" &&
    window.location.hash == "#fav-ads"
  ) {
    $("#v-pills-messages-tab").click();
  }

  if ($(".personal-img").length) {
    $(document).on("change", ".personal-img-file", function () {
      var uploadFile = $(this);
      var files = !!this.files ? this.files : [];
      if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support

      if (/^image/.test(files[0].type)) {
        // only image file
        var reader = new FileReader(); // instance of the FileReader
        reader.readAsDataURL(files[0]); // read the local file

        reader.onloadend = function () {
          // set image data as background of div
          //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
          uploadFile
            .closest(".personal-img")
            .find(".per")
            .css("background-image", "url(" + this.result + ")");
          $(".personal-img-validation-delete").css("display", "block");
        };
      }
    });

    $(document).on("click", ".personal-img-validation-delete", function () {
      $(".per").css("background-image", "url('./assets/images/avatar.png')");
      $(".personal-img-validation-delete").css("display", "none");
    });
  }

  /* Fill Fav Star */
  $('.fav_report_btn i').on("click",function(){
    $(this).toggleClass("far fa-star")
  }) //click function

  $('.fav_report_btn i').on("click",function(){
    $(this).toggleClass("fas fa-star")
  }) //click function

  $(document).on("click", '[data-toggle="lightbox"]', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
  });

/* heighlight img */
  $('.add_card .cards img,.doctor_cards .all_cards img,.add_card .logo_container .logo_icon img').on('click',function(){
    $('.selected').removeClass('selected')
    $(this).addClass('selected')
  })

  $('.bouquet .cardi').on('click',function(){
    $('.selected').removeClass('selected')
    $(this).addClass('selected')
  })

/* end heighlight img */

/* swap language */


$('.eng_lang').on('click',function () {
  /*
  $('head').append('<link rel="stylesheet" id="eng_style" href="./assets/css/enStyle.css" />')
  $('.main_lang').text()
  $('.main_lang').text(' English')
  $('#english_lang').remove()
  $('.lang_dropdown').append('<a class="dropdown-item" href="#" id="arabic_lang">العربى</a>')
  */

 $('head').append('<link rel="stylesheet" id="eng_style" href="./assets/css/enStyle.css" />')
 $('.main_lang').text()
 $('.main_lang').text('عربى')
 $('.eng_lang').css({display:'none'})
 $('.ar_lang').css({display:'block'}) 
})



$('.ar_lang').on('click',function () {
  /*
  x = $('head').children('#eng_style').length
  
    for(i=0;i<=x;i++){
      $('#eng_style').remove()
    }
  
    $('#eng_style').remove()
    $('.main_lang').text()
    $('.main_lang').text(' العربى')
    $('.lang_dropdown').append('<a class="dropdown-item" href="#" id="english_lang">English</a>')
      */

     x = $('head').children('#eng_style').length
     console.log(x)
  
     for(i=0;i<=x;i++){
       $('#eng_style').remove()
     }
     $('.main_lang').text()
     $('.main_lang').text('English')
     $('.ar_lang').css({display:'none'})
     $('.eng_lang').css({display:'block'})
      
})
/* end swap language */

/* slidedown filter search */
$('.more_filter_btn').on('click',function () {
    $('.slide_down').toggle({
      'display':'block'
    })
    $('.aro').toggleClass('fas fa-angle-double-down')
    $('.aro').toggleClass('fas fa-angle-double-up')
})


/* show/hide pass */ 
$('.show_pass').on('click',function(){

  if($('.pass_input').attr('type')=='password'){
    $('.pass_input').attr('type','text')
    $(this).removeClass('far fa-eye-slash')
    $(this).addClass('far fa-eye')
  }
  else if($('.pass_input').attr('type')=='text'){
    $('.pass_input').attr('type','password')
    $(this).removeClass('far fa-eye')
    $(this).addClass('far fa-eye-slash')
  }
  
})


}); // Document ready














$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

  
  (function($) {
    $.fn.cascadeSlider = function(opt) {
      var $this = this,
        itemClass = opt.itemClass || 'cascade-slider_item',
        arrowClass = opt.arrowClass || 'cascade-slider_arrow',
        $item = $this.find('.' + itemClass),
        $arrow = $this.find('.' + arrowClass),
        itemCount = $item.length;
  
      var defaultIndex = 0;
  
      changeIndex(defaultIndex);
  
      $arrow.on('click', function() {
        var action = $(this).data('action'),
          nowIndex = $item.index($this.find('.now'));
  
        if(action == 'next') {
          if(nowIndex == itemCount - 1) {
            changeIndex(0);
          } else {
            changeIndex(nowIndex + 1);
          }
        } else if (action == 'prev') {
          if(nowIndex == 0) {
            changeIndex(itemCount - 1);
          } else {
            changeIndex(nowIndex - 1);
          }
        }
  
        $('.cascade-slider_dot').removeClass('cur');
        //$('.cascade-slider_dot').next().addClass('cur');
      });
      
      // add data attributes
      for (var i = 0; i < itemCount; i++) {
        $('.cascade-slider_item').each(function(i) {
          $(this).attr('data-slide-number', [i]);
        });
      }
      
      // dots
      $('.cascade-slider_dot').bind('click', function(){
        // add class to current dot on click
        $('.cascade-slider_dot').removeClass('cur');
        $(this).addClass('cur');
  
        var index = $(this).index();
  
        $('.cascade-slider_item').removeClass('now prev next');
        var slide = $('.cascade-slider_slides').find('[data-slide-number=' + index + ']');
        slide.prev().addClass('prev');
        slide.addClass('now');
        slide.next().addClass('next');
  
        if(slide.next().length == 0) {
          $('.cascade-slider_item:first-child').addClass('next');
        }
  
        if(slide.prev().length == 0) {
          $('.cascade-slider_item:last-child').addClass('prev');
        }
      });
  
      function changeIndex(nowIndex) {
        // clern all class
        $this.find('.now').removeClass('now');
        $this.find('.next').removeClass('next');
        $this.find('.prev').removeClass('prev');
        if(nowIndex == itemCount -1){
          $item.eq(0).addClass('next');
        }
        if(nowIndex == 0) {
          $item.eq(itemCount -1).addClass('prev');
        }
  
        $item.each(function(index) {
          if(index == nowIndex) {
            $item.eq(index).addClass('now');
          }
          if(index == nowIndex + 1 ) {
            $item.eq(index).addClass('next');
          }
          if(index == nowIndex - 1 ) {
            $item.eq(index).addClass('prev');
          }
        });
      }
    };
  })(jQuery);
  
  $('#cascade-slider').cascadeSlider({
    itemClass: 'cascade-slider_item',
    arrowClass: 'cascade-slider_arrow'
  });
