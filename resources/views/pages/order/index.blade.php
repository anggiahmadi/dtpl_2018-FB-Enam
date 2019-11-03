@extends('layouts.app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.css') }}">
@endsection

@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/bromolandscape.jpg') }}"></div>
    <div class="home_content">
        <div class="home_title">Lokasi Wisata</div>
    </div>
</div>


{{-- 
 ________  __                                                        __                            __                                                          __                                     
/        |/  |                                                      /  |                          /  |                                                        /  |                                    
$$$$$$$$/ $$ |____    ______          _______   ______   _______   _$$ |_     ______   _______   _$$ |_           ______    ______    ______    _______       $$ |____    ______    ______    ______  
   $$ |   $$      \  /      \        /       | /      \ /       \ / $$   |   /      \ /       \ / $$   |         /      \  /      \  /      \  /       |      $$      \  /      \  /      \  /      \ 
   $$ |   $$$$$$$  |/$$$$$$  |      /$$$$$$$/ /$$$$$$  |$$$$$$$  |$$$$$$/   /$$$$$$  |$$$$$$$  |$$$$$$/         /$$$$$$  |/$$$$$$  |/$$$$$$  |/$$$$$$$/       $$$$$$$  |/$$$$$$  |/$$$$$$  |/$$$$$$  |
   $$ |   $$ |  $$ |$$    $$ |      $$ |      $$ |  $$ |$$ |  $$ |  $$ | __ $$    $$ |$$ |  $$ |  $$ | __       $$ |  $$ |$$ |  $$ |$$    $$ |$$      \       $$ |  $$ |$$    $$ |$$ |  $$/ $$    $$ |
   $$ |   $$ |  $$ |$$$$$$$$/       $$ \_____ $$ \__$$ |$$ |  $$ |  $$ |/  |$$$$$$$$/ $$ |  $$ |  $$ |/  |      $$ \__$$ |$$ \__$$ |$$$$$$$$/  $$$$$$  |      $$ |  $$ |$$$$$$$$/ $$ |      $$$$$$$$/ 
   $$ |   $$ |  $$ |$$       |      $$       |$$    $$/ $$ |  $$ |  $$  $$/ $$       |$$ |  $$ |  $$  $$/       $$    $$ |$$    $$/ $$       |/     $$/       $$ |  $$ |$$       |$$ |      $$       |
   $$/    $$/   $$/  $$$$$$$/        $$$$$$$/  $$$$$$/  $$/   $$/    $$$$/   $$$$$$$/ $$/   $$/    $$$$/         $$$$$$$ | $$$$$$/   $$$$$$$/ $$$$$$$/        $$/   $$/  $$$$$$$/ $$/        $$$$$$$/ 
                                                                                                                /  \__$$ |                                                                            
                                                                                                                $$    $$/                                                                             
                                                                                                                 $$$$$$/                                                                              
--}}

