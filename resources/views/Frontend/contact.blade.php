@extends('layouts.Frontend.contact')

@section('content')
    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/frontend/images/tiket.jpg);">
    	<div class="container">
    		<div class="text">
		        <center>
                    <h1 style="font-size:80px; color:burlywood"><strong class="name-banner"><font face="Arial">Contact Us</font><strong></h1>
                </center>
		    </div>
    	</div>
    </section>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          {{-- <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Website</span> <a href="#">yoursite.com</a></p>
          </div> --}}
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last pr-md-5">
            <form id="form-contact">
              <div class="form-group">
                <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
              </div>
              <div class="form-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="Alamat Email">
              </div>
              <div class="form-group">
                <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul">
              </div>
              <div class="form-group">
                <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control" placeholder="Isi Pesan"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" id="kirim" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>

          </div>

          <div class="col-md-6">
          	<div id="map"></div>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function (){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            });
                $('#form-contact').trigger("reset");

            var tambah = $('#form-contact');
            tambah.on('submit', function(e) {
                e.preventDefault();
                $.ajax({
                    url: '/contact-us',
                    method: 'POST',
                    data: tambah.serialize(),
                    success: function (res) {
                        // Swal.fire({
                        //     title: 'God Job!',
                        //     text: 'Send Message Successfully',
                        //     type: 'success',
                        //     showConfirmButton: false,
                        //     timer: 15000
                        //     })
                        location.reload();
                    },
                    error: function (err) {
                        console.log(err)
                        if (err.status == 422) {
                            console.log(err.responseJSON);
                            $('#success_message').fadeIn().html(err.responseJSON.message);
                            console.warn(err.responseJSON.errors);
                            $.each(err.responseJSON.errors, function (i, error) {
                                var el = $(document).find('[id="'+i+'"]');
                                el.after($('<small style="color: red;">'+error[0]+'</small>'));
                            });
                        }
                    }
                })
            })
        });
    </script>
@endsection
