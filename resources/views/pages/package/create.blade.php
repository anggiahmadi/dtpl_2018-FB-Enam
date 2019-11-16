@extends('layouts.app')

@section('title')
DTPL Kelompok 6
@endsection

@section('content')

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/single_background.jpg') }}"></div>
		<div class="home_content">
			<div class="home_title">Create Your Own Package</div>
		</div>
	</div>

<!-- Search -->

    <div class="search">
        <!-- Search Contents -->
        <div class="container fill_height">
            <div class="row fill_height">
                <div class="col fill_height">

                    <!-- Search Panel -->

                    <div class="search_panel active">
                        <form method="GET" action="{{ url('package/create') }}" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                            {{-- @csrf --}}
                            <div class="search_item" style="width:80% !important;margin-top: 20px;">
                                <div>Tulis Kota Tujuanmu</div>
                                <input type="text" name="location" class="destination search_input" required="required" value="{{ Request::get('location') }}">
                            </div>
                            <button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Offers -->
	<div class="listing">
		<!-- Single Listing -->
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
                    <br>
                    <h3>Daftar Pilihan</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="30%">Kategori</th>
                                <th width="50%">Nama</th>
                                <th width="20%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Lokasi Wisata</td>
                                <td>
                                    <select name="tourism_site" id="tourism_site" class="form-control select2" style="width:100%">
                                        <option value="">Pilih Lokasi Wisata</option>
                                        @if(!empty($tourism_sites))
                                            @foreach($tourism_sites as $no => $tourism_site)
                                                <option value="{{ $tourism_site->id }}">{{ $tourism_site->name }} : Rp {{ number_format($tourism_site->price, 0, ',', '.') }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </td>
                                <td>
                                    <a class="btn btn-success text-white" onclick="addNewItem('tourism_site')">Tambahkan Ke Daftar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Penyedia Jasa</td>
                                <td>
                                    <select name="service_provider" id="service_provider" class="form-control select2" style="width:100%">
                                        <option value="">Pilih Penyedia Jasa</option>
                                        @if(!empty($service_providers))
                                            @foreach($service_providers as $no => $service_provider)
                                                <option value="{{ $service_provider->id }}">{{ $service_provider->name }} : Rp {{ number_format($service_provider->price, 0, ',', '.') }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </td>
                                <td>
                                    <a class="btn btn-success text-white" onclick="addNewItem('service_provider')">Tambahkan Ke Daftar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Kendaraan</td>
                                <td>
                                    <select name="vehicle" id="vehicle" class="form-control select2" style="width:100%">
                                        <option value="">Pilih Kendaraan</option>
                                        @if(!empty($vehicles))
                                            @foreach($vehicles as $no => $vehicle)
                                                <option value="{{ $vehicle->id }}">{{ $vehicle->name }} : Rp {{ number_format($vehicle->price, 0, ',', '.') }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </td>
                                <td>
                                    <a class="btn btn-success text-white" onclick="addNewItem('vehicle')">Tambahkan Ke Daftar</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Penginapan</td>
                                <td>
                                    <select name="lodgement" id="lodgement" class="form-control select2" style="width:100%" onchange="showLodgementType('{{ url('lodgement/get_by_id') }}', this.value)">
                                        <option value="">Pilih Penginapan</option>
                                        @if(!empty($lodgements))
                                            @foreach($lodgements as $no => $lodgement)
                                                <option value="{{ $lodgement->id }}">{{ $lodgement->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </td>
                                <td>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th width="80%">Jenis Kamar</th>
                                                <th width="20%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select name="lodgement_type" id="lodgement_type" class="form-control select2" style="width:100%">
                                                        <option value="">Pilih Jenis Kamar</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <a class="btn btn-success text-white" onclick="addNewItem('lodgement_type')">Tambahkan Ke Daftar</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				<div class="col-lg-12 col-md-12">

                    <form method="POST" action="{{ url('order') }}" id="order" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                        @csrf
                        <h3>Pilihan Paket</h3>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Harga Satuan</th>
                                    <th>Jumlah (Hari / Kunjungan)</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="detail_custom_package"></tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">
                                        <h3>Total Harga</h3>
                                        <input type="hidden" id="total_price" name="total_price">
                                    </td>
                                    <td class="text-right">
                                        <h3 id="view_total_price"></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="5">
                                        <div class="modal fade modal-mini modal-primary" id="continueTransactionModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-small">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <p id="modal_label">Apa anda yakin dengan tour rancangan ini ?</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-center">
                                                        <button type="button" class="btn btn-warning text-white" data-dismiss="modal">Never mind</button>
                                                        <button type="button" class="btn btn-success text-white" onclick="submitForm('order')">Yes
                                                            <div class="ripple-container"></div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a data-toggle="modal" data-target="#continueTransactionModal" class="col-md-12 btn-lg btn btn-success text-white">Order</a>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </form>
                </div>
                <br>
			</div>
		</div>		
	</div>
@endsection

@section('js')
<script>
    var selectedItem = new Array;
    $(document).ready(function() {
        $('.select2').select2();
    });

    function showLodgementType(link, lodgement_id){
        if(lodgement_id == "") lodgement_id=0;
        var lodgement_type = '<option value="">Pilih Jenis Kamar</option>'
        var url = link+"/"+lodgement_id;
        $.get(url, function (data){
            for(var i=0; i < data.length; i++){
                lodgement_type += '<option value="'+data[i]['id']+'">'+data[i]['name']+' : Rp '+numberWithCommas(data[i]['price'])+'</option>';
            }
            document.getElementById("lodgement_type").innerHTML = lodgement_type;
        });
    }

    function addNewItem(source_from){
        var source_id = document.getElementById(source_from).value;
        var is_available = false;
        var link = '{{ url('') }}';

        if(source_id == ""){
            alert("Maaf, Anda harus memilih salah satu pilihan");
        }else{

            var url = link+"/"+source_from+"/get_by_id/"+source_id;

            for(var i = 0; i < selectedItem; i++){
                if(selectedItem[i]['id'] == source_id && selectedItem[i]['source_from'] == source_from){
                    is_available = true;
                    break;
                }
            }
            
            if(is_available){
                alert("Maaf anda telah memilih item tersebut");
            }else{
                $.get(url, function (data){
                    var newItem = new Array;

                    newItem['id'] = source_id;
                    newItem['source_from'] = source_from;
                    newItem['name'] = data['name'];
                    newItem['price'] = data['price'];
                    newItem['qty'] = 1;
                    newItem['start_date'] = "";
                    newItem['end_date'] = "";

                    selectedItem.push(newItem);

                    alert("Detail data tersimpan");

                    loadData();
                });
            }
        }
    }

    function loadData(){
        detail_custom_package = "";
        for(var i = 0 ; i < selectedItem.length; i++){
            var sub_total = parseFloat(selectedItem[i]['price']) * parseFloat(selectedItem[i]['qty']);

            detail_custom_package += "<tr>";
                detail_custom_package += '<td class="text-center text-white"><a class="btn btn-danger btn-round" onclick="removeDetail('+i+')"><i class="fa fa-times"></i></a></td>';
                detail_custom_package += '<td class="text-center">'+selectedItem[i]['name']+'<input type="hidden" name="item_id[]" value="'+selectedItem[i]['id']+'"></td>';
                detail_custom_package += '<td class="text-right">'+numberWithCommas(selectedItem[i]['price'])+'</td>';
                detail_custom_package += '<td class="text-center"><input type="number" class="form-control" name="qty[]" value="'+selectedItem[i]['qty']+'" min="1" onchange="changeQty('+i+', this.value)"></td>';
                detail_custom_package += '<td class="text-right" id="sub_total_'+i+'">'+numberWithCommas(sub_total)+'</td>';
            detail_custom_package += "</tr>";
        }

        document.getElementById("detail_custom_package").innerHTML = detail_custom_package;
        countPrice();
    }

    function changeQty(i, qty){
        selectedItem[i]['qty'] = qty;

        var sub_total = parseFloat(selectedItem[i]['price']) * parseFloat(selectedItem[i]['qty']);
        document.getElementById("sub_total_"+i).innerHTML = numberWithCommas(sub_total);
        
        countPrice();
    }

    function removeDetail(index){
        selectedItem.splice(index, 1);
        loadData();
    }

    function countPrice(){
        var total_price = 0;
        var sub_total = 0;
        for(var i = 0 ; i < selectedItem.length; i++){
            sub_total = parseFloat(selectedItem[i]['price']) * parseFloat(selectedItem[i]['qty']);
            total_price = parseFloat(total_price) + parseFloat(sub_total);
        }
        total_price = Math.round(total_price);
        document.getElementById("total_price").value = total_price;
        document.getElementById("view_total_price").innerHTML = numberWithCommas(total_price);
    }
</script>
@endsection