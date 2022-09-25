@extends('main')
@section('content')

<!-- partial -->
<div class="content-wrapper">
  <div class="row">
    <div class="col-lg-12">
      <nav aria-label="breadcrumb" role="navigation">
        <ol class="breadcrumb bg-info">
          <li class="breadcrumb-item"><i class="fa fa-home"></i>&nbsp;<a href="{{url('/home')}}">Home</a></li>
          <li class="breadcrumb-item"><a href="{{url('/product')}}">Special Price</a></li>
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
                      Success, Product Berhasil Disimpan
                    </div>
                    @endif

                    @if (session('gagal'))
                    <div class="alert alert-danger" role="alert">
                      Gagal, Product Gagal Disimpan
                    </div>
                    @endif

                    <hr>
                    <form method="POST" class="form-horizontal" action="{{ url('/simpanspecialprice') }}" accept-charset="UTF-8" id="tambahspecialprice" enctype="multipart/form-data">
                      {{csrf_field()}}
                      <div class="row">

                       <div class="col-md-12 col-sm-12 col-xs-12" style="height: 1%;">

                        <div class="row">

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Pilih Product</label>
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
                              <input type="text" id="price" class="form-control form-control-sm rp" name="price" value="@if(isset($data)){{FormatRupiahFront($data->price)}}@endif">
                              <p id="pesan_price"></p>
                            </div>
                          </div>

                          <div class="col-md-4 col-sm-6 col-xs-12">
                            <label>Note</label>
                          </div>
                          <div class="col-md-4 col-sm-3 col-xs-12">
                            <div class="form-group">
                              <input type="text" id="note" class="form-control form-control-sm" name="note" value="@if(isset($data)){{$data->note}}@endif">
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
                              <ol id="list">
                              </ol>
                            </div>
                          </div>
                        </div>
                       </div>
                </div>
              <hr>
              <div class="text-right w-100">
                <button onclick="validasi()" type="button"  class="btn btn-primary" >Simpan</button>
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

  $(document).ready(
    function(){
      $('#btn-tambah').click(
          function(){
              var toAdd = $('input[name=note]').val();
                $('#list').append(
                '<li>' + toAdd + '&ensp; <span class="fa fa-trash" style="color:red"> </span>  </li>');
          })

      $("input[name=note]").keyup(function(event){
        if(event.keyCode == 13){
          $("#btn-tambah").click();
        }         
      })

      $(document).on('click','li', function(){
          $(this).toggleClass('strike').fadeOut('slow');    
        });
        
        $('input').focus(function() {
          $(this).val('');
        });
      
      $('#list').sortable();    
    })

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
