{{-- header --}}
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card border-0 shadow-lg rounded-4 p-4 p-md-5 text-center bg-white" style="border-radius: 16px;">
                <div class="d-flex justify-content-center mb-3">
                    <div class="bg-white rounded-circle shadow-md d-inline-flex justify-content-center align-items-center overflow-hidden border" style="width: 110px; height: 110px; padding: 8px;">
                        <img src="{{ asset('logo.png') }}" alt="LaundryPro Logo" class="img-fluid rounded-circle" style="width: 100%; height: 100%; object-fit: contain;">
                    </div>
                </div>
                <h2 class="fw-bold text-dark mb-1" style="font-weight: 700; font-size: 1.75rem;">Lacak Status Laundry</h2>
                <p class="text-muted small mb-4">Pantau proses pencucian dan kesiapan nota laundry Anda secara real-time</p>
                
                <div class="input-group input-group-lg shadow-sm mb-3">
                    <input type="text" class="form-control px-3" style="font-size: 1rem; border-color: #1572E8;" id="search_status" placeholder="Masukkan No. Nota (Contoh: TR0392928)" autofocus>
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4 fw-bold" type="button" id="search-btn" style="background-color: #1572E8; border-color: #1572E8; font-weight: 600;">
                            <i class="fa fa-search mr-1"></i> Cari
                        </button>
                    </div>
                </div>

                <div class="text-muted small text-left bg-light p-3 rounded-3 mt-2 border">
                    <i class="fa fa-info-circle text-primary mr-1"></i>
                    <span>Ketikkan nomor invoice / nota transaksi untuk melihat detail pelanggan dan status order.</span>
                </div>
                
                @include('frontend.modal')
            </div>
        </div>
    </div>
</div>
{{-- End Header --}}