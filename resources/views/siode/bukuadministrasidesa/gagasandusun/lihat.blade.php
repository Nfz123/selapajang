@extends('layouts.siode.navbaratas')
@section('title', 'Gagasan Dusun')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="content-wrapper" style="min-height: 529.4px;">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1>DAFTAR GAGASAN DUSUN/ KELOMPOK :</h1>
                            </div>
                            <div class="col-sm-6 d-none d-sm-block">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Kanban Board</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="content pb-3">
                    <div class="container-fluid">
                        <div class="card card-row card-secondary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Kegiatan
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="card card-info card-outline">
                                    {{-- <div class="card-header">
                                        <h5 class="card-title">Judul Kegiatan</h5>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-tool btn-link">#3</a>
                                            <a href="#" class="btn btn-tool">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                                    <div class="card-body">
                                        <div class="card-body">
                                            <style>
                                                .table-geser th {
                                                    text-align: center;
                                                    vertical-align: middle;
                                                    justify-content: center;
                                                }

                                                .bg-planing {
                                                    background-color: #7FB3D5;
                                                    /* Ganti dengan warna yang diinginkan */
                                                }

                                                .bg-realisasi {
                                                    background-color: #e6d1b2;
                                                    /* Ganti dengan warna yang diinginkan */
                                                }

                                                .bg-star {
                                                    background-color: #56c871;

                                                }
                                            </style>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-geser">
                                                    <thead>
                                                        <tr>
                                                            <th style="width: 10px" rowspan="2">No</th>
                                                            <th style="vertical-align: middle-" rowspan="2">RT</th>
                                                            <th rowspan="2">RW</th>
                                                            <th rowspan="2">Kegiatan</th>
                                                            <th rowspan="2">Lokasi Kegiatan</th>
                                                            <th rowspan="2">Perkiraan Volume</th>
                                                            <th rowspan="2">Satuan</th>
                                                            <th colspan="6" class="bg-planing">Planing</th>
                                                            <th colspan="6" class="bg-realisasi">Realisasi</th>
                                                            <th rowspan="2">Diajukan<br>Kepada</th>
                                                            <th rowspan="2">Status</th>
                                                            <th colspan="3" class="bg-star">Pengerjaan</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="bg-planing">2022</th>
                                                            <th class="bg-planing">2023</th>
                                                            <th class="bg-planing">2024</th>
                                                            <th class="bg-planing">2025</th>
                                                            <th class="bg-planing">2026</th>
                                                            <th class="bg-planing">2027</th>
                                                            <th class="bg-realisasi">2022</th>
                                                            <th class="bg-realisasi">2023</th>
                                                            <th class="bg-realisasi">2024</th>
                                                            <th class="bg-realisasi">2025</th>
                                                            <th class="bg-realisasi">2026</th>
                                                            <th class="bg-realisasi">2027</th>
                                                            <th class="bg-star">Star</th>
                                                            <th class="bg-star">Finish</th>
                                                            <th class="bg-star">Jumlah Hari</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($gagasandusun as $value => $fm)
                                                            <tr>
                                                                <td class="text-center">{{ $gagasandusun->firstItem() + $value }}</td>
                                                                <td>{{ $fm->rt }}</td>
                                                                <td>
                                                                    {{ $fm->rw }}
                                                                </td>
                                                                <td>{{ $fm->gagasan }}</td>
                                                                <td>{{ $fm->lokasi_kegiatan }}</td>
                                                                <td>{{ $fm->perkiraanvolume }}</td>
                                                                <td>{{ $fm->satuan }}</td>
                                                                {{-- <td><span class="badge bg-danger">55%</span></td> --}}
                                                                {{-- <td style="color: blue;">&#x2713;</td> --}}
                                                                <td style="color: red;" class="table-geser">
                                                                    {{ html_entity_decode($fm->planing2022) }}</td>
                                                                <td style="color: red;" class="table-geser">
                                                                    {{ html_entity_decode($fm->planing2023) }}</td>
                                                                <td style="color: red;">
                                                                    {{ html_entity_decode($fm->planing2024) }}</td>
                                                                <td style="color: red;">
                                                                    {{ html_entity_decode($fm->planing2025) }}</td>
                                                                <td style="color: red;">
                                                                    {{ html_entity_decode($fm->planing2026) }}</td>
                                                                <td style="color: red;">
                                                                    {{ html_entity_decode($fm->planing2027) }}</td>
                                                                <td style="color: BLUE;">
                                                                    {{ html_entity_decode($fm->realisasi2022) }}</td>
                                                                <td style="color: blue;">
                                                                    {{ html_entity_decode($fm->realisasi2023) }}</td>
                                                                <td style="color: blue;">
                                                                    {{ html_entity_decode($fm->realisasi2024) }}</td>
                                                                <td style="color: blue;">
                                                                    {{ html_entity_decode($fm->realisasi2025) }}</td>
                                                                <td style="color: blue;">
                                                                    {{ html_entity_decode($fm->realisasi2026) }}</td>
                                                                <td style="color: blue;">
                                                                    {{ html_entity_decode($fm->realisasi2027) }}</td>
                                                                <td style="color: blue;">{{ $fm->diajukan }}</td>
                                                                <td style="color: blue;">{{ $fm->status }}</td>
                                                                <td style="color: blue;">{{ $fm->pengerjaanstar }}</td>
                                                                <td style="color: blue;">{{ $fm->pengerjaanfinish }}</td>
                                                                <td style="color: blue;">{{ $fm->jumlahhari }}</td>
                                                            </tr>
                                                        @empty
                                                            <h4>tidak ada data</h4>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="card-footer clearfix">

                                                Halaman : {{ $gagasandusun->currentPage() }} <br />
                                                Jumlah Data : {{ $gagasandusun->total() }} <br />
                                                Data Per Halaman : {{ $gagasandusun->perPage() }}
                                                <ul class="pagination pagination-sm float-right m-0">
                                                    {{ $gagasandusun->links() }}
                                                </ul>
                                            </div>
                                        </div>
                                        {{-- <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="customCheckbox5"
                                                disabled="">
                                            <label for="customCheckbox5" class="custom-control-label">Examples</label>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card card-row card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    To Do
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Create first milestone</h5>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-tool btn-link">#5</a>
                                            <a href="#" class="btn btn-tool">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="card card-row card-default">
                            <div class="card-header bg-info">
                                <h3 class="card-title">
                                    In Progress
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="card card-light card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Update Readme</h5>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-tool btn-link">#2</a>
                                            <a href="#" class="btn btn-tool">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                                            Aenean commodo ligula eget dolor. Aenean massa.
                                            Cum sociis natoque penatibus et magnis dis parturient montes,
                                            nascetur ridiculus mus.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="card card-row card-success">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Done
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="card card-primary card-outline">
                                    <div class="card-header">
                                        <h5 class="card-title">Create repo</h5>
                                        <div class="card-tools">
                                            <a href="#" class="btn btn-tool btn-link">#1</a>
                                            <a href="#" class="btn btn-tool">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ URL::asset('assets/dist/plugins/sweetalert2/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var nama_data = $(this).attr('data-nama');
            event.preventDefault();
            swal({
                    title: `Apakah anda yakin ?`,
                    text: "Data " + nama_data + " yang dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal(
                            'Terhapus!',
                            'Data berhasil di Hapus!',
                            'success'
                        )
                    }
                });
        });
    </script>
@endpush
