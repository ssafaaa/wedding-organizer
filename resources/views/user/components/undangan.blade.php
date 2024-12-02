<form id="form-undangan" method="POST" action="{{ route('keranjangundangan.store') }}">
    @csrf
    <div class="row">
        <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item undangan">
            <div class="d-flex">
                @foreach ($undangans as $undangan)
                    <div class="block2" style="margin-right: 20px; margin-left: 10px">
                        <div class="block2-pic hov-img0" style="height: 242px; width: 200px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $undangan->foto_undangan) }}" alt="IMG-PRODUCT">
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <label class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    <input type="radio" name="undangan" value="{{ $undangan->id_undangan }}">
                                    {{ $undangan->nama_undangan }}
                                </label>
                                <span class="stext-105 cl3">
                                    Rp{{ number_format($undangan->harga_undangan, 0, ',', '.') }},00
                                </span>
                            </div>

                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04"
                                        src="{{ asset('cst/booking/images/icons/icon-heart-01.png') }}" alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                        src="images/icons/icon-heart-02.png" alt="ICON">
                                </a>
                            </div>

                            <div class="row">
                                <div class="p-t-15">
                                    <label for="undangan_quantity" class="form-label">Quantity</label>
                                    <input type="number" class="form-control" name="undangan_quantity">
                                </div>
                                <div style="margin-right: 30px; margin-left: 20px; width:100%">
                                    <!-- Tambahkan tombol di luar foreach -->
                                    <div class="p-t-20">
                                        <button type="submit" class="btn btn-primary w-100">
                                            Tambahkan ke Keranjang
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</form>
