@extends('main')
@section('content')

<!-- partial -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('/specialprice')}}">Special Price</a></li>
          <li class="breadcrumb-item">Manage Special Price</li>
        </ol>
      </nav>
    </div>
  	<div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Manage Product</h4>

                    @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                      Success, Special Price Berhasil Disimpan
                    </div>
                    @endif

                    @if (session('gagal'))
                    <div class="alert alert-danger" role="alert">
                      Gagal, Special Price Gagal Disimpan
                    </div>
                    @endif

                    <hr>
                    <form method="POST" class="form-horizontal" action="{{ url('/simpanspecialprice') }}" accept-charset="UTF-8" id="tambahspecialprice" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="row">

                       <div class="col-md-12 col-sm-12 col-xs-12" style="height: 1%;">

                        <div class="row">
                          <input type="hidden" name="id" value="@if(isset($data)){{$data->id_specialprice}}@endif">
                          <input type="hidden" name="count" id="count" value="@if(isset($data)) {{count(explode('+',$data->note))}} @else 0 @endif">
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Pilih Produk</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <select class="form-select" id="productid" name="productid" >
                                <option selected value="0">Pilih Product</option>

                                @foreach ($data_product as $item)
                                <option value="{{ $item->id_product }}" @if(isset($data)) @if($item->id_product == $data->productid) selected @endif @endif>{{ $item->name }}</option>
                                @endforeach

                              </select>
                              <p id="pesan_productid"></p>
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Name</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="text" id="name" class="form-control form-control-sm" name="name" value="@if(isset($data)){{$data->name}}@endif">
                              <p id="pesan_name"></p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Price</label>
                          </div>
                          <div class="col-md-8 col-sm-6 col-xs-12">
                            <div class="form-group">
                              <input type="text" id="price" class="form-control form-control-sm" name="price" value="@if(isset($data)){{$data->price}}@endif">
                              <p id="pesan_price"></p>
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Note</label>
                          </div>
                          <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="form-group">
                              <input type="text" id="note" class="form-control form-control-sm" name="note">
                              <p id="pesan_note"></p>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="form-group">
                              <button type="button" id="btn-tambah" class="btn btn-success" style="color: white; border-radius: 18px"><i class="mdi mdi-plus menu-icon"></i></button>
                            </div>
                          </div>

                          <div class=" col-md-8 col-sm-6 col-xs-12 offset-md-4">
                            <div class="border">
                              <table class="table table_status table-hover" cellspacing="0">
                                  <thead class="bg-gradient-info">
                                    <tr>
                                      <th style="width:15px">No</th>
                                      <th>Name</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody align="center" id="list">
                                    @if(isset($data))
                                      <?php $note = explode("+",$data->note) ?>
                                      @for ($i = 0; $i < count($note); $i++)
                                      <tr id="list{{$i + 1}}">
                                        <td>{{$i + 1}}</td>
                                        <td>{{$note[$i]}}<input type="hidden" name="note[]" value="{{$note[$i]}}"></td>
                                        <td><button type="button" class="btn btn-danger" name="button" onclick="deleteList()"><span class="fa fa-trash" style="color:white"> </span></button></td>
                                      </tr>
                                      @endfor
                                    @endif
                                  </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                       </div>
                </div>
              <hr>
              <div class="text-right w-100">
                <button onclick="validasi()" type="button"  class="btn btn-primary" >Simpan</button>
                <a href="{{url('/')}}/specialprice" class="btn btn-secondary">Kembali</a>
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
var index = parseInt($("#count").val());
  $(document).ready(
    function(){

        $('#btn-tambah').click(
            function(){
                var toAdd = $('input[name=note]').val();
                if(toAdd != "") {
                  index++;

                  let html = '<tr id="list'+index+'">'+
                              '<td>'+(index)+'</td>'+
                              '<td>'+toAdd+'<input type="hidden" name="note[]" value="'+toAdd+'"></td>'+
                              '<td><button type="button" class="btn btn-danger" name="button" onclick="deleteList()"><span class="fa fa-trash" style="color:white"> </span></button></td>'+
                            '</tr>';

                  $("#list").append(html);

                  $('input[name=note]').val('');
                } else {
                  iziToast.warning({
                      icon: 'fa fa-info',
                      message: 'Isi Note terlebih dahulu!',
                  });
                }
            });

       $("input[name=note]").keyup(function(event){
          if(event.keyCode == 13){
            $("#btn-tambah").click();
          }
      })
    });

    function deleteList() {
      $("#list"+index).remove();
      index--;
    }

function validasi() {

  var productid = $( "#productid" ).val();
  var name = $( "#name" ).val();
  var price = $( "#price" ).val();

    if (productid == 0){
      $( "#productid" ).focus().css("border-color","red");
      $("#pesan_productid").html("Product tidak boleh kosong!").css("color", "red");
    }else if (name == ""){
      $( "#name" ).focus().css("border-color","red");
      $("#pesan_name").html("Nama tidak boleh kosong!").css("color", "red");
    }else if (price == "") {
      $( "#price" ).focus().css("border-color","red");
      $("#pesan_price").html("Price tidak boleh kosong!").css("color", "red");
    } else{
      $("#tambahspecialprice").submit();
		}
	}

</script>
@endsection
