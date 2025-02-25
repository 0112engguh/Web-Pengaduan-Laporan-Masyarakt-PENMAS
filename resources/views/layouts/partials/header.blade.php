<style>
    .vr {
        margin-top: auto;
        margin-bottom: auto;
        height: 2rem;
    }
</style>
<div class="d-flex justify-content-center">
    <div class="border d-flex mt-3 rounded-3 w-75" style="height: 8vh">
        <p class="me-3 ms-3 align-content-center mb-0 fw-bold opacity-50">{{ \Carbon\Carbon::now()->translatedFormat('l, d F Y') }}</p>
        <div class="vr me-3"></div>
        <div class="w-50 inputs align-content-center">
            <span><i class="fa fa-search"></i></span><input type="text" class="form-control " placeholder="Cari Laporan...">
        </div>
        <div class="vr ms-3 fw-bold me-3"></div>
    </div>
</div>