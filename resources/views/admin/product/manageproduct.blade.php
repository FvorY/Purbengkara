@extends('main')
@section('content')

<!-- partial -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('/product')}}">Product</a></li>
          <li class="breadcrumb-item">Manage Product</li>
        </ol>
      </nav>
    </div>
  	<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Product</h4>

                    @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                      Success, Product Berhasil Disimpan
                    </div>
                    @endif

                    @if (session('gagal'))
                    <div class="alert alert-danger" role="alert">
                      Gagal, Product Gagal Disimpan
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
                              <input type="text" class="form-control form-control-sm" name="name" value="@if(isset($data)){{$data->name}}@endif">
                              <input type="hidden" name="id" value="@if(isset($data)){{$data->id_product}}@endif">
                              <input type="hidden" id="countImage" name="countImage" value="@if(isset($data)){{count($image)}} @else 1 @endif">
                              <input type="hidden" id="replaceImageID" name="replaceImageID" value="">
                              <input type="hidden" id="removeImageID" name="removeImageID" value="">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Price Min</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-sm rp" name="priceMin" value="@if(isset($data)){{FormatRupiahFront($data->priceMin)}}@endif">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Price Max</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="text" class="form-control form-control-sm rp" name="priceMax" value="@if(isset($data)){{FormatRupiahFront($data->priceMax)}}@endif">
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Spek</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <textarea class="form-control form-control-sm" name="spek" rows="8" cols="80">@if(isset($data)){{$data->spek}}@endif</textarea>
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Category</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <select class="form-select" name="categoryid" id="categoryid">
                                <option selected>Pilih Category</option>
<<<<<<< HEAD:resources/views/admin/product/manageproduct.blade.php
<<<<<<< HEAD:resources/views/admin/product/manageproduct.blade.php
<<<<<<< HEAD:resources/views/admin/product/manageproduct.blade.php
                                @foreach ($data2 as $item)
                                  <option value="{{ $item->id_category }}" @if(isset($data)) @if($item->id_category == $data->categoryid) selected @endif @endif>{{ $item->name }}</option>
=======
=======
>>>>>>> 0350219cacf8fb870cafc85e63a0d78589fee673:resources/views/admin/product/tambahproduct.blade.php
=======
>>>>>>> 0350219cacf8fb870cafc85e63a0d78589fee673:resources/views/admin/product/tambahproduct.blade.php
                                @foreach ($data2 as $item)   
                                  <option value="{{ $item->id_category }}">{{ $item->name }}</option>
>>>>>>> 0350219cacf8fb870cafc85e63a0d78589fee673:resources/views/admin/product/tambahproduct.blade.php
                                @endforeach
                              </select>
                            </div>
                          </div>

                          <div id="pembungkus_image">
                            @if(isset($data))
                              @for ($i = 0; $i < count($image); $i++)
                                @if($i == 0)
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <label>Image</label>
                                  </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <input type="file" id="files{{$i}}" class="form-control form-control-sm uploadGambar0" onchange="previewImage(this)" data-index="0" data-idrender="{{$image[$i]->id_productImage}}" name="image0" accept="image/*">
                                    </div>
                                  </div>

                                  <center>
                                  <div class="col-md-8 col-sm-6 col-xs-12 image-holder0" id="image-holder" style="margin-left:10%; ">
                                    <img src="{{url('/')}}/{{$image[$i]->image}}" class="thumb-image img-responsive" height="100px" alt="image">
                                  </div>
                                  </center>
                                  <br>
                                @else
                                <div id="hapus_baris_{{$i}}"><div class="col-md-12 col-sm-12 col-xs-12">
                                  <label>Image</label>
                                   </div>
                                  <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                      <input type="file" id="files{{$i}}" name="image{{$i}}" onchange="previewImage(this)" data-index="{{$i}}" id="image_{{$i}}" data-idrender="{{$image[$i]->id_productImage}}" class="form-control form-control-sm uploadGambar" accept="image/*">
                                      </div>
                                      </div>
                                      <center>
                                        <div class="col-md-8 col-sm-6 col-xs-12 image-holder{{$i}}" id="image-holder" style="margin-left:10%; ">
                                          <img src="{{url('/')}}/{{$image[$i]->image}}" class="thumb-image img-responsive" height="100px" alt="image">
                                        </div>
                                      </center>
                                    <br>
                                </div>
                                @endif
                              @endfor
                            @else
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
<<<<<<< HEAD:resources/views/admin/product/manageproduct.blade.php
<<<<<<< HEAD:resources/views/admin/product/manageproduct.blade.php
<<<<<<< HEAD:resources/views/admin/product/manageproduct.blade.php
=======
                
>>>>>>> 0350219cacf8fb870cafc85e63a0d78589fee673:resources/views/admin/product/tambahproduct.blade.php
=======
                
>>>>>>> 0350219cacf8fb870cafc85e63a0d78589fee673:resources/views/admin/product/tambahproduct.blade.php
=======
                
>>>>>>> 0350219cacf8fb870cafc85e63a0d78589fee673:resources/views/admin/product/tambahproduct.blade.php
                            </div>
                            </center>
                            <br>
                            @endif
                          </div>

                          <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                              <button type="button" onclick="increment()" class="btn btn-success" style="color: white; border-radius: 18px"><i class="mdi mdi-plus menu-icon"></i></button>

                              <button type="button" onclick="decrement()" class="btn btn-danger" style="color: white; border-radius: 18px"><i class="mdi mdi-minus menu-icon"></i></button>
                            </div>
                          </div>

                        </div>
                       </div>
                </div>

              <hr>
              <div class="text-right w-100">
                <button class="btn btn-primary save" type="submit">Simpan</button>
                <a href="{{url('/')}}/product" class="btn btn-secondary">Kembali</a>
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

var index = parseInt($("#countImage").val()) - 1;
var replaceImageID = [];
var removeImageID = [];

		function increment(){

      index++;
      $("#countImage").val(index);
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
        let idrender = $("#files"+index).data("idrender");
				$("#hapus_baris_"+index).remove();

        if (idrender != undefined) {
          removeImageID[index] = index;
          $("#removeImageID").val(removeImageID);
        }

        index--;
        $("#countImage").val(index);
			}else{
				return;
			}
		}

function previewImage(elm) {
  let indexElm = $(elm).data("index");

  let idrender = $(elm).data('idrender');

  if (idrender != undefined) {
    replaceImageID[indexElm] = indexElm;
    $("#replaceImageID").val(replaceImageID);
  }

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
                      "class": "thumb-image img-responsive",
                      "src": e.target.result,
                      "height": "100px",
                  }).appendTo(image_holder);
                  $('.save').attr('disabled', false);
              }, 2000)
          }
          image_holder.show();
          reader.readAsDataURL($(elm)[0].files[0]);
          image_holder.css("display", '');
      } else {
          alert("This browser does not support FileReader.");
      }
}

</script>
@endsection