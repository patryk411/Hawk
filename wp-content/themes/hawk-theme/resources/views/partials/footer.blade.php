<footer class="footer py-4">
  <div class="container">
    <div class="row m-0 p-0 d-flex justify-content-between">

      <p class="footer__text">&copy; 2018 <span class="footer-brand-text">HawkEye</span> | Created by <span class="footer-brand-text">Webstrot.</span></p>
      
      <div class="footer__icons">
         <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#a9a9a9}</style><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>
         <a href=""><i class="fa-brands fa-twitter"></i></a>
         <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
         <a href=""><i class="fa-brands fa-youtube"></i></a>
      </div>
          
        </div>
  </div>
</footer>
<script src="https://kit.fontawesome.com/52989f7b96.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $(document).ready(function () {
    $('.main__testimonitals__content__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3500,
        arrows: false,
        mobileFirst: true,


    });
})
</script>
<script>
  var splide = new Splide( '.splide', {
    type   : 'loop',
      perPage: 3,
      perMove: 1,
      breakpoints: {
	    	576: {
			perPage: 1,
		},
  }
    } );
splide.mount();
</script>

<script>
  
  var splideComments = new Splide( '.splide-comments', {
    direction: 'ttb',
    height   : '10rem',
    wheel    : true,
  } );
  splideComments.mount();

</script>

<script>

var splide = new Splide( '.splide-brands', {
    type   : 'loop',
      perPage: 5,
      perMove: 1,
      breakpoints: {
        1200: {
			perPage: 4,
		  },
	    	768: {
			perPage: 3,
		},
      576:  {
      perPage: 2,
      },
  }
    } );
splide.mount();

</script>