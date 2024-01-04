@extends('layouts.siode-front.app-master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>BADAN PERMUSYAWARATAN DESA</P>
            </h3>
            {{-- <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 250px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div> --}}
            <img src="{{ asset('img/selapajangbpd.jpg') }}" class="card-img-top" alt="Foto Ketua" width="100px" height="700px">
        </div>
    </div>
    {{-- <div class="card-body">
        <div class="container">

            <div class="row mt-4">

                <div class="col-md-4 mx-auto">
                    <div class="info-box bg-danger">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ketua</span>
                            <span class="info-box-number">SUBAETI</span>
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

                <div class="info-box bg-danger">
                    <span class="info-box-icon">

                        <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                            height="100px">
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Wakil Ketua</span>
                        <span class="info-box-number">Sueb Rizal</span>
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
                <div class="info-box bg-danger">
                    <span class="info-box-icon">

                        <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                            height="100px">
                    </span>

                    <div class="info-box-content">
                        <span class="info-box-text">Sekretaris</span>
                        <span class="info-box-number">Ahmad Sarippudin</span>
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
                    <div class="info-box bg-danger">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Anggota</span>
                            <span class="info-box-number">SUWANDI</span>
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
                    <div class="info-box bg-danger">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Anggota</span>
                            <span class="info-box-number">SUHENDRI</span>
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
                    <div class="info-box bg-danger">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Anggota</span>
                            <span class="info-box-number">SAMTO</span>
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
                    <div class="info-box bg-danger">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Anggota</span>
                            <span class="info-box-number">MARSUDI</span>
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
                    <div class="info-box bg-danger">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Anggota</span>
                            <span class="info-box-number">BUDI</span>
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
                    <div class="info-box bg-danger">
                        <span class="info-box-icon">

                            <img src="{{ asset('img/icon2.png') }}" class="card-img-top" alt="Foto Ketua" width="100px"
                                height="100px">
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Anggota</span>
                            <span class="info-box-number">SRI SERTIARI</span>
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
