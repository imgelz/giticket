@extends('layouts.Frontend.single-event')

@section('content')

    <div class="card mb-3">
        <img class="card-img-top" src="/frontend/images/konser1.jpg" alt="Card image cap">
        <div class="card-body">
            <h1 class="card-title">Card title</h1>
            <span style="color:burlywood"> Kategori</span>
            <hr>
            <div class="row">
                <div class="col-sm">
                    <h6><b>Penyelenggara</b></h6>
                    <br>
                    <div class="">
                        <img src="/frontend/images/konser.jpg" alt="Cinque Terre" width="120px">
                    </div>
                    <div class="">
                        <span>SMK Assalaam Bandung</span>
                    </div>
                </div>
                <div class="col-sm">
                    <h6><b>Tanggal & Waktu</b></h6>
                    <br>
                    <div class="row">
                        <div>
                            <img src="/frontend/icon/calendar.png"  width="30px">
                            <br>
                            <img class="waktu" src="/frontend/icon/clock.png" width="30px" style="margin-top:1.5rem">
                        </div>
                        <div class="col-sm">
                            <span>12 Mar 2020 - 13 Mar 2020</span><br><br>
                            <span>20:00 - 23:00 WIB</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <h6><b>Lokasi</b></h6>
                    <br>
                    <div class="row">
                        <div class="">
                        <img src="/frontend/icon/pin.png" width="30px">
                        </div>
                        <div class="col-sm"><span>Gg.Saluyu Selatan No.111 RT03/09 Sayati Margahayu Kab.Bandungg</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-3" style="border:plum">
        <nav>
            <div class="nav nav-tabs" id="nav-tab">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#deskripsi" role="tab"><h3>Deskripsi</h3></a>
                <a class="nav-item nav-link" id="nav-profil-tab" data-toggle="tab" href="#syarat" role="tab"><h3>Syarat & Ketentuan</h3></a>
            </div>
        </nav>
        <br>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="deskripsi" role="tabpanel">
            <h4>Home</h4>
            <p>Selamat datang di tutorial bootstrap 4 di www.malasngoding.com.</p>
        </div>
        <div class="tab-pane fade" id="syarat" role="tabpanel">
            <h4>Profil</h4>
            <p>hai, Saya Diki.</p>
        </div>
    </div>
    <hr style="border-top: 1px solid black;">
    <br>
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-11 tiketnya">
                    <b style="font-size:1.8rem; color:#686868">Presale Ticket</b>
                </div>
                <div class="col-1">
                    <a class="badge badge-danger" style="color:white">HABIS</a>
                </div>
            </div>
            <hr>
            <div class="destik">
                <small style="color:#a7a7a7">sdapsdapsdapsdapsdap</small>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm harga">
                    <b style="font-size:1.8rem; color:#686868">Rp 5000</b>
                </div>
                <div class="col-sm-2">
                    <div>
                        <div class="input-group">
                                <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                    -
                                </button>
                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="0" min="1" max="5" readonly>
                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                    +
                                </button>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>
<footer style="background-color:#f4f4f4; padding:2em 0">
    <section class="col-lg-12">
        <div class="row">
            <div class="col-md-2" style="margin-left:2rem">
                <img src="/frontend/icon/ticket.png" alt="" srcset="">
            </div>
            <div class="col-md">
                <h3 style="margin-bottom:-1rem">Nama Event</h3>
                <br>
                <span>Anda belum memilih tiket</span>
            </div>
            <div class="col-md-2">
                <h3>Sub-Total : </h3>
                <br>
                <h3><b>Rp 5.000.000</b></h3>
            </div>
            <div class="col-sm-2" style="margin-left:2rem">
                <br>
                <br>
                <button>Beli Tiket</button>
            </div>
        </div>
    </section>
</footer>

@endsection

@section('js')
    <script type="text/javascript">
    $(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        });

            var quantitiy=0;
            $('.quantity-right-plus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                    $('#quantity').val(quantity + 1);
                    if(quantity==3){
                        $('#quantity').val(quantity =3);
                        $('.quantity-right-plus').prop('disabled')
                    // if(quantity<5){
                    //     $('#quantity').val(quantity <5);
                    //     $('.quantity-right-plus').prop('disabled', false)
                    }
            });

            $('.quantity-left-minus').click(function(e){
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());
                    if(quantity>0){
                        $('#quantity').val(quantity - 1);
                    }
            });
    });
</script>
@endsection
