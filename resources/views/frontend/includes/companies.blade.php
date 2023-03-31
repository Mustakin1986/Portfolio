<section id="campanies" class="campanies">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold lead mb-3">Trusted by campanies like</h4>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <!-- START THE CAMPANIES CONTENT  -->
    <div class="container">
      <div class="row">
      @foreach ($allClientLogo as $row )
          <div class="col-md-4 col-lg-2">
              <div class="campanies__logo-box shadow-sm">
                  <img src="{{asset('/backend/admin/assets/clientslogo/'.$row->image) }}" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
              </div>
          </div>
      @endforeach
      </div>
    </div>
  </section>
