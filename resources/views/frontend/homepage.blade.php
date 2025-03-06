<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vinsensius - Personal Portfolio </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href={{ asset("cv/img/favicon.ico")}} rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <!-- Libraries Stylesheet -->
    <link href={{ asset("cv/lib/animate/animate.min.css")}} rel="stylesheet">
    <link href={{ asset("cv/lib/lightbox/css/lightbox.min.css")}} rel="stylesheet">
    <link href={{ asset("cv/lib/owlcarousel/assets/owl.carousel.min.css")}} rel="stylesheet">

    <!--REACTBITS-->
   
    <!-- Customized Bootstrap Stylesheet -->
    <link href={{ asset("cv/css/bootstrap.min.css")}} rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href={{ asset("cv/css/style.css")}} rel="stylesheet">
    
    <style>
        .bottom-nav {
            position: fixed;
            bottom: 10px;
            left: 50%;
            width: 80%;
            justify-content: center;
            justify-items: center;
            transform: translateX(-50%);
            display: flex;
            background: rgba(255, 255, 255, 0.203);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-radius: 30px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            gap: 15px;
            z-index: 9999;
        }
        .nav-item1 {
            text-decoration: none;
            color: rgb(9, 4, 69);
            font-size: 24px;
            padding: 10px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
            z-index: 9999;
        }
        .nav-item1:hover {
            background: rgba(0, 0, 0, 0.1);
        }
        @media (max-width: 600px) {
            .bottom-nav {
                width: 90%;
                justify-content: space-around;
            }
        }
        .instagram-media {
            border: none !important;
            box-shadow: none !important;
            max-width: 100% !important;
            min-width: auto !important;
            width: 100% !important;
            padding: 0 !important;
        }
        .distortion-container {
          width: 100%;
          height: 100%;
          overflow: hidden;
        }
        /* Container grid responsif */
        .certificate-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            max-width: 1000px;
            margin: auto;
        }

        /* Kartu sertifikat */
        .certificate-card {
            position: relative;
            width: 100%;
            height: 220px;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            transition: transform 0.3s;
        }

        .certificate-card:hover {
            transform: scale(1.05);
        }

        .certificate-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: 0.3s;
        }

        /* Overlay efek hover */
        .certificate-card .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 255, 0.3); /* Biru transparan */
            opacity: 0;
            transition: opacity 0.3s ease-in-out;
        }

        .certificate-card:hover .overlay {
            opacity: 1;
        }

        /* Tombol ikon mata */
        .view-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(255, 255, 255, 0.8);
            color: #000;
            padding: 10px;
            border-radius: 50%;
            font-size: 20px;
            cursor: pointer;
            transition: 0.3s;
            opacity: 0;
        }

        .certificate-card:hover .view-button {
            opacity: 1;
        }

        /* Fullscreen Modal */
        .fullscreen-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .fullscreen-modal img {
            max-width: 90%;
            max-height: 90%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(255, 255, 255, 0.3);
        }

        .close-button {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .certificate-container {
                grid-template-columns: 1fr;
            }

            .certificate-card {
                height: 250px;
            }

            .fullscreen-modal img {
                max-width: 95%;
                max-height: 90%;
            }
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
     @vite(['resources/js/app.jsx'])
</head>
<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
<div id="app"></div>

    <!-- Navbar Start -->
    <nav class="bottom-nav">
        <a href="#home" class="nav-item1"><i class="fas fa-home"></i></a>
        <a href="#about" class="nav-item1"><i class="fas fa-user"></i></a>
        <a href="#skill" class="nav-item1"><i class="fas fa-code"></i></a>
        <a href="#sertif" class="nav-item1"><i class="fas fa-clipboard"></i></a>
        <a href="#testimonial" class="nav-item1"><i class="fas fa-comments"></i></a>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0 mb-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 style="color: #054097" class="text-primary mb-3">Hello...I'm</h3>
                    <h1 class="display-5 mb-3">Vinsensius Bismoko </h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="{{ asset('cv/pdf/cv MSIB VINSEN.pdf') }}" 
   class="btn btn-primary py-3 px-4 me-5" 
   download="cv_MSIB_VINSEN.pdf">
   Download CV
</a>
                        {{-- <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5> --}}
                    </div>
                </div>
                <div class="col-lg-6 mb-0">
                    <img class="img-fluid" src={{asset("cv/img/cv1.PNG")}} alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Video Modal Start -->
    {{-- <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Video Modal End -->
    <!-- About Start -->
    <div class="container-xxl py-2 mt-0" id="about">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-5">
                        <div class="years flex-shrink-0 text-center me-4">
                            <h1 class="display-1 mb-0">3</h1>
                            <h5 class="mb-0">Years</h5>
                        </div>
                        <h3 class="lh-base mb-0"> be part of the graphic design division in the business student association</h3>
                    </div>
                    <p class="mb-4">
                        I am a student majoring in Informatics Management at the Banjarmasin State Polytechnic. 
                        Participated in a student exchange at Sanata Dharma University Yogyakarta.My abilities are as follows:
                    </p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>graphic design</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>web design</p>
                    <p class="mb-3"><i class="far fa-check-circle text-primary me-3"></i>web developer</p>
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Wakil Kepala Suku PMM4</h5>
                        <small style="font-size: 80%; margin-right:10px;">Since</small>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">2024
                        </h2>
                    </div>
                    <p class="mb-4">Sebagai Wakil Kepala Suku PMM4, saya bertanggung jawab dalam mengoordinasikan tim, memastikan komunikasi yang efektif, serta mengelola berbagai program dan kegiatan untuk mencapai tujuan bersama. Peran ini mengasah kemampuan kepemimpinan, kerja sama tim, dan problem-solving dalam lingkungan yang dinamis.</p>
                    {{-- <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a> --}}
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/p/C5UrIqFhz-R/" data-instgrm-version="14"></blockquote>
                            <script async src="https://www.instagram.com/embed.js"></script>
                            <script>
                                function adjustInstagramEmbed() {
                                    document.querySelectorAll('iframe').forEach(iframe => {
                                        if (window.innerWidth <= 768) {
                                            iframe.style.height = "450px"; // Layar kecil
                                        } else {
                                            iframe.style.height = "350px"; // Layar besar
                                        }
                                    });
                                }
                            
                                window.onload = () => {
                                    setTimeout(adjustInstagramEmbed, 3000); // Pastikan iframe sudah termuat
                                };
                            
                                window.onresize = adjustInstagramEmbed; // Sesuaikan saat layar berubah ukuran
                            </script>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid rounded" src={{asset("cv/img/vinsenhmb.JPG")}} alt="">
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center mb-3">
                        <h5 class="border-end pe-3 me-3 mb-0">Business Student Association</h5>
                        <small style="font-size: 80%; margin-right:10px;">Since</small>
                        <h2 class="text-primary fw-bold mb-0" data-toggle="counter-up">2022</h2>
                    </div>
                    <p class="mb-0">Sebagai anggota Himpunan Mahasiswa Bisnis sejak 2022, saya aktif dalam berbagai kegiatan organisasi, termasuk perencanaan acara, manajemen sumber daya, serta pengembangan keterampilan bisnis dan manajerial. Pengalaman ini meningkatkan pemahaman saya dalam dunia bisnis dan memperkuat keterampilan komunikasi serta kepemimpinan.</p>
                </div>
            </div>
        </div>
        </div>
    <!-- About End -->


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4">"Saya memiliki keahlian dalam pengembangan web dengan HTML, CSS, PHP, serta dasar JavaScript, serta terampil dalam desain grafis menggunakan Adobe Photoshop dan Canva untuk menciptakan tampilan yang estetis dan user-friendly."
                    </p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <img style="width: 10%; margin-bottom:5px;" src="{{asset("cv/img/html.jpg")}}" alt="">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                   <img  style="width: 10%; margin-bottom:5px;" src="{{asset("cv/img/css.jpg")}}" alt="">
                                   <h6  class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <img  style="width: 13%; margin-bottom:0px;" src="{{asset("cv/img/php.png")}}" alt="">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">75%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <img  style="width: 10%; margin-bottom:5px;" src="{{asset("cv/img/javascript.PNG")}}" alt="">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">50%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <img  style="width: 10%; margin-bottom:10px;" src="{{asset("cv/img/photoshop.JPG")}}" alt="">
                                    <h6 class="font-weight-bold">Adobe Photoshop</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <img  style="width: 10%; margin-bottom:10px;" src="{{asset("cv/img/canva.PNG")}}" alt="">
                                    <h6 class="font-weight-bold">Canva</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Graphic Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2022-2025</p>
                                    <h6 class="mb-0">Himpunan Mahasiswa Bisnis</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Internship at PT.PLN</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2024</p>
                                    <h6 class="mb-0">Bidang Perencanaan Sistem Kelistrikan</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Wakil Kepala Suku</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2024</p>
                                    <h6 class="mb-0">PMM4 USD Yogyakarta</h6>
                                </div>
                                {{-- <div class="col-sm-6">
                                    <h5>Frontend Dev</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2024 - 2025</p>
                                    <h6 class="mb-0">Tugas Akhir</h6>
                                </div> --}}
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>Project Management Basic Training</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023</p>
                                    <h6 class="mb-0">DICODING Indonesia</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Programming bootcamps</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023</p>
                                    <h6 class="mb-0">DICODING Indonesia</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Developer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023-2025</p>
                                    <h6 class="mb-0">Banjarmasin State Polytechnic</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2023-2025</p>
                                    <h6 class="mb-0">Banjarmasin State Polytechnic</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->
  <div class="container-xxl py-3 pb-2" id="sertif">
        <div class="container">
            <div class="row g-5 mb-2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
    <h1 class="display-5 mb-0">Sertifikat</h1>
    </div>
    <div class="certificate-container">
        <div class="certificate-card" onclick="openFullscreen('cv/img/ML.jpg')">
            <img src="cv/img/ML.jpg" alt="Sertifikat 1">
            <div class="overlay"></div>
            <i class="fas fa-eye view-button"></i>
        </div>

        <div class="certificate-card" onclick="openFullscreen('cv/img/PMM.PNG')">
            <img src="cv/img/PMM.PNG" alt="Sertifikat 2">
            <div class="overlay"></div>
            <i class="fas fa-eye view-button"></i>
        </div>
        <div class="certificate-card" onclick="openFullscreen('cv/img/sertif_bisnis.PNG')">
            <img src="cv/img/sertif_bisnis.PNG"  alt="Sertifikat 6">
               <div class="overlay"></div>
               <i class="fas fa-eye view-button"></i>
           </div>
        <div class="certificate-card" onclick="openFullscreen('cv/img/dicoding.PNG')">
         <img src="cv/img/dicoding.PNG"  alt="Sertifikat 3">
            <div class="overlay"></div>
            <i class="fas fa-eye view-button"></i>
        </div>
        <div class="certificate-card" onclick="openFullscreen('cv/img/dicoding2.PNG')">
            <img src="cv/img/dicoding2.PNG"  alt="Sertifikat 4">
               <div class="overlay"></div>
               <i class="fas fa-eye view-button"></i>
           </div>
           <div class="certificate-card" onclick="openFullscreen('cv/img/dicoding3.PNG')">
            <img src="cv/img/dicoding3.PNG"  alt="Sertifikat 5">
               <div class="overlay"></div>
               <i class="fas fa-eye view-button"></i>
           </div>
    </div>
            </div></div>
        </div>

    <!-- Fullscreen Modal -->
    <div class="fullscreen-modal" id="fullscreenModal">
        <span class="close-button" onclick="closeFullscreen()">&times;</span>
        <img id="fullscreenImg" src="" alt="Fullscreen Sertifikat">
    </div>
    </div>
   
    {{-- <div class="container-fluid bg-light my-5 py-6" id="service">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Services</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Hire Me</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-crop-alt fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Creative Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code-branch fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Graphic Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">Web Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column flex-sm-row bg-white rounded h-100 p-4 p-lg-5">
                        <div class="bg-icon flex-shrink-0 mb-3">
                            <i class="fa fa-laptop-code fa-2x text-dark"></i>
                        </div>
                        <div class="ms-sm-4">
                            <h4 class="mb-3">UI/UX Design</h4>
                            <h6 class="mb-3">Start from <span class="text-primary">$199</span></h6>
                            <span>Stet lorem dolor diam amet vero eos. No stet est diam amet diam ipsum. Clita dolor duo clita sit sed sit dolor eos.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    <!-- Service End -->


    <!-- Projects Start -->
    {{-- <div class="container-xxl py-6 pt-5" id="project">
        <div class="container">
            <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">My Projects</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                        <li class="mx-3 active" data-filter="*">All Projects</li>
                        <li class="mx-3" data-filter=".first">UI/UX Design</li>
                        <li class="mx-3" data-filter=".second">Graphic Design</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src={{asset("cv/img/project-1.jpg")}} alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href={{asset("cv/img/project-1.jpg")}} data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src={{asset("cv/img/project-2.jpg")}} alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src={{asset("cv/img/project-3.jpg")}} alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-3.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src={{asset("cv/img/project-4.jpg")}} alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-4.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src={{asset("cv/img/project-5.jpg")}} alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-5.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second">
                    <div class="portfolio-img rounded overflow-hidden">
                        <img class="img-fluid" src="img/project-6.jpg" alt="">
                        <div class="portfolio-btn">
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/project-6.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href=""><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Projects End -->


    <!-- Team Start -->
    {{-- <div class="container-xxl py-6 pb-5" id="team">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Team Members</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Contact Us</a>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src={{asset("cv/img/team-1.jpg")}} alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src={{asset("cv/img/team-2.jpg")}} alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src={{asset("cv/img/team-3.jpg")}} alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Full Name</h5>
                                <span>Designer</span>
                            </div>
                            <i class="fa fa-arrow-right fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container-fluid bg-light py-3 my-5"  >
         <div class="container">
            <div class="row g-5 mb-0">
                <div class="container-fluid py-0">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">BIOGRAFI</h1>
       </div>
            </div>
         </div>
        <div id="circular"></div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid bg-light py-0 my-3" id="testimonial">
        <div class="container-fluid py-3">
            <h1 class="display-5 text-center mb-3 wow fadeInUp" data-wow-delay="0.1s">SOSMED</h1>
            <div class="row justify-content-center">
                <div class="col-lg-3 d-none d-lg-block">
                    {{-- <div class="testimonial-left h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src={{asset("cv/img/testimonial-1.jpg")}} alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src={{asset("cv/img/testimonial-2.jpg")}} alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src={{asset("cv/img/testimonial-3.jpg")}} alt="">
                    </div> --}}
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="10s">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-0">
                                <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@sikecikbunda" data-unique-id="sikecikbunda" data-embed-type="creator" style="max-width: 780px; min-width: 288px;" > <section> <a target="_blank" href="https://www.tiktok.com/@sikecikbunda?refer=creator_embed">@sikecikbunda</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <div class="position-relative mb-0">
                                <iframe src="https://www.instagram.com/vinsensius_bismoko/embed" style="max-width: 780px; min-width: 288px;" ></iframe>
<p>Follow me on <a href="https://www.instagram.com/vinsensius_bismoko/?hl=en" target="_blank">Instagram</a></p>
 </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    {{-- <div class="testimonial-right h-100">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.1s" src={{asset("cv/img/testimonial-1.jpg")}} alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.3s" src={{asset("cv/img/testimonial-2.jpg")}} alt="">
                        <img class="img-fluid wow fadeIn" data-wow-delay="0.5s" src={{asset("cv/img/testimonial-3.jpg" )}} alt="">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="{{route('photoboth')}}">MyPhotobooth</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+62 831-1664-8304</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">bismoko3110@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="https://www.tiktok.com/@sikecikbunda">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>                        
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/vinsensius_bismoko/?hl=en"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Saya selalu terbuka untuk diskusi, kolaborasi, atau kesempatan baru. Jangan ragu untuk menghubungi saya melalui email atau formulir di bawah ini. Saya akan merespons secepat mungkin!.</p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Map Start -->
    {{-- <div class="container-xxl pt-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container-xxl pt-5 px-0">
            <div class="bg-dark">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" style="width: 100%; height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
        </div>
    </div> --}}
    <!-- Map End -->


    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-secondary" href="#">MyPortofolio</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom text-secondary" href="#">Vinsensius</a>
                        </div>
                </div>
            </div>
        </div>
   

    <!-- Copyright End -->


    <!-- Back to Top -->
    {{-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> --}}


    <!-- JavaScript Libraries -->
    <script>
        function openFullscreen(imageSrc) {
            const modal = document.getElementById("fullscreenModal");
            const modalImg = document.getElementById("fullscreenImg");

            modal.style.display = "flex";
            modalImg.src = imageSrc;
        }

        function closeFullscreen() {
            document.getElementById("fullscreenModal").style.display = "none";
        }

        // Tutup modal saat klik di luar gambar
        document.getElementById("fullscreenModal").addEventListener("click", function (event) {
            if (event.target !== document.getElementById("fullscreenImg")) {
                closeFullscreen();
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{asset("cv/lib/wow/wow.min.js")}}></script>
    <script src={{asset("cv/lib/easing/easing.min.js")}}></script>
    <script src={{asset("cv/lib/waypoints/waypoints.min.js")}}></script>
    <script src={{asset("cv/lib/typed/typed.min.js")}}></script>
    <script src={{asset("cv/lib/counterup/counterup.min.js")}}></script>
    <script src={{ asset("cv/lib/owlcarousel/owl.carousel.min.js")}}></script>
    <script src={{asset("cv/lib/isotope/isotope.pkgd.min.js")}}></script>
    <script src={{asset("cv/lib/lightbox/js/lightbox.min.js")}}></script>

    <!-- Template Javascript -->
    <script src={{asset("cv/js/main.js")}}></script>
</body>

</html>