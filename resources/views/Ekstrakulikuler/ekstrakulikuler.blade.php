@extends('layout.app')

@section('title','Ekstrakulikuler')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Ekstrakulikuler Kami</h1>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Ekstrakulikuler</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <!-- Services Start -->
        <div class="container-fluid bg-light service py-5">
            <div class="container py-5">
                <div class="mx-auto text-center mb-5" style="max-width: 900px;">
                    <h5 class="section-title px-3">Ekstrakulikuler</h5>
                    <h1 class="mb-0">Ekstrakulikuler Kami</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Debat</h5>
                                        <p class="mb-0">Klub debat adalah tempat di mana siswa dapat meningkatkan keterampilan berbicara di depan umum, logika, dan argumentasi. Mereka terlibat dalam diskusi mendalam tentang berbagai topik kontroversial dan belajar bagaimana membangun argumen yang kuat.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center  bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Paduan Suara</h5>
                                        <p class="mb-0">Ekstrakurikuler paduan suara memberikan kesempatan kepada siswa untuk mengekspresikan diri melalui seni musik. Mereka belajar teknik vokal, harmonisasi, dan kerja sama tim dalam menciptakan karya musik yang indah.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Klub Sains</h5>
                                        <p class="mb-0">Klub sains memungkinkan siswa untuk mengeksplorasi dunia ilmu pengetahuan di luar kelas. Mereka melakukan eksperimen, mempelajari konsep-konsep baru, dan mengembangkan keterampilan penelitian yang mendalam.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 pe-0">
                                    <div class="service-content text-end">
                                        <h5 class="mb-4">Seni Tari</h5>
                                        <p class="mb-0">Ekstrakurikuler seni tari memberikan kesempatan kepada siswa untuk belajar berbagai jenis tari, mulai dari tari tradisional hingga kontemporer. Mereka mengembangkan keterampilan motorik, ekspresi emosional, dan kreativitas mereka melalui gerakan tubuh.
                                        </p>
                                    </div>
                                    <div class="service-icon p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-globe fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Kewirausahaan</h5>
                                        <p class="mb-0">Klub kewirausahaan memberikan siswa pemahaman tentang dunia bisnis dan keterampilan untuk menciptakan dan mengelola usaha kecil. Mereka belajar tentang perencanaan bisnis, pemasaran, dan manajemen keuangan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-hotel fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Olahraga</h5>
                                        <p class="mb-0">im olahraga sekolah menawarkan kesempatan kepada siswa untuk berpartisipasi dalam kompetisi atletik dan mengembangkan keterampilan fisik, kerja tim, dan kepemimpinan. Ini juga membantu mempromosikan kesehatan dan kebugaran.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-user fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Lingkungan</h5>
                                        <p class="mb-0">Klub lingkungan bertujuan untuk meningkatkan kesadaran tentang isu-isu lingkungan dan mendorong tindakan berkelanjutan di sekolah dan masyarakat. Siswa terlibat dalam proyek-proyek penanaman pohon, daur ulang, dan kampanye kesadaran lingkungan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="service-content-inner d-flex align-items-center bg-white border border-primary rounded p-4 ps-0">
                                    <div class="service-icon p-4">
                                        <i class="fa fa-cog fa-4x text-primary"></i>
                                    </div>
                                    <div class="service-content">
                                        <h5 class="mb-4">Penulisan</h5>
                                        <p class="mb-0">Klub penulisan memberikan siswa platform untuk mengekspresikan kreativitas mereka melalui tulisan. Mereka belajar teknik penulisan kreatif, membaca karya sastra, dan memberikan umpan balik satu sama lain untuk meningkatkan kualitas tulisan mereka.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Ekstrakulikuler lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services End -->

        @endsection