@extends('root.root_tutor_layout')

@push('styles')
  <!-- Cropper -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-0SPWAwpC/17yYyZ/4HSllgaK7/gg9OlVozq8K7rf3J8LvCjYEEIfzzpnA2/SSjpGIunCSD18r3UhvDcu/xncWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endpush

@section('content')
  <div class="container">
    <div class="profile-section" style="padding-top:0;">
      <div class="card card-body rounded-corner">
        <form class="form-group form-type-round" action="{{ route('dashboard.tutor.profile-update') }}"style="width:100%;" method="POST" enctype="multipart/form-data">
          @method('PUT')
          @csrf
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
              <div class="profile-pict" style="width:100%;">
                @if ($basicProfile->avatar)
                    <img class="rounded-corner cropper-preview" src="{{ asset('avatar/'.$basicProfile->avatar) }}" alt="">
                @else
                    <img class="rounded-corner cropper-preview" src="{{ asset('assets/img') }}/no-photo.png" alt="">
                @endif
                <div class="file-group file-group-inline" style="margin-left:auto; margin-right:auto; margin-top:20px; width:100%;">
                  <button class="btn btn-primary rounded-corner2 file-browser" style="width:100%;" type="button">Ganti Foto</button>
                  <input type="file" name="avatar" class="image" accept=".png, .jpg, .jpeg">
                  <input type="hidden" name="base64image" id="base64image">
                  <input type="hidden" name="old_avatar" value="{{ $basicProfile->avatar }}">
                </div>
              </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <label for="first_name">Nama Depan</label>
              <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $basicProfile->first_name }}" placeholder="Nama Depan">
              <label for="last_name">Nama Belakang</label>
              <input type="text" class="form-control" id="last_name" name="last_name"value="{{ $basicProfile->last_name }}" placeholder="Nama Belakang">
              <label for="phone">Nomor Hp</label>
              <input type="text" class="form-control" id="phone" name="phone" value="{{ $basicProfile->phone }}" placeholder="Nomor Hp">
              <label for="address">Alamat</label>
              <input type="text" class="form-control" id="Alamat" name="address" value="{{ $basicProfile->address }}" placeholder="Alamat">
             {{--  <label for="city">Kota</label>
              <input type="text" class="form-control" id="city" name="city" placeholder="Kota"> --}}
              <label for="bank_account_number">Nomor Rekening</label>
              <input type="text" class="form-control" id="bank_account_number" name="bank_account_number" value="{{ $tutorProfile->bank_account_number }}" placeholder="Rekening Anda">
              <label for="bank_name">Nama Bank</label>
              <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{ $tutorProfile->bank_name }}" placeholder="Nama Bank">
              <label for="bank_owner">Pemilik Rekening</label>
              <input type="text" class="form-control" id="bank_owner" name="bank_owner" value="{{ $tutorProfile->bank_owner }}" placeholder="Pemilik Rekening">
              <label for="fee_per_session">Tarif</label>
              <input type="text" class="form-control" id="rate" name="rate" value="{{ $tutorProfile->fee_per_session }}" placeholder="Tarif per sesi">
            </div>

            <div class="col-lg-5 col-md-5 col-sm-12">

              <label for="bio">Bio</label>
              <textarea class="form-control" id="bio" rows="6"> {{ $tutorProfile->bio }} </textarea>
              <label for="last-degree">Pendidikan Terakhir</label>
              <textarea class="form-control" id="last-degree" rows="6"> {{ $tutorProfile->last_degree_desc }} </textarea>
              {{-- <label for="">Upload KTP anda</label>
              <div class="input-group form-type-round file-group">
                <input type="text" class="form-control file-value" placeholder="Pilih file..." readonly="">
                <input type="file" multiple="">
                <span class="input-group-append">
                  <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                </span>
              </div>
              <label for="">Upload ijazah terakhir</label>
              <div class="input-group form-type-round file-group">
                <input type="text" class="form-control file-value" placeholder="Pilih file..." readonly="">
                <input type="file" multiple="">
                <span class="input-group-append">
                  <button class="btn btn-light file-browser" type="button"><i class="fa fa-upload"></i></button>
                </span>
              </div> --}}

            </div>

          </div>
          <button type="submit" class="btn btn-primary btn-round w-100" name="button" style="margin:30px 0 0 0; width:100%;">Simpan</button>
        </form>

        </div>
        <button type="submit" class="btn btn-info rounded-corner2" name="button" style="margin:30px 0 0 0; width:100%;">Simpan</button>
      </form>

    </div>
  </div>

  <div class="modal fade" id="modal-img-crop" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Crop image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="img-container">
                    <div class="row">
                        <div class="col-md-8">
                            <!--  default image where we will set the src via jquery-->
                            <img class="img-cropper" id="image">
                        </div>
                        <div class="col-md-4">
                            <div class="preview"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="crop">Crop</button>
            </div>
        </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js" integrity="sha512-ooSWpxJsiXe6t4+PPjCgYmVfr1NS5QXJACcR/FPpsdm6kqG1FmQ2SVyg2RXeVuCRBLr0lWHnWJP6Zs1Efvxzww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    var bs_modal = $('#modal-img-crop');
    var image = document.getElementById('image');
    var cropper,reader,file;


    $("body").on("change", ".image", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            bs_modal.modal('show');
        };


        if (files && files.length > 0) {
            file = files[0];

            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });

    bs_modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 1,
            viewMode: 3,
            preview: '.preview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });

    $("#crop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });

        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
               var base64data = reader.result;
               $('#base64image').val(base64data);
               $('.cropper-preview').attr("src", base64data);
               bs_modal.modal('hide');
            }
        });
    });
  </script>
@endpush
