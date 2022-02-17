<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://kit.fontawesome.com/c58782bed7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/portfolio.css">
    <link href="https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600&family=Lobster&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap" rel="stylesheet">

    <title>Kadek-Edy</title>
  </head>
  <body>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Kadek-Edy</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-link" href="#Home">Home</a>
                <a class="nav-link" href="#About">About</a>
                <a class="nav-link" href="#Skill">Skills</a>
                <a class="nav-link" href="#Education">Educations</a>
                <a class="nav-link" href="#Experience">Experience</a>
                <a class="nav-link" href="#Project">Projects</a>
                <a class="nav-link" href="#Contact">Contact</a>
              </div>
            </div>
        </div>
    </nav>
    {{-- /Navbar --}}

    {{-- Jumbotron --}}
    <section class="jumbotron" id="Home" >
        <div class="container jumbo">
            <div class="profil" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                @foreach ($Profils as $Profil)
                    <h1>Saya <strong>{{$Profil->nama_lengkap}}</strong></h1>
                    <p>{{$Profil->kerja}} | <span>{{$Profil->jurusan}}</span></p>
                @endforeach
                <button class="btn btn-outline-secondary text-uppercase">Contact</button>
            </div>
            <div class="hero" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                <img width="320px" src="img/hero.png" alt="">
            </div>
        </div>
    </section>

    {{-- /Jumbotron --}}

    {{-- About --}}
    <section class="About" id="About">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="heading-left text-uppercase">About</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-1" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                        <img src="/img/hero-1.png" width="65%" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                   <div class="row">
                    @foreach ($Profils as $Profil)
                        <div class="col deskripsi" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                            <p>Halo Saya <strong>{{$Profil->nama_lengkap}}</strong> {{$Profil->tentang}}</p>
                        </div> 
                    @endforeach
                   </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L8.9,106.7C17.8,117,36,139,53,133.3C71.1,128,89,96,107,96C124.4,96,142,128,160,154.7C177.8,181,196,203,213,197.3C231.1,192,249,160,267,176C284.4,192,302,256,320,240C337.8,224,356,128,373,117.3C391.1,107,409,181,427,197.3C444.4,213,462,171,480,176C497.8,181,516,235,533,218.7C551.1,203,569,117,587,96C604.4,75,622,117,640,128C657.8,139,676,117,693,122.7C711.1,128,729,160,747,144C764.4,128,782,64,800,53.3C817.8,43,836,85,853,133.3C871.1,181,889,235,907,256C924.4,277,942,267,960,256C977.8,245,996,235,1013,192C1031.1,149,1049,75,1067,85.3C1084.4,96,1102,192,1120,218.7C1137.8,245,1156,203,1173,181.3C1191.1,160,1209,160,1227,186.7C1244.4,213,1262,267,1280,282.7C1297.8,299,1316,277,1333,245.3C1351.1,213,1369,171,1387,133.3C1404.4,96,1422,64,1431,48L1440,32L1440,0L1431.1,0C1422.2,0,1404,0,1387,0C1368.9,0,1351,0,1333,0C1315.6,0,1298,0,1280,0C1262.2,0,1244,0,1227,0C1208.9,0,1191,0,1173,0C1155.6,0,1138,0,1120,0C1102.2,0,1084,0,1067,0C1048.9,0,1031,0,1013,0C995.6,0,978,0,960,0C942.2,0,924,0,907,0C888.9,0,871,0,853,0C835.6,0,818,0,800,0C782.2,0,764,0,747,0C728.9,0,711,0,693,0C675.6,0,658,0,640,0C622.2,0,604,0,587,0C568.9,0,551,0,533,0C515.6,0,498,0,480,0C462.2,0,444,0,427,0C408.9,0,391,0,373,0C355.6,0,338,0,320,0C302.2,0,284,0,267,0C248.9,0,231,0,213,0C195.6,0,178,0,160,0C142.2,0,124,0,107,0C88.9,0,71,0,53,0C35.6,0,18,0,9,0L0,0Z"></path></svg>
    {{-- /About --}}

    {{-- Skill --}}
    <section class="Skill" id="Skill">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="heading-right text-uppercase">Skills</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 order-sm-last pt-3">
                    <p class="title-right" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                        Berikut beberapa skill/kemampuan yang saya miliki dan pelajari selama waktu ini.
                    </p>
                </div>
                <div class="col-lg-6 pt-3">
                  <div class="row">
                    @foreach ($Skills as $Skill)
                        <div class="col-lg-4">
                            <div class="card mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                                <i class="{{$Skill->icon}} p-5" style="font-size: 50px; text-align: center;"></i>
                                <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 20px!important">{{$Skill->nama}}</h5>
                                </div>
                            </div>
                        </div>  
                    @endforeach
                  </div>
                </div>
            </div>
        </div>
    </section>
    {{-- /Skill --}}

    {{-- Edukasi --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L8.9,106.7C17.8,117,36,139,53,133.3C71.1,128,89,96,107,96C124.4,96,142,128,160,154.7C177.8,181,196,203,213,197.3C231.1,192,249,160,267,176C284.4,192,302,256,320,240C337.8,224,356,128,373,117.3C391.1,107,409,181,427,197.3C444.4,213,462,171,480,176C497.8,181,516,235,533,218.7C551.1,203,569,117,587,96C604.4,75,622,117,640,128C657.8,139,676,117,693,122.7C711.1,128,729,160,747,144C764.4,128,782,64,800,53.3C817.8,43,836,85,853,133.3C871.1,181,889,235,907,256C924.4,277,942,267,960,256C977.8,245,996,235,1013,192C1031.1,149,1049,75,1067,85.3C1084.4,96,1102,192,1120,218.7C1137.8,245,1156,203,1173,181.3C1191.1,160,1209,160,1227,186.7C1244.4,213,1262,267,1280,282.7C1297.8,299,1316,277,1333,245.3C1351.1,213,1369,171,1387,133.3C1404.4,96,1422,64,1431,48L1440,32L1440,320L1431.1,320C1422.2,320,1404,320,1387,320C1368.9,320,1351,320,1333,320C1315.6,320,1298,320,1280,320C1262.2,320,1244,320,1227,320C1208.9,320,1191,320,1173,320C1155.6,320,1138,320,1120,320C1102.2,320,1084,320,1067,320C1048.9,320,1031,320,1013,320C995.6,320,978,320,960,320C942.2,320,924,320,907,320C888.9,320,871,320,853,320C835.6,320,818,320,800,320C782.2,320,764,320,747,320C728.9,320,711,320,693,320C675.6,320,658,320,640,320C622.2,320,604,320,587,320C568.9,320,551,320,533,320C515.6,320,498,320,480,320C462.2,320,444,320,427,320C408.9,320,391,320,373,320C355.6,320,338,320,320,320C302.2,320,284,320,267,320C248.9,320,231,320,213,320C195.6,320,178,320,160,320C142.2,320,124,320,107,320C88.9,320,71,320,53,320C35.6,320,18,320,9,320L0,320Z"></path></svg>
    <section class="Education" id="Education">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="heading-left text-uppercase">Educations</h3>
                </div>
            </div>

            <div class="row">
              <div class="col-lg-6 pt-3 ">
                  <p class="title-left" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                    Berikut ini merupakan Pendidikan yang sudah saya tempuh dan sampai saya wisuda.
                  </p>
              </div>
              <div class="col-lg-6">
                <div class="row">
                    @foreach ($Pendidikans as $Pendidikan)
                        <div class="col-lg-12">
                            <button style="width: 100%" class="btn btn-primary mb-2 p-2" type="button" data-toggle="collapse" data-target="#{{$Pendidikan->class}}" aria-expanded="false" aria-controls="multiCollapseExample2"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">{{$Pendidikan->nama_pendidikan}}</button>
                            <div class="collapse multi-collapse" id="{{$Pendidikan->class}}">
                                <div class="card card-body">
                                    <span>{{$Pendidikan->tahun_pendidikan}}</span>
                                    {{$Pendidikan->deskripsi}}
                                </div>
                            </div>
                        </div>  
                    @endforeach
                </div>
              </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L8.9,106.7C17.8,117,36,139,53,133.3C71.1,128,89,96,107,96C124.4,96,142,128,160,154.7C177.8,181,196,203,213,197.3C231.1,192,249,160,267,176C284.4,192,302,256,320,240C337.8,224,356,128,373,117.3C391.1,107,409,181,427,197.3C444.4,213,462,171,480,176C497.8,181,516,235,533,218.7C551.1,203,569,117,587,96C604.4,75,622,117,640,128C657.8,139,676,117,693,122.7C711.1,128,729,160,747,144C764.4,128,782,64,800,53.3C817.8,43,836,85,853,133.3C871.1,181,889,235,907,256C924.4,277,942,267,960,256C977.8,245,996,235,1013,192C1031.1,149,1049,75,1067,85.3C1084.4,96,1102,192,1120,218.7C1137.8,245,1156,203,1173,181.3C1191.1,160,1209,160,1227,186.7C1244.4,213,1262,267,1280,282.7C1297.8,299,1316,277,1333,245.3C1351.1,213,1369,171,1387,133.3C1404.4,96,1422,64,1431,48L1440,32L1440,0L1431.1,0C1422.2,0,1404,0,1387,0C1368.9,0,1351,0,1333,0C1315.6,0,1298,0,1280,0C1262.2,0,1244,0,1227,0C1208.9,0,1191,0,1173,0C1155.6,0,1138,0,1120,0C1102.2,0,1084,0,1067,0C1048.9,0,1031,0,1013,0C995.6,0,978,0,960,0C942.2,0,924,0,907,0C888.9,0,871,0,853,0C835.6,0,818,0,800,0C782.2,0,764,0,747,0C728.9,0,711,0,693,0C675.6,0,658,0,640,0C622.2,0,604,0,587,0C568.9,0,551,0,533,0C515.6,0,498,0,480,0C462.2,0,444,0,427,0C408.9,0,391,0,373,0C355.6,0,338,0,320,0C302.2,0,284,0,267,0C248.9,0,231,0,213,0C195.6,0,178,0,160,0C142.2,0,124,0,107,0C88.9,0,71,0,53,0C35.6,0,18,0,9,0L0,0Z"></path></svg>
    {{-- /Edukasi --}}

    {{-- Experience --}}
    <section class="Experience" id="Experience">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="heading-right text-uppercase">Experience</h3>
                </div>
            </div>
            <div class="row">
               <div class="col-lg-6 order-sm-last pt-3">
                    <p class="title-right" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                        Berikut beberapa pengalaman yang saya dapatkan dari magang, freelance, dan pelatihan .
                    </p>
               </div>
               <div class="col-lg-6">
                   <div class="row">
                    @foreach ($Pengalamans as $Pengalaman)
                    <div class="col-lg-6">
                        <div class="card mb-3"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                            <div class="card-header text-center">
                                {{$Pengalaman->nama_perusahaan}}
                            </div>
                            <div class="card-body" style="min-height: 230px">
                                <div class="d-flex w-100 justify-content-between mb-3">
                                    <h6 class="mb-1">{{$Pengalaman->posisi}}</h6>
                                    <small>{{$Pengalaman->lama_pengalaman}}</small>
                                </div>
                                <p>{{$Pengalaman->deskripsi}}</p>
                            </div>
                        </div>
                    </div>    
                    @endforeach
                   </div>
               </div>
            </div>
        </div>
    </section>
    {{-- /Experience --}}

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L8.9,106.7C17.8,117,36,139,53,133.3C71.1,128,89,96,107,96C124.4,96,142,128,160,154.7C177.8,181,196,203,213,197.3C231.1,192,249,160,267,176C284.4,192,302,256,320,240C337.8,224,356,128,373,117.3C391.1,107,409,181,427,197.3C444.4,213,462,171,480,176C497.8,181,516,235,533,218.7C551.1,203,569,117,587,96C604.4,75,622,117,640,128C657.8,139,676,117,693,122.7C711.1,128,729,160,747,144C764.4,128,782,64,800,53.3C817.8,43,836,85,853,133.3C871.1,181,889,235,907,256C924.4,277,942,267,960,256C977.8,245,996,235,1013,192C1031.1,149,1049,75,1067,85.3C1084.4,96,1102,192,1120,218.7C1137.8,245,1156,203,1173,181.3C1191.1,160,1209,160,1227,186.7C1244.4,213,1262,267,1280,282.7C1297.8,299,1316,277,1333,245.3C1351.1,213,1369,171,1387,133.3C1404.4,96,1422,64,1431,48L1440,32L1440,320L1431.1,320C1422.2,320,1404,320,1387,320C1368.9,320,1351,320,1333,320C1315.6,320,1298,320,1280,320C1262.2,320,1244,320,1227,320C1208.9,320,1191,320,1173,320C1155.6,320,1138,320,1120,320C1102.2,320,1084,320,1067,320C1048.9,320,1031,320,1013,320C995.6,320,978,320,960,320C942.2,320,924,320,907,320C888.9,320,871,320,853,320C835.6,320,818,320,800,320C782.2,320,764,320,747,320C728.9,320,711,320,693,320C675.6,320,658,320,640,320C622.2,320,604,320,587,320C568.9,320,551,320,533,320C515.6,320,498,320,480,320C462.2,320,444,320,427,320C408.9,320,391,320,373,320C355.6,320,338,320,320,320C302.2,320,284,320,267,320C248.9,320,231,320,213,320C195.6,320,178,320,160,320C142.2,320,124,320,107,320C88.9,320,71,320,53,320C35.6,320,18,320,9,320L0,320Z"></path></svg>
    {{-- Project --}}
    <section class="Project" id="Project">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="heading text-uppercase">Projects</h3>
                </div>
            </div>

            <div class="row">
              @foreach ($Projects as $Project)
                  <div class="col-lg-4 pt-3">
                    <figure class="figure" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50" data-aos-mirror="true">
                        <img width="100%" src="{{url('/img/'.$Project->file)}}" class="figure-img img-fluid rounded" alt="...">
                        <figcaption class="figure-caption text-uppercase" style="color: black!important">{{$Project->judul_project}}.</figcaption>
                      </figure>
                  </div>
              @endforeach
            </div>
        </div>
    </section>
    {{-- /Project --}}
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,96L80,117.3C160,139,320,181,480,165.3C640,149,800,75,960,58.7C1120,43,1280,85,1360,106.7L1440,128L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
    
    
    {{-- Contact --}}
    <section class="Contact" id="Contact">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="heading text-center pb-4 text-uppercase">Contact</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="card" style="margin-top: 33px">
                        <a class="nav-link logo" href="https://www.instagram.com/tutturut29">
                            <i class="fa-brands fa-instagram" style="margin-right: 10px; color:rgb(182, 13, 131)"></i>tutturut29
                        </a>
                    </div>
                    <div class="card mt-4 order-sm-last">
                        <a class="nav-link logo" href="https://wa.me/628983184295?text=Halo%20Nama%20Saya%20Dekdy">
                            <i class="fa-brands fa-whatsapp" style="margin-right: 10px; color:rgb(13, 195, 13)"></i>08983184295
                        </a>
                    </div>
                    <div class="card mt-4 mb-5">
                        <a class="nav-link logo" href="https://www.linkedin.com/in/i-kadek-edy-cahya-dwi-putra-8bb40b223">
                            <i class="fa-brands fa-linkedin" style="margin_right:10px; color:blue;"></i> I Kadek Edy Cahya Dwi Putra
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form action="/kontak/proses" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="exampleEmail11" class="">Username</label>
                                    <input name="username" id="exampleEmail11" type="text" class="form-control">
                                    @if ($errors->has('username'))
                                        <span class="text-danger" style="font-size: 15px;">{{ $errors->first('username')}}
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="examplePassword11" class="">Email</label>
                                    <input name="email" id="examplePassword11" type="text" class="form-control">
                                    @if ($errors->has('email'))
                                        <span class="text-danger" style="font-size: 15px;">{{ $errors->first('email')}}
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Komentar</label>
                            <textarea name="komentar" class="form-control" cols="30" rows="10"></textarea>
                            @if ($errors->has('komentar'))
                                <span class="text-danger" style="font-size: 15px;">{{ $errors->first('komentar')}}
                            @endif
                        </div>
                        <button class="btn btn-outline-dark text-uppercase mb-5">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- /Contact --}}

    <footer class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: rgb(233, 231, 231)!important;">
        <div class="container justify-content-center">
            <a href="" class="navbar-brand">Copyright&copy 2021. by <strong style="color: red;">Kadek-Edy</strong></a>
        </div>
    </footer>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>