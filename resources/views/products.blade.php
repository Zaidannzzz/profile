@extends('layouts.layouthome')

@section('content')
<section class="bg-transparant" id="portfolio">
            <div class="container-fluid">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Portfolio</h2>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-3 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <img class="img-fluid" src="{{('img/game.png')}}" alt="game" />
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-3 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <img class="img-fluid" src="{{('img/game.png')}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-3 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <img class="img-fluid" src="{{('img/game.png')}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    <div class="col-md-3 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <img class="img-fluid" src="{{('img/game.png')}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 5-->
                    <div class="col-md-3 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <img class="img-fluid" src="{{('img/game.png')}}" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 6-->
                    <div class="col-md-3 col-lg-3 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <img class="img-fluid" src="{{('img/game.png')}}" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mt-3 py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Zaidan Zulhakim 2021</small></div>
        </div>
        <!-- Portfolio Modals-->
            <!-- Portfolio Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-dark">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-1">Nam Do Brak</h2>
                                        <video id="video" autoplay></video>
                                        <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs"></script>
                                        <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/blazeface"></script>
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">Face Detection inspirated by Nam Do San in Korean Drama "Start Up"</p>
                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 2-->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-dark">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{('img/game.png')}}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 3-->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-dark">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{('img/game.png')}}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 4-->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-dark">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{('img/game.png')}}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 5-->
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-dark">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Locked Safe</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{('img/game.png')}}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio Modal 6-->
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content bg-dark">
                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                        <div class="modal-body text-center pb-5">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image-->
                                        <img class="img-fluid rounded mb-5" src="{{('img/game.png')}}" alt="..." />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                            <i class="fas fa-times fa-fw"></i>
                                            Close Window
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection