@extends('site.layouts.app', ['activePage' => 'site.about'])
@section('title', 'Sobre')

@section('content')
<!-- ***** About Us Page ***** -->
<div class="page-heading-about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Sobre</h2>
                <span>Conheça o Classic Hotel</span>
            </div>
        </div>
    </div>
</div>

<div class="about-item">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-image">
                    <img src="{{ asset('site/assets/images/about-image.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <div class="about-map-image">
                        <img src="{{ asset('site/assets/images/about-map-image.png') }}" alt="">
                    </div>
                    <div class="down-content">
                        <h4>Reservas</h4>
                        <ul>
                            <li>(99)99198-8657</li>
                            <li>Atendimento 24 Horas</li>
                        </ul>
                        {{-- <span><i class="fa fa-ticket"></i> Tickets Starting From $34.00</span> --}}
                        <div class="main-dark-button">
                            <a href="{{ route('site.contact') }}">Faça já sua reserva!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-upcoming-shows">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <h2>Serviços de hospedagem de alta qualidade</h2>
                <p>
                <p>
                    O Classic Hotel é para quem busca bons negócios, ou a tranquilidade e o prazer de estar em um bom
                    lugar, ou ainda, os dois! Orgulhamo-nos de sermos pioneiros do segmento na região, com a
                    qualidade de quem possui 20 anos de experiência em hotelaria, sempre à disposição para servir bem.
                    Oferecemos serviços de lavanderia, possuímos estacionamento próprio, gratuito, além de segurança e monitoramento 24h.
                </p>
                </p>
                {{-- <h4>Items That Are Restricted</h4>
                <ul>
                    <li>* Flash Cameras</li>
                    <li>* Food & Drinks</li>
                    <li>* Any kind of flashy objects</li>
                </ul>
                <h4>Directions & Car Parking</h4>
                <p>Art party vegan mixtape before they sold out raclette, cliche banh mi mumblecore ugh hell of. Art
                    party kene
                    ugh umami, readymade tbh small batch austin distillery aesthetic.Shoreditch narwhal livers edge
                    actually godar
                    affogato sartorial waistcoat ugh raw denim stumptown.
                </p>
                <div class="text-button">
                    <a href="event-details.html">Need Directions? <i class="fa fa-arrow-right"></i></a>
                </div> --}}
            </div>
            <div class="col-lg-3">
                {{-- <div class="next-shows">
                    <h4><i class="fa fa-clock-o"></i> Get The Next Show Tickets</h4>
                    <ul>
                        <li>
                            <h5>Copacabana Festival</h5>
                            <span>Sep 24 Fri<br>08:30 AM - 11:00 PM</span>
                            <div class="icon-button">
                                <a href="ticket-details.html">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <h5>Rock Music Festival</h5>
                            <span>Sep 22 Wed<br>11:00 AM - 09:00 PM</span>
                            <div class="icon-button">
                                <a href="ticket-details.html">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </li>
                        <li>
                            <h5>Water Splash Festival</h5>
                            <span>July 18 Friday<br>10:00 AM - 11:00 PM</span>
                            <div class="icon-button">
                                <a href="ticket-details.html">
                                    <i class="fa fa-shopping-cart"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</div>

<div class="also-like">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Veja mais...</h2>
            </div>
            <div class="col-lg-4">
                <div class="like-item">
                    <div class="thumb">
                        <a href="event-details.html"><img src="{{ asset('site/assets/images/like-01.png') }}" alt=""></a>
                        <div class="icons">
                            <ul>
                                <li><a href="event-details.html"><i class="fa fa-arrow-right"></i></a></li>
                                <li><a href="ticket-details.html"><i class="fa fa-ticket"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <span>8 de Dezembro 2021</span>
                        <a href="event-details.html">
                            <h4>Evento 01</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="like-item">
                    <div class="thumb">
                        <a href="event-details.html"><img src="{{ asset('site/assets/images/like-01.png') }}" alt=""></a>
                        <div class="icons">
                            <ul>
                                <li><a href="event-details.html"><i class="fa fa-arrow-right"></i></a></li>
                                <li><a href="ticket-details.html"><i class="fa fa-ticket"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <span>8 de Dezembro 2021</span>
                        <a href="event-details.html">
                            <h4>Evento 02</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="like-item">
                    <div class="thumb">
                        <a href="event-details.html"><img src="{{ asset('site/assets/images/like-01.png') }}" alt=""></a>
                        <div class="icons">
                            <ul>
                                <li><a href="event-details.html"><i class="fa fa-arrow-right"></i></a></li>
                                <li><a href="ticket-details.html"><i class="fa fa-ticket"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="down-content">
                        <span>8 de Dezembro 2021</span>
                        <a href="event-details.html">
                            <h4>Evento 03</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection