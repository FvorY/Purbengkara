@extends('main')

@section('content')
<!-- partial -->
<div class="content-wrapper">
    <div class="col-lg-12">
           <div class="row">
            <div class="col-md-12 stretch-card grid-margin">
              <div class="card bg-gradient-info text-white">
                <div class="card-body" align="center">
                  <h2 class="font-weight-bold mb-3">{{config('app.name')}} Admin</h4>
                  <h4 class="font-weight-normal mb-3">Selamat Datang, {{Auth::user()->name}}</h4>
                  <h5 class="font-weight-normal mb-1">~ Quote of the day ~</h5>
                  <h5 class="font-weight-normal mb-1" id="quotes"></h5>
                  <h5 class="font-weight-normal mb-1" id="byquotes"></h5>
                  <h5 class="font-weight-normal mb-3" id="animequotes"></h5>
                  <b class="font-weight-bold" href="{{url('/')}}"> Visitor</b>
                  <script type='text/javascript' src='https://www.freevisitorcounters.com/auth.php?id=bd363c9c81ae7a44e82ad384579e9e8f6dcac5d3'></script>
                  <script type="text/javascript" src="https://www.freevisitorcounters.com/en/home/counter/964798/t/1"></script>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>

@endsection

@section('extra_script')
<script type="text/javascript">
$.ajax({
  type: "get",
  url: "https://katanime.vercel.app/api/getrandom",
  dataType:'json',
  success:function(data){
    var index = Math.floor(Math.random() * (data.result.length));

    $("#quotes").text(data.result[index].indo);
    $("#byquotes").text("By : " + data.result[index].character);
    $("#animequotes").text("Anime : " + data.result[index].character);
  }
});
</script>
@endsection
