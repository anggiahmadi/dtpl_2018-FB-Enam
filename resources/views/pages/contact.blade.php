@extends('layouts.app-withoutfooter')

@section('content')
<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="{{ asset('images/about_background.jpg') }}"></div>
    <div class="home_content">
        <div class="home_title">Hubungi Kami</div>
        <!-- nove -->
        <div class="container">
            <p></p>
            <div class="panel panel-default">
            <div class="panel-heading">Tambah Data</div>
                <div class="panel-body">
                    {!! Form::open(['url' => '/kontakkami'])!!}
                    Nama: {!! Form::text('nama', '', ['placeholder' => 'Nama', 'class' => 'form-control']) !!}
                    Pesan: {!! Form::text('pesan', '', ['placeholder' => 'Pesan', 'class' => 'form-control']) !!}
                    Email: {!! Form::text('email', '', ['placeholder' => 'Email', 'class' => 'form-control']) !!}
                    <p></p>
                    {!! Form::submit('Kirim Pesan', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @stop
                </div>
            </div>
        </div>
        <!-- end -->
    </div>
</div>

<div class="container">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
</div>
@endsection
