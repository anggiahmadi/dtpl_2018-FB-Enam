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
                        <form method="GET" action="{{ url('order/create') }}" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start" style="margin-top: -50px;margin-bottom: -20px;">
                            <div class="search_item" style="width:20% !important;margin-top: 20px;">
                                <div>Tulis Kota Tujuanmu</div>
                                <input type="text" name="location" id="location" class="destination search_input" required="required" value="{{ Request::get('location') }}">
                            </div>
                            <div class="search_item text-center" style="width:20% !important;margin-top: 20px;">
                                <div>From</div>
                                <input type="date" name="start_date" id="start_date" class="destination search_input text-center" onchange="onPeriodeChanged('start_date')" required="required" @if(!empty(Request::get('start_date'))) value="{{ Request::get('start_date') }}" @else value="{{ date('Y-m-d') }}" @endif>
                            </div>
                            <div class="search_item text-center" style="width:20% !important;margin-top: 20px;">
                                <div>Lama Wisata</div>
                                <input type="number" name="length_of_term" id="length_of_term" class="destination search_input text-center" onchange="onPeriodeChanged('length_of_term')" required="required" @if(!empty(Request::get('length_of_term'))) value="{{ Request::get('length_of_term') }}" @else value="1" @endif>
                            </div>
                            <div class="search_item text-center" style="width:20% !important;margin-top: 20px;">
                                <div>To</div>
                                <input type="date" name="end_date" id="end_date" class="destination search_input text-center" onchange="onPeriodeChanged('end_date')" required="required" @if(!empty(Request::get('end_date'))) value="{{ Request::get('end_date') }}" @else value="{{ date('Y-m-d') }}" @endif>
                            </div>
                            <button type="submit" class="button search_button">search<span></span><span></span><span></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Offers -->
    @if(!empty(Request::get('location')))
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
                                                    <option value="{{ $service_provider->id }}">{{ $service_provider->name }} ( @foreach($service_provider->service_provider_types as $no => $service_provider_type) @if($no > 0) + @endif {{ $service_provider_type->name }} @endforeach ) : Rp {{ number_format($service_provider->price, 0, ',', '.') }}</option>
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
                            <input type="hidden" name="is_custom" value="Y">
                            <input type="hidden" name="cp_location" value="{{ Request::get('location') }}">
                            <input type="hidden" name="cp_start_date" value="{{ Request::get('start_date') }}">
                            <input type="hidden" name="cp_length_of_term" value="{{ Request::get('length_of_term') }}">
                            <input type="hidden" name="cp_end_date" value="{{ Request::get('end_date') }}">
                            <h3>Pilihan Paket</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Harga Satuan</th>
                                        <th>Periode Waktu</th>
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
                                                            <p id="modal_label">Apa anda yakin dengan rancangan wisata ini ?</p>
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
    @endif
@endsection

@section('js')
<script>
    var selectedItem = new Array;
    $(document).ready(function() {
        $('.select2').select2();
    });
    
    function onPeriodeChanged(driven_by, others=''){
        var start_date = document.getElementById("start_date"+others).value;
        var length_of_term = document.getElementById("length_of_term"+others).value;
        var end_date = document.getElementById("end_date"+others).value;

        var link = "{{ url('setup_periode') }}";
        var url = link+"?driven_by="+driven_by+"&start_date="+start_date+"&length_of_term="+length_of_term+"&end_date="+end_date;

        $.get(url, function (data){
            if(data['message'] == 'complete'){
                document.getElementById("start_date"+others).value = data['start_date'];
                document.getElementById("length_of_term"+others).value = data['length_of_term'];
                document.getElementById("end_date"+others).value = data['end_date'];
            }
            if(others != ''){
                var main_start_date = "{{ Request::get('start_date') }}";
                var main_end_date = "{{ Request::get('end_date') }}";

                var calc_m_start_date = new Date(main_start_date);
                var calc_m_end_date = new Date(main_end_date);
                
                var calc_s_start_date = new Date(data['start_date']);
                var calc_s_end_date = new Date(data['end_date']);
            
                if(calc_m_start_date > calc_s_start_date || calc_m_end_date < calc_s_start_date){
                    alert("maaf anda tidak bisa memilih tanggal dibawah tanggal awal anda");
                    start_date = main_start_date;
                    document.getElementById("start_date"+others).value = start_date;
                    onPeriodeChanged('start_date', others);
                }

                if(calc_m_start_date > calc_s_end_date || calc_m_end_date < calc_s_end_date){
                    alert("maaf anda tidak bisa memilih tanggal diatas tanggal akhir anda");
                    end_date = main_end_date;
                    document.getElementById("end_date"+others).value = end_date;
                    onPeriodeChanged('end_date', others);
                }
                
                var i = others.substr(1);

                selectedItem[i]['start_date'] = data['start_date'];
                selectedItem[i]['end_date'] = data['end_date'];
            }
        });
    }

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
        var start_date = document.getElementById("start_date").value;
        var end_date = start_date;
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
                    newItem['start_date'] = start_date;
                    newItem['end_date'] = end_date;

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
                detail_custom_package += '<td class="text-center">';
                    detail_custom_package += '<input type="hidden" name="source_from[]" value="'+selectedItem[i]['source_from']+'">';
                    detail_custom_package += '<input type="date" class="form-control text-center" name="start_date_detail[]" id="start_date_'+i+'" value="'+selectedItem[i]['start_date']+'" onchange="onPeriodeChanged('+"'start_date'"+', '+"'_"+i+"'"+')"> <br>';
                    detail_custom_package += '<input type="number" class="form-control text-center" name="length_of_term_detail[]" id="length_of_term_'+i+'" value="'+selectedItem[i]['qty']+'" min="1" onchange="changeQty('+i+', this.value);onPeriodeChanged('+"'length_of_term'"+', '+"'_"+i+"'"+');"> <br>';
                    detail_custom_package += '<input type="date" class="form-control text-center" name="end_date_detail[]" id="end_date_'+i+'" value="'+selectedItem[i]['end_date']+'" onchange="onPeriodeChanged('+"'end_date'"+', '+"'_"+i+"'"+')"> <br>';
                detail_custom_package += '</td>'
                detail_custom_package += '<td class="text-right" id="sub_total_'+i+'">'+numberWithCommas(sub_total)+'</td>';
            detail_custom_package += "</tr>";
        }

        document.getElementById("detail_custom_package").innerHTML = detail_custom_package;
        countPrice();
    }

    function changeQty(i, qty){
        var length_of_term = parseFloat({{ Request::get('length_of_term') }});

        if(parseFloat(length_of_term) < parseFloat(qty)){
            alert('Maaf anda tidak bisa membuat pesanan lebih dari waktu yang anda buat')
            qty = 1;
        }

        selectedItem[i]['qty'] = qty;

        var sub_total = parseFloat(selectedItem[i]['price']) * parseFloat(selectedItem[i]['qty']);
        document.getElementById("sub_total_"+i).innerHTML = numberWithCommas(sub_total);
        document.getElementById("length_of_term_"+i).value = qty;
        
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