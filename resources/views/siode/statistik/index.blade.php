@extends('layouts.siode.app')
@section('title', 'Statistik Kependudukan')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Kependudukan</P>
            </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <tapble border="1">
                {{-- <thead>
                    <tr>
                        <th colspan="2">DESA</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="2" rowspan="2">Penduduk</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody> --}}
                </table>
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="small-box bg-info">

                            <div class="inner">

                                <title>Informasi Penduduk Indonesia</title>

                                <h1>Penduduk</h1>
                                <p>Penduduk adalah semua orang yang berdomisili di wilayah geografis Republik Indonesia
                                    selama 6 bulan atau lebih dan atau mereka yang berdomisili kurang dari 6 bulan tetapi
                                    bertujuan untuk menetap.</p>

                                <p>Pada pelaksanaan SP2020, terdapat pembaharuan konsep penduduk menjadi:</p>
                                <p>Penduduk adalah semua orang yang berdomisili di wilayah Negara Kesatuan Republik
                                    Indonesia selama 1 tahun atau lebih atau mereka yang berdomisili kurang dari 1 tahun
                                    tetapi bertujuan untuk menetap.</p>

                                <h1>Usia</h1>
                                <p>Informasi tentang tanggal, bulan dan tahun dari waktu kelahiran responden menurut sistem
                                    kalender Masehi. Informasi ini digunakan untuk mengetahui umur dari responden.
                                    Penghitungan umur harus selalu dibulatkan kebawah, atau disebut juga umur menurut ulang
                                    tahun yang terakhir. Apabila tanggal, bulan maupun tahun kelahiran seseorang tidak
                                    diketahui, pencacah dapat menghubungkan dengan kejadian-kejadian penting baik nasional
                                    maupun daerah.</p>

                                <h1>Status Perkawinan</h1>
                                <ul>
                                    <li>Belum Kawin: Status dari mereka yang pada saat pencacahan belum terikat dalam
                                        perkawinan.</li>
                                    <li>Kawin: Status dari mereka yang pada saat pencacahan terikat dalam perkawinan, baik
                                        tinggal bersama maupun terpisah. Termasuk didalamnya mereka yang kawin sah secara
                                        hukum (hukum adat, agama, negara, dsb) maupun mereka yang hidup bersama dan oleh
                                        masyarakat sekelilingnya dianggap sebagai suami istri.</li>
                                    <li>Cerai Hidup: Status dari mereka yang telah hidup berpisah dengan suami atau istrinya
                                        karena bercerai dan belum kawin lagi.</li>
                                    <li>Cerai Mati: Status untuk mereka yang telah hidup berpisah dengan suami atau istrinya
                                        karena meninggal dunia dan belum kawin lagi.</li>
                                </ul>

                                <h1>Anak</h1>
                                <p>Anak Lahir Hidup adalah semua anak yang waktu lahir memperlihatkan tanda-tanda kehidupan,
                                    walaupun sesaat, seperti adanya detak jantung, bernafas, menangis, dan tanda-tanda
                                    kehidupan lainnya.</p>

                                <p>Anak masih hidup adalah semua anak yang dilahirkan hidup yang pada saat pencacahan masih
                                    hidup, baik tinggal bersama orang tuanya maupun yang tinggal terpisah.</p>

                                <h1>Tempat Lahir</h1>
                                <p>Tempat lahir responden adalah propinsi tempat tinggal ibu kandungnya pada saat
                                    melahirkan.</p>




                            </div>
                            <div class="icon">
                                {{-- <i class="ion ion-bag"></i>  --}}
                                {{-- <i class="fa-solid fa-chart-simple"></i> --}}
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>

                        </div>

                    </div>
                </div>
        </div>
    </div>
@endsection