<div class="intro">    
    <div class="container">
        {{-- 
             ______                   __                             ______                             __ 
            /      \                 /  |                           /      \                           /  |
           /$$$$$$  |  ______    ____$$ |  ______    ______        /$$$$$$  |  ______    ______    ____$$ |
           $$ |  $$ | /      \  /    $$ | /      \  /      \       $$ |  $$/  /      \  /      \  /    $$ |
           $$ |  $$ |/$$$$$$  |/$$$$$$$ |/$$$$$$  |/$$$$$$  |      $$ |       $$$$$$  |/$$$$$$  |/$$$$$$$ |
           $$ |  $$ |$$ |  $$/ $$ |  $$ |$$    $$ |$$ |  $$/       $$ |   __  /    $$ |$$ |  $$/ $$ |  $$ |
           $$ \__$$ |$$ |      $$ \__$$ |$$$$$$$$/ $$ |            $$ \__/  |/$$$$$$$ |$$ |      $$ \__$$ |
           $$    $$/ $$ |      $$    $$ |$$       |$$ |            $$    $$/ $$    $$ |$$ |      $$    $$ |
            $$$$$$/  $$/        $$$$$$$/  $$$$$$$/ $$/              $$$$$$/   $$$$$$$/ $$/        $$$$$$$/                                                                                                             
        --}}
        <div class="row">
            <div class="col-12">
                <div class="card" style="sha">
                    <div class="card-body" style="color: black;">
                        <div class="row">
                            <div class="col">
                                <h2>Order</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 offset-1">
                                {{ $tourism_site->name }}
                                <p>{{ $tourism_site->desc }}</p>
                                <br>
                                Tanggal pemesanan:
                                <div id="tanggal-berangkat"></div>
                            </div>
                            <div class="col">
                                <button id="hapus_tiket" type="button" class="btn btn-primary">-</button>
                            </div>
                            <div class="col">
                                <h4 id="jumlah_tiket" style="padding-top: 10px;">1</h4>
                            </div>
                            <div class="col">
                                <button id="tambah_tiket" type="button" class="btn btn-primary">+</button>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
        {{-- 
            _______            __                             ______                             __ 
           /       \          /  |                           /      \                           /  |
           $$$$$$$  | ______  $$/   _______   ______        /$$$$$$  |  ______    ______    ____$$ |
           $$ |__$$ |/      \ /  | /       | /      \       $$ |  $$/  /      \  /      \  /    $$ |
           $$    $$//$$$$$$  |$$ |/$$$$$$$/ /$$$$$$  |      $$ |       $$$$$$  |/$$$$$$  |/$$$$$$$ |
           $$$$$$$/ $$ |  $$/ $$ |$$ |      $$    $$ |      $$ |   __  /    $$ |$$ |  $$/ $$ |  $$ |
           $$ |     $$ |      $$ |$$ \_____ $$$$$$$$/       $$ \__/  |/$$$$$$$ |$$ |      $$ \__$$ |
           $$ |     $$ |      $$ |$$       |$$       |      $$    $$/ $$    $$ |$$ |      $$    $$ |
           $$/      $$/       $$/  $$$$$$$/  $$$$$$$/        $$$$$$/   $$$$$$$/ $$/        $$$$$$$/                                                                                           
        --}}
        <div class="row">
            <div class="col-12">
                <div class="card" style="sha">
                    <div class="card-body" style="color: black;">
                        <div class="row">
                            <div class="col">
                                <h2>Price</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 offset-1">
                                <h4>Total harga</h4>
                            </div>
                            <div class="col">
                                <h4 style="padding-top: 10px;">Rp <span id="harga_total">{{ $tourism_site->price }}</span></h4>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>
        {{-- 
         _______                                                          __             ______                             __ 
        /       \                                                        /  |           /      \                           /  |
        $$$$$$$  | ______   __    __  _____  ____    ______   _______   _$$ |_         /$$$$$$  |  ______    ______    ____$$ |
        $$ |__$$ |/      \ /  |  /  |/     \/    \  /      \ /       \ / $$   |        $$ |  $$/  /      \  /      \  /    $$ |
        $$    $$/ $$$$$$  |$$ |  $$ |$$$$$$ $$$$  |/$$$$$$  |$$$$$$$  |$$$$$$/         $$ |       $$$$$$  |/$$$$$$  |/$$$$$$$ |
        $$$$$$$/  /    $$ |$$ |  $$ |$$ | $$ | $$ |$$    $$ |$$ |  $$ |  $$ | __       $$ |   __  /    $$ |$$ |  $$/ $$ |  $$ |
        $$ |     /$$$$$$$ |$$ \__$$ |$$ | $$ | $$ |$$$$$$$$/ $$ |  $$ |  $$ |/  |      $$ \__/  |/$$$$$$$ |$$ |      $$ \__$$ |
        $$ |     $$    $$ |$$    $$ |$$ | $$ | $$ |$$       |$$ |  $$ |  $$  $$/       $$    $$/ $$    $$ |$$ |      $$    $$ |
        $$/       $$$$$$$/  $$$$$$$ |$$/  $$/  $$/  $$$$$$$/ $$/   $$/    $$$$/         $$$$$$/   $$$$$$$/ $$/        $$$$$$$/ 
                        /  \__$$ |                                                                                          
                        $$    $$/                                                                                           
                         $$$$$$/                                                                                                
        --}}
        <div class="row">
            <div class="col-12">
                <div class="card" style="sha">
                    <div class="card-body" style="color: black;">
                        <div class="row">
                            <div class="col">
                                <h2>Metode Pembayaran</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-8 offset-1">
                                <select placeholder="Pilih metode" style="color: black;" class="form-control" id="metode_pembayaran">
                                    <option value="bank-transfer">Bank Transfer</option>
                                    <option value="mobile-banking">Mobile Banking</option>
                                    <option value="internet-banking">Internet Banking</option>
                                    <option value="merchant">Melalui Merchant</option>
                                </select>
                            </div>
                            <div class="col">
                                <form method="POST" action="/order">
                                    {{ csrf_field() }}
                                    <input id="harga_satuan" type="hidden" value="{{ $tourism_site->price }}"/>
                                    {{-- Field-field di bawah ini akan dikirim ke controller melalui form. --}}
                                    <input name="tourism_site" type="hidden" value="{{ $tourism_site->id }}"/>
                                    <input name="jumlah_tiket" type="hidden" value="1" />
                                    <input name="metode_pembayaran" type="hidden" value="bank-transfer" />
                                    <button type="submit" class="btn btn-success">Bayar!</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>    
        </div>    
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/jquery-ui-1.12.1/jquery-ui.js') }}"></script>
<script>
    $(document).ready(() => {
        // Menyimpan jumlah tiket yang ingin dipesan
        let jumlahTiket = 1;
        // Mendapatkan harga satuan tiketnya.
        let hargaSatuan = $('#harga_satuan').val();

        const updateJumlahTiket = () => {
            // Menampilkan jumlah tiket yang dipesan.
            $('#jumlah_tiket').html(jumlahTiket);
            $('#harga_total').html(hargaSatuan * jumlahTiket);

            // Meng-update jumlah tiket pada form.
            $('input[name="jumlah_tiket"]').val(jumlahTiket);
        };

        // Menampilkan kalender untuk jadwal wisata.
        $('#tanggal-berangkat').datepicker({
            dateFormat: 'yy-mm-dd'
        });

        // Memberi event handler (penanganan kejadian) ketika tombol tambah tiket diklik.
        $('#tambah_tiket').click(() => {
            jumlahTiket++;
            updateJumlahTiket();
        });

        // Memberi event handler (penanganan kejadian) ketika tombol hapus tiket diklik.
        $('#hapus_tiket').click(() => {
            if (jumlahTiket === 1) {
                return;
            }

            jumlahTiket--;
            updateJumlahTiket();
        });

        $('#metode_pembayaran').change($event => {
            $('input[name="metode_pembayaran"]').val($event.target.value);
        });

        // $('#tanggal-berangkat').val()
    });
</script>
@endsection