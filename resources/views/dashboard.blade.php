@extends('Layout.mainLayout')

@section('container')
<div class="d-flex justify-content-center align-middle mt-5">
    <div class="container row row-cols-auto d-flex justify-content-center">
        <div class="card m-2 shadow p-3 mb-5 bg-body-tertiary rounded" id="box-0" style="width: 25rem;">
            <h4 class="title" id="title-0">Semua Rekam Medis</h4>
            <article class="plot" id="plot-0">Rekam medis keseluruhan</article>
        </div>
        <div class="card m-2 shadow p-3 mb-5 bg-body-tertiary rounded" id="box-1" style="width: 25rem;">
            <h4 class="title" id="title-1">Bedasarkan Pasien</h4>
            <article class="plot" id="plot-1">Mengambil rekam medis terkait pasien tertentu</article>
        </div>
        <div class="card m-2 shadow p-3 mb-5 bg-body-tertiary rounded" id="box-2" style="width: 25rem;">
            <h4 class="title" id="title-2">Bedasarkan Dokter</h4>
            <article class="plot" id="plot-2">Mengambil rekam medis terkait dokter tertentu</article>
        </div>
    </div>
</div>
@endsection
    
    
