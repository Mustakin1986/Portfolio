@push('style')
 <style>

.image-slider {
    position: relative;
    width: 100%;
    height: 90vh;
    margin-top: 75px;
    overflow: hidden;
}

  .image-slider .slides{
    z-index: 1;
    position: absolute;
    width: 100%;
  }

  .image-slider .slides img{
    z-index: 1;
    width: 100%;
    height: 86vh;
  }

  .image-slider .slides .info{
    position: absolute;
    top: 40px;
  }

  .image-slider .slides .info h3 {
    color: black;
    font-size: 45px;
    text-transform: uppercase;
    font-weight: 800;
    letter-spacing: 3px;
    margin-top: 50px;
    margin-left: 80px;
}
  .image-slider .slides .info p {
    color: white;
    font-size: 16px;
    background-color: rgb(32 1 31 / 62%);
    padding: 10px;
    border-radius: 5px;
    transform: translateY(-50%);
    height: auto;
    width: 550px;
    text-align: justify;
    margin-top: 100px;
    margin-left: 80px;
}
 
 

 </style>
@endpush

<section id="home" class="image-slider">
  <div class="slides">
    @foreach ( $sliders as $slider )
    <div>
      
      <img class="slide image-fluid" src="{{ asset('/slider/'.$slider->image) }}" alt="">
      <div class="info">
        <h3 class="title">{{ $slider->title }}</h3>
        <p class="description">{{ $slider->description }}</p>
      </div>
      
    </div>
      
    
    @endforeach
</div>
  
    {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> --}}
  </section>

  @push('script')
  <script>
    $('.slides').slick({
    dots: true,
    infinite: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 1000,
    slidesToShow: 1,
    adaptiveHeight: true
   });
  </script>
  @endpush
