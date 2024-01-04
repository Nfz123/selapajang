@extends('layouts.siode-front.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>LEMBAGA PEMBERDAYAAN MASYARAKAT</P>
            </h3>

            <img src="{{ asset('img/selapajanglpm.jpg') }}" class="card-img-top" alt="Foto Ketua" width="100px" height="700px">
        </div>
        {{-- <div class="card-body">
            <div class="container">

                <div class="row mt-4">

                    <div class="col-md-4 mx-auto">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Ketua</span>
                                <span class="info-box-number">M. PAUJI</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4  mx-auto">

                    <div class="info-box bg-info">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Sekretaris</span>
                            <span class="info-box-number">SUBANDI</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Periode 2021-2026
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col-md-4  mx-auto">
                    <div class="info-box bg-info">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Bendahara</span>
                            <span class="info-box-number">ROHMAN</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                Periode 2021-2026
                            </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">JASIMAN</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">DIDN S.</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                    height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">NANING</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua"
                                    width="100px" height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">UBAEDILLAH</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua"
                                    width="100px" height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">NANING</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua"
                                    width="100px" height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">DIDI TARMIDI</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua"
                                    width="100px" height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">EKO SUMANTRI</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua"
                                    width="100px" height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">SAPRUDIN</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="info-box bg-info">
                            <span class="info-box-icon">

                                <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua"
                                    width="100px" height="100px">
                            </span>

                            <div class="info-box-content">
                                <span class="info-box-text">Anggota</span>
                                <span class="info-box-number">ARI ANWARI</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 70%"></div>
                                </div>
                                <span class="progress-description">
                                    Periode 2021-2026
                                </span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    </div>
@endsection
@push('scripts')
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endpush
