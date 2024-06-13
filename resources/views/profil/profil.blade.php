@extends('layout.app')

@section('title','Profil')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Profil</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">About</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->




        <!-- About Start -->
        <div class="container-fluid about py-5">
    <div class="container py-5">
        <table class="table">
            <tbody>
                <tr>
                    <td class="col-lg-5">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgf9UHq5hKfwK-s439hXUvCSpmyBZCxtrE0Q&s" class="img-fluid w-100 h-100" alt="">
                    </td>
                    <td class="col-lg-7" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url(img/about-img-1.png);">
                        <h5 class="section-about-title pe-3">Profil</h5>
                        <h1 class="mb-4">Profil <span class="text-primary">SMKN 1 Banyuwangi</span></h1>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Didirikan</th>
                                    <td>1 Juni 1968</td>
                                </tr>
                                <tr>
                                    <th>Akreditasi</th>
                                    <td>A</td>
                                </tr>
                                <tr>
                                    <th>NPSN</th>
                                    <td>20525590</td>
                                </tr>
                                <tr>
                                    <th>Kepala Sekolah</th>
                                    <td>Drs. Mulyadi, M.Pd</td>
                                </tr>
                                <tr>
                                    <th>Visi</th>
                                    <td>Terwujudnya lulusan berkualitas, berdaya saing dan berbudaya bangsa</td>
                                </tr>
                                <tr>
                                    <th>Misi:</th>
                                    <td>Mengoptimalkan pembelajaran berbasis industri dan project riil, Mengembangkan kerjasama dengan iduka skala nasional/ internasional, Meningkatkan kerja sama dengan perguruan tingi vokasi, Mengembangkan kemampuan berwirausaha melalui kerja sama dengan dunia usaha, Meningkartkan pembelajaran yang bertakwa, peduli dan berbudaya lingkungan</td>
                                </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Read More</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

        <!-- About End -->
         <!-- Video YouTube -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row justify-content-center"> <!-- Menggunakan justify-content-center untuk meletakkan video di tengah -->
            <div class="col-lg-6 text-center"> <!-- Menggunakan text-center untuk membuat video berada di tengah -->
                <h2 class="text-center mb-4">Profil Video</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jLfKERUu0FQ" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Services Start -->
        
        <!-- Subscribe End -->
         @endsection