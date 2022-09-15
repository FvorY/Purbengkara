@extends('main')
@section('content')

<!-- partial -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item">Setting</li>
        </ol>
      </nav>
    </div>
  	<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Setting</h4>

                    @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                      Success, Product Berhasil Disimpan
                    </div>
                    @endif

                    @if (session('gagal'))
                    <div class="alert alert-danger" role="alert">
                      Gagal, Setting Gagal Disimpan
                    </div>
                    @endif

                    <hr>
                    <form method="POST" class="form-horizontal" action="{{ url('/simpanproduct') }}" accept-charset="UTF-8" id="tambahproduct" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="row">

                       <div class="col-md-12 col-sm-12 col-xs-12" style="height: 1%;">

                        <div class="row">
                          
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Name</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-sm" name="name" value=" ">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Price Min</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-sm" name="priceMin" value=" ">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Price Max</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-sm" name="priceMax" value=" ">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Spek</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <textarea class="form-control form-control-sm" name="spek" value=" ">
                              </textarea>
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Category</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <select class="form-select" name="categoryid" id="categoryid">
                                <option selected>Pilih Category</option>
                                @foreach ($data2 as $item)   
                                  <option value="{{ $item->id_category }}">{{ $item->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>
                          
                          <div id="pembungkus_image">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <label>Image</label>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                <input type="file" class="form-control form-control-sm uploadGambar0" onchange="previewImage(this)" data-index="0" name="image0" accept="image/*">
                              </div>
                            </div>

                            <center>
                            <div class="col-md-8 col-sm-6 col-xs-12 image-holder0" id="image-holder" style="margin-left:10%; ">
                
                            </div>
                          </center>
                          <br>
                          </div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <button type="button" onclick="increment()" class="btn btn-success" style="color: white; border-radius: 18px"><i class="mdi mdi-plus menu-icon"></i></button>
                              
                              <button type="button" onclick="decrement()" class="btn btn-danger" style="border-radius: 18px"><i class="mdi mdi-minus menu-icon"></i></button>
                            </div>
                          </div>

                          
                          
                            


                        </div>
                       </div>
                </div>

              <hr>
              <div class="text-right w-100">
                <button class="btn btn-primary save" type="submit">Simpan</button>
                <a href="" class="btn btn-secondary">Kembali</a>
              </div>
            </div>
          </div>
          </form>
    </div>
  </div>
</div>
<!-- content-wrapper ends -->
@endsection
@section('extra_script')
<script>

var index = 0;

		function increment(){
			
      index++;
			var pembungkus = $("#pembungkus_image");

      var tambah_form = '<div id="hapus_baris_'+index+'"><div class="col-md-12 col-sm-12 col-xs-12">'
        +'<label>Image</label>'
         +'</div>'
        +'<div class="col-md-12 col-sm-12 col-xs-12">'
          +'<div class="form-group">'
            +'<input type="file" name="image'+index+'" onchange="previewImage(this)" data-index="'+index+'" id="image_'+index+'" class="form-control form-control-sm uploadGambar" accept="image/*">'
            +'</div>'
            +'</div>'
            +'<center>'
                  +'<div class="col-md-8 col-sm-6 col-xs-12 image-holder'+index+'" id="image-holder" style="margin-left:10%; ">'
                    +'<img style="display:none;" class="thumb-image img-responsive" height="100px" alt="image">'
                  +'</div>'
                +'</center>'
                +'<br>'
            +'</div>';
            
            $(pembungkus).append(tambah_form);
            
          }

		function decrement(){

			var konfirmasi = confirm("Apakah anda yakin ingin menghapus baris ini?");
			if (konfirmasi) {
				$("#hapus_baris_"+index).remove();
			}else{
				return;
			}

			
		}

function previewImage(elm) {
  let indexElm = $(elm).data("index");

  $('.save').attr('disabled', false);
        // waitingDialog.show();
      if (typeof (FileReader) != "undefined") {
          var image_holder = $(".image-holder"+indexElm);
          image_holder.empty();
          var reader = new FileReader();
          reader.onload = function (e) {
              image_holder.html('<img src="{{ asset('assets/demo/images/loading.gif') }}" width="60px">');
              $('.save').attr('disabled', true);
              setTimeout(function(){
                  image_holder.empty();
                  $("<img />", {
                      "src": e.target.result,
                      "height": "100px",
                  }).appendTo(image_holder);
                  $('.save').attr('disabled', false);
              }, 2000)
          }
          image_holder.show();
          reader.readAsDataURL($(elm)[0].files[0]);
          image_holder.css("display", '');

          // waitingDialog.hide();
      } else {
          // waitingDialog.hide();
          alert("This browser does not support FileReader.");
      }
}

</script>
@endsection
