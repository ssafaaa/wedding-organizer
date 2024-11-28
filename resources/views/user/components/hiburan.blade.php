<form id="form-hiburan" method="POST" action="{{ route('keranjanghiburan.store') }}">
    @csrf
    <div class="row">
        @foreach ($hiburan as $hb)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item hiburan">
                <div class="d-flex">
                    <div class="block2" style="margin-right: 20px; margin-left: 10px">
                        <div class="block2-pic hov-img0" style="height: 242px; width: 200px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $hb->foto_hiburan) }}" alt="IMG-PRODUCT">

                        <a href="#"
                        class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Quick View
                        </a>
                    </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l">
                                <label class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    <input type="radio" name="hiburan" value="{{ $hb->id_hiburan }}">
                                    {{ $hb->nama_hiburan }}
                                </label>
                                <span class="stext-105 cl3">
                                    Rp{{ number_format($hb->harga_sewa_hiburan, 0, ',', '.') }},00
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
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</form>
