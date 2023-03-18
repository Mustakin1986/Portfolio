<nav class="navbar navbar-expand-lg navbar-dark menu shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="">
        <img src="{{asset('/frontend/images')}}/logo.png" alt="logo image">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        @foreach ($allMenus as $row )
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">{{ $row->name }}</a></li>
        </ul>
        @endforeach
        <button type="button" class="rounded-pill btn-rounded">
          +8801700000000
          <span>
            <i class="fas fa-phone-alt"></i>
          </span>
        </button>
      </div>
    </div>
  </nav>
