<section id="services" class="services">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold">Our Services</h1>
        <div class="heading-line mb-1"></div>
      </div>
    <!-- START THE DESCRIPTION CONTENT  -->

    </div>

    <!-- START THE CONTENT FOR THE SERVICES  -->
    <div class="container">
      <!-- START THE MARKETING CONTENT  -->

      <!-- START THE WEB DEVELOPMENT CONTENT  -->
      @foreach ($services as $row)
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
            <div class="services__pic">
              <img src="{{asset('/backend/admin/assets/service/'.$row->image)}}" alt="web development illustration" class="img-fluid" height="400" width="400">
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
            <div class="services__content">
              <div class="icon d-block fas fa-code"></div>
              <h3 class="display-3--title mt-1">{{ $row->title }}</h3>
              <p class="lh-lg">{{ $row->description }}</p>
              <button type="button" class="rounded-pill btn-rounded border-primary">Learn more
                <span><i class="fas fa-arrow-right"></i></span>
              </button>
            </div>
          </div>
        </div>
      @endforeach

      <!-- START THE CLOUD HOSTING CONTENT  -->

    </div>
  </section>
