@extends('user.layouts.assets')

@section('content')
    @include('user.layouts.navbar')
    @include('user.layouts.bg')
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12">
                        <h1>
                            <strong>
                                Filter
                            </strong>
                        </h1>
                        <div class="card">
                            <div class="card-body">
                                Location
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                Categories
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Event
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Promo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-warning" style="width: 100%">Apply Filter</button>
                            <button type="button" class="btn btn-light mt-2" style="width: 100%">Clear
                                Filter</button>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <h1 class="text-center">
                            <strong>
                                All Cafe
                            </strong>
                        </h1>
                        <div class="card mb-5" style="border-radius: 20px;">
                            <img src="<?= asset('user/assets/img/assets1.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                Lokasi
                                <br>
                                Kategori
                                <br>
                                Tanggal
                                <br>
                                Waktu
                                <br>
                                <br>
                                Deskripsi
                                <br>
                                <a href="#" class="btn btn-primary text-center mt-4" style="width: 100%;">See
                                    Details</a>
                            </div>
                        </div>
                        <div class="card mb-5" style="border-radius: 20px;">
                            <img src="<?= asset('user/assets/img/assets1.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                Lokasi
                                <br>
                                Kategori
                                <br>
                                Tanggal
                                <br>
                                Waktu
                                <br>
                                <br>
                                Deskripsi
                                <br>
                                <a href="#" class="btn btn-primary text-center mt-4" style="width: 100%;">See
                                    Details</a>
                            </div>
                        </div>
                        <div class="card mb-5" style="border-radius: 20px;">
                            <img src="<?= asset('user/assets/img/assets1.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                Lokasi
                                <br>
                                Kategori
                                <br>
                                Tanggal
                                <br>
                                Waktu
                                <br>
                                <br>
                                Deskripsi
                                <br>
                                <a href="#" class="btn btn-primary text-center mt-4" style="width: 100%;">See
                                    Details</a>
                            </div>
                        </div>
                        <div class="card mb-5" style="border-radius: 20px;">
                            <img src="<?= asset('user/assets/img/assets1.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Judul</h5>
                                Lokasi
                                <br>
                                Kategori
                                <br>
                                Tanggal
                                <br>
                                Waktu
                                <br>
                                <br>
                                Deskripsi
                                <br>
                                <a href="#" class="btn btn-primary text-center mt-4" style="width: 100%;">See
                                    Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    @include('user.layouts.footer')
@endsection