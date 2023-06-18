@extends('layouts.Frontend.app')
@section('title')
    Visi dan Misi
@endsection

@section('content')
    @section('about')
        <div class="container">
            @if ($visimisi)
                <div class="row about-page1-inner" style="margin-top: 5%">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-content-holder">
                            <div class="content-box">
                                <h2>VISI</h2>
                                <!--<p class="sub-title-full-width-justify" align="justify">{{$visimisi->visi}}</p>-->
                                <p>Terwujudnya manusia Yang “Berprestasi Berdasarkan Imtaq dan Iptek”dengan berwawasan lingkungan</p>
                                <ol type="1">
                                    <li>Unggul dalam pengembangan kurikulum</li>
                                    <li>Unggul dalam proses pembelajaran</li>
                                    <li>Unggul dalam kelulusan</li>
                                    <li>Unggul dalam sumber daya pendidik dan tenaga kependidikan</li>
                                    <li>Unggul dalam sarana prasarana pendidikan</li>
                                    <li>Unggul dalam manajemen sekolah</li>
                                    <li>Unggul dalam standard penilaian akademik dan non akademik</li>
                                    <li>Unggul dalam penggalangan biaya pendidikan</li>
                                    <li>Unggul dalam SDM yang beriman, bertaqwa dan berakhlak mulia dengan berwawasan lingkungan</li>
                                </ol>
                            </div>
                            <div class="content-box">
                                <h2>MISI</h2>
                                <!--<p class="sub-title-full-width-justify" align="justify">{{$visimisi->misi}}</p>-->
                                <ol type="1">
                                    <li align="justify">Melaksanakan Proses Belajar Mengajar dan bimbingan secara efektif sehingga setiap siswa berkembang secara optimal sesuai dengan potensi yang dimilki</li>
                                    <li align="justify">Menumbuh kembangkan semangat berprestasi, rajin belajar, disiplin, suka bekerja keras, gemar membaca dan menulis.</li>
                                    <li align="justify">Menumbuhkembangkan penghayatan terhadap ajaran agama yang dianut dan juga budaya bangsa sehingga menjadi sumber kearifan dalam bertindak.</li>
                                    <li align="justify">Menerapkan manajemen parisipatif dengan melibatkan seluruh warga sekolah dan kelompok kepentingan yang terkait dengan berwawasan lingkungan.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="about-page-img-holder">
                            <img src="{{asset('storage/images/visimisi/' .$visimisi->image)}}" class="img-responsive" alt="visimisi">
                        </div>
                    </div>
                </div>
            @else
                <img src="{{asset('Assets/Frontend/img/empty.svg')}}" class="img-responsive" style="object-fit:cover; margin-top:5% !important; display: block;
            margin: 0 auto;">
            @endif
        </div>
    @endsection

    {{-- Guru --}}
    @section('guru')
        @include('frontend.content.guru')
    @endsection
@endsection
