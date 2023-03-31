<section id="faq" class="faq">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-uppercase">faq</h1>
        <div class="heading-line"></div>
        <p class="lead">frequently asked questions, get knowledge befere hand</p>
      </div>
      <!-- ACCORDION CONTENT  -->

        <div class="row mt-5">
          <div class="col-md-12">
            <div class="accordion" id="accordionExample">
              <!-- ACCORDION ITEM 1 -->

              <div class="accordion-item shadow mb-3">
              @foreach ($allFaq as $row)
                <h2 class="accordion-header" id="{{ $row->heading }}">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $row->colops }}" aria-expanded="true" aria-controls="collapseOne">
                    <strong>{{ $row->question }}</strong>
                   
                  </button>
                </h2>
                <div id="{{ $row->colops }}" class="accordion-collapse collapse show" aria-labelledby="{{ $row->heading }}" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <strong></strong>{{ $row->answer }}
                  </div>
                </div>
                @endforeach
              </div>

            </div>
          </div>
        </div>
    </div>
  </section>
