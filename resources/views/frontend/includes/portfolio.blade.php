<section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center mt-5">
        <h1 class="display-3 fw-bold text-capitalize">Latest work</h1>
        <div class="heading-line"></div>
        <p class="lead">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint porro temporibus distinctio.
        </p>
      </div>
      <!-- FILTER BUTTONS  -->
      
      <div class="row mt-5 mb-4 g-3 text-center">
        <div class="col-md-12">
            <button class="btn btn-outline-primary" type="button">All</button>
            <button class="btn btn-outline-primary" type="button">websites</button>
            <button class="btn btn-outline-primary" type="button">design</button>
            <button class="btn btn-outline-primary" type="button">mockup</button>
        </div>
      </div>
      <!-- START THE PORTFOLIO ITEMS  -->
<div class="row">
  @foreach ($portfolios as $portfolio )
      <div class="col-lg-4 col-md-6">
        <div class="portfolio-box shadow">
          <img src="{{asset('/backend/admin/assets/portfolio/'.$portfolio->image)}}" alt="portfolio 2 image" title="portfolio 2 picture" class="img-fluid">
          <div class="portfolio-info">
            <div class="caption">
              <h4>{{ $portfolio->title }}</h4>
              <h3>{{ $portfolio->project_name }}</h3>
              <p>{{ $portfolio->description }}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
</div>
      </div>
    </div>
  </section>
