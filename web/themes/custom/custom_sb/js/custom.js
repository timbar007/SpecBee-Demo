/**
 * @file
 * Global utilities.
 *
 */
(function($, Drupal) {

  'use strict';

  Drupal.behaviors.custom_sb = {
    attach: function(context, settings) {

      $(document).ready(function(){

        $("#carouselExampleControls .card-body .carousel-item:first, #s_profile .card-body .carousel-item:first, #t_contact .card-body .carousel-item:first").addClass('active');
        
        /** JS to manage Carousel slider for all three tabs/slides **/
        var myCarousel = document.querySelector('#carouselExampleControls')
        var carousel = new bootstrap.Carousel(myCarousel, {
          interval: 100000 
        })

        var tContact = document.querySelector('#t_contact')
        var carousel = new bootstrap.Carousel(tContact, {
          interval: 100000 
        })

        var sProfile = document.querySelector('#s_profile')
        var carousel = new bootstrap.Carousel(sProfile, {
          interval: 100000 
        })

        let items = document.querySelectorAll('.carousel .carousel-item')

            items.forEach((el) => {
              const minPerSlide = 4
              let next = el.nextElementSibling
              for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        });

        /** JS to manage tabs and respective content **/
        $("#home-tab").click(function(){
          $(".fade").css("display", "none");
          $("#home").css("display", "block");
          $(".nav-item button").removeClass("active ");
          $("#home-tab").addClass("active");
          
        });
        $("#profile-tab").click(function(){
          $(".fade").css("display", "none");
          $("#profile").css("display", "block");
          $(".nav-item button").removeClass("active ");
          $("#profile-tab").addClass("active");
          
        });
        $("#contact-tab").click(function(){
          $(".fade").css("display", "none");
          $("#contact").css("display", "block");
          $(".nav-item button").removeClass("active ");
          $("#contact-tab").addClass("active");
        });

        $( document ).ready(function() {	
          setTimeout(function(){
            $("#profile").css("display", "none");
            $("#contact").css("display", "none");
          }, 0);

        });
        

      });
    
    }
  };

})(jQuery, Drupal);