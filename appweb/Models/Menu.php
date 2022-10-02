<header class="container-fluid d-none d-lg-block border-bottom border-danger">
	<div class="container px-0 px-sm-2" data-aos="fade-in" data-aos-duration="2000">
		<div class="row justify-content-around py-1">
			<div class="col-auto my-auto">
                <h5 class="fw-bold text-red">Toko Kendaraan Yogyakarta</h5>
                <p>Tamanan, Kab.Bantul, DIY</p>
			</div>

            <div class="col-auto my-auto">
                <img src="<?= $url_images; ?>/<?= $logoMobile ?>"  alt="Gambar <?= $judulLogoMobile; ?>" id="navbar_brand" class="navbar-brand-40">
            </div>

			<div class="col-auto">
                <div class="d-grid my-auto">
                    <div class="link-dark mb-1">
                        <span>Sales - </span><a href="#" class="text-red fw-bold text-decoration-none">0123456789</a>
                    </div>
                    <div class="link-dark mb-1">
                        <span>Parts - </span><a href="#" class="text-red fw-bold text-decoration-none">0123456789</a>
                    </div>
                    <div class="link-dark mb-1">
                        <span>Service - </span><a href="#" class="text-red fw-bold text-decoration-none">0123456789</a>
                    </div>
                </div>
			</div>
		</div>
	</div>
</header>


<nav id="navbar_top" class="container-fluid sticky-top navbar bg-white navbar-expand-lg navbar-light py-3" data-aos="fade-down">
    <div class="container px-0 px-sm-2">
        <a class="navbar-brand d-lg-none d-md-block " href="<?= $base_url; ?>">
          	<img src="<?= $url_images; ?>/<?= $logoMobile ?>" title="<?= $judulLogoMobile; ?>" alt="Gambar <?= $judulLogoMobile; ?>" id="navbar_brand" class="navbar-brand-40">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse justify-content-center navbar-collapse" id="navbarSupportedContent">
            <hr class="pb-1 bg-red d-none d-md-block d-sm-block">
            <ul class="navbar-nav">
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#about">ABOUT</a>
				</li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#vehicle">VEHICLES</a>
				</li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#service">SERVICES</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#testimonial">TESTIMONIAL</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" href="#contact">CONTACT</a>
                </li>
            </ul>
        </div>
    </div>
</nav>