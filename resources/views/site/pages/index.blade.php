@extends('site.layouts.app', ['activePage' => 'site.index'])
@section('title', 'Home')

@section('content')
<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner">
    {{-- <div class="counter-content">
        <ul>
            <li>Days<span id="days"></span></li>
            <li>Hours<span id="hours"></span></li>
            <li>Minutes<span id="minutes"></span></li>
            <li>Seconds<span id="seconds"></span></li>
        </ul>
    </div> --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-content">
                    {{-- <div class="next-show">
                        <i class="fa fa-arrow-up"></i>
                        <span>Next Show</span>
                    </div> --}}
                    <h6>Serviços de hospedagem de alta qualidade</h6>
                    <h2>Classic Hotel</h2>
                    <div class="main-white-button">
                        <a href="{{ route('site.contact') }}">Faça já sua reserva!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- *** Owl Carousel Items ***-->
<div class="show-events-carousel">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-show-events owl-carousel">
                    <div class="item">
                        <a href="#"><img src="{{ asset('site/assets/images/show-events-05.png') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href=""><img src="{{ asset('site/assets/images/show-events-02.jpg') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('site/assets/images/show-events-03.jpg') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('site/assets/images/show-events-04.jpg') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('site/assets/images/show-events-06.png') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('site/assets/images/show-events-07.png') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('site/assets/images/show-events-03.jpg') }}" alt=""></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('site/assets/images/show-events-04.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- *** Amazing Venus ***-->
<div class="amazing-venues">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="left-content">
                    <h4>Seu Hotel de negócios e de lazer em Estreito-MA</h4>
                    <p>
                        O Classic Hotel está localizado na BR-010 em Estreito - Maranhão, proximo ao do maior centro de
                        compras da região.
                    </p>
                    <p>
                        Disponível no hotel: Estacionamento rotativo, Room Service 24h,
                        Café da manhã, Serviço de lavanderia e Internet Wireless.
                    </p>
                    <p>
                        Facilidades no Apartamento: Telefone com discagem direta, Frigobar, TV, Ar condicionado, TV e
                        Internet Wireless.
                    </p>
                    <p>
                        Localização/Distância: O hotel está localizado a menos de 1 km do Terminal Rodoviário.
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="right-content">
                    <h5><i class="fa fa-map-marker"></i> Faça já sua reserva</h5>
                    <div class="text-button">
                        <a href="{{ route('site.contact') }}">Reservar? <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- *** Map ***-->
<div class="map-image">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7349725951267!2d-47.44432928593451!3d-6.555104495258932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d0a0711d37bfaf%3A0x97cd7d2aa60921af!2sClassic%20Hotel!5e0!3m2!1spt-BR!2sbr!4v1638967778631!5m2!1spt-BR!2sbr"
        width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


<!-- *** Venues & Tickets ***-->
{{-- <div class="venue-tickets">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Venues & Tickets</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="venue-item">
                    <div class="thumb">
                        <img src="{{ asset('site/assets/images/venue-01.jpg') }}" alt="">
                    </div>
                    <div class="down-content">
                        <div class="left-content">
                            <div class="main-white-button">
                                <a href="ticket-details.html">Purchase Tickets</a>
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Radio City Musical Hall</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                            <ul>
                                <li><i class="fa fa-sitemap"></i>250</li>
                                <li><i class="fa fa-user"></i>500</li>
                            </ul>
                            <div class="price">
                                <span>1 ticket<br>from <em>$45</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="venue-item">
                    <div class="thumb">
                        <img src="{{ asset('site/assets/images/venue-02.jpg') }}" alt="">
                    </div>
                    <div class="down-content">
                        <div class="left-content">
                            <div class="main-white-button">
                                <a href="ticket-details.html">Purchase Tickets</a>
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Madison Square Garden</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                            <ul>
                                <li><i class="fa fa-sitemap"></i>450</li>
                                <li><i class="fa fa-user"></i>650</li>
                            </ul>
                            <div class="price">
                                <span>1 ticket<br>from <em>$55</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="venue-item">
                    <div class="thumb">
                        <img src="{{ asset('site/assets/images/venue-03.jpg') }}" alt="">
                    </div>
                    <div class="down-content">
                        <div class="left-content">
                            <div class="main-white-button">
                                <a href="ticket-details.html">Purchase Tickets</a>
                            </div>
                        </div>
                        <div class="right-content">
                            <h4>Royce Hall</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur vinzi iscing elit, sed doers kontra.</p>
                            <ul>
                                <li><i class="fa fa-sitemap"></i>450</li>
                                <li><i class="fa fa-user"></i>750</li>
                            </ul>
                            <div class="price">
                                <span>1 ticket<br>from <em>$65</em></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- *** Coming Events ***-->
<div class="coming-events">
    <div class="left-button">
        <div class="main-white-button">
            <a href="shows-events.html">Acomodações</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
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
        </div>
    </div>
</div>
@endsection