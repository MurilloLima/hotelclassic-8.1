@extends('site.layouts.app', ['activePage' => 'site.accommodations'])
@section('title', 'Acomodações')

@section('content')
<!-- ***** About Us Page ***** -->
<div class="page-heading-rent-venue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Acomodações</h2>
                <span>Aproveite sua estadia conosco – temos um
                    tipo de acomodação para cada tipo de gosto. Escolha a sua.</span>
            </div>
        </div>
    </div>
</div>

<div class="shows-events-schedule">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Acomodações</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="event-item">
                    <div class="thumb">
                        <a href="#"><img src="{{ asset('site/assets/images/event-03.jpg') }}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="#">
                            <h4>Apartamento Casal</h4>
                        </a>
                        <ul>
                            <li><i class="fa fa-wifi"></i> Wi-fi</li>
                            <li><i class="fa fa-car"></i> Estacionamento rotativo</li>
                            <li><i class="fa fa-coffee"></i> Café da manhã</li>
                            <li><i class="fa fa-desktop"></i> Tv</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="event-item">
                    <div class="thumb">
                        <a href="#"><img src="{{ asset('site/assets/images/event-01.jpg') }}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="#">
                            <h4>Apartamento Duplo</h4>
                        </a>
                        <ul>
                            <li><i class="fa fa-wifi"></i> Wi-fi</li>
                            <li><i class="fa fa-car"></i> Estacionamento rotativo</li>
                            <li><i class="fa fa-coffee"></i> Café da manhã</li>
                            <li><i class="fa fa-desktop"></i> Tv</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="event-item">
                    <div class="thumb">
                        <a href="#"><img src="{{ asset('site/assets/images/event-02.jpg') }}" alt=""></a>
                    </div>
                    <div class="down-content">
                        <a href="#">
                            <h4>Apartamento Triplo</h4>
                        </a>
                        <ul>
                            <li><i class="fa fa-wifi"></i> Wi-fi</li>
                            <li><i class="fa fa-car"></i> Estacionamento rotativo</li>
                            <li><i class="fa fa-coffee"></i> Café da manhã</li>
                            <li><i class="fa fa-desktop"></i> Tv</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- <div class="col-lg-12">
                <div class="pagination">
                    <ul>
                        <li><a href="#">
                                < </a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <lI><a href="#">2</a></lI>
                        <li><a href="#">3</a></li>
                        <li><a href="#">></a></li>
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@endsection