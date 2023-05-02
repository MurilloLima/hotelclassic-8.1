@extends('site.layouts.app', ['activePage' => 'site.events'])
@section('title', 'Eventos')
@section('content')
<!-- ***** About Us Page ***** -->
<div class="page-heading-shows-events">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Eventos</h2>
                <span>Confira os eventos anteriores e futuros.</span>
            </div>
        </div>
    </div>
</div>

<div class="shows-events-tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-8">
                                    <ul>
                                        <li><a href='#tabs-1'>Anteriores</a></li>
                                        <li><a href='#tabs-2'>Futuros</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article id='tabs-1'>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="heading">
                                            <h2>Anteriores</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="sidebar">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="heading-sidebar">
                                                        <h4>Classifique os próximos eventos por:</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="month">
                                                        <h6>Mês</h6>
                                                        <ul>
                                                            <li><a href="#">Julho</a></li>
                                                            <li><a href="#">Agosto</a></li>
                                                            <li><a href="#">Setembro</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="event-item">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="left-content">
                                                                <h4>Evento 1</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur do adipiscing
                                                                    eliterirt sed eiusmod alori...</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="thumb">
                                                                <img src="{{ asset('site/assets/images/like-01.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="right-content">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <h6>Quarta 8 de Dezembro<br>11:20 AM</h6>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-map-marker"></i>
                                                                        <span>Classic Hotel, Estreito-MA</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-users"></i>
                                                                        <span>540 convidados presentes</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="event-item">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="left-content">
                                                                <h4>Evento 2</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur do adipiscing
                                                                    eliterirt sed eiusmod alori...</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="thumb">
                                                                <img src="{{ asset('site/assets/images/like-01.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="right-content">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <h6>Quarta 8 de Dezembro<br>11:20 AM</h6>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-map-marker"></i>
                                                                        <span>Classic Hotel, Estreito-MA</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-users"></i>
                                                                        <span>480 convidados presentes</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="event-item">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="left-content">
                                                                <h4>Evento 3</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur do adipiscing
                                                                    eliterirt sed eiusmod alori...</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="thumb">
                                                                <img src="{{ asset('site/assets/images/like-01.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="right-content">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <h6>Quarta 8 de Dezembro<br>11:20 AM</h6>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-map-marker"></i>
                                                                        <span>Classic Hotel, Estreito-MA</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-users"></i>
                                                                        <span>221 convidados presentes</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-12">
                                                <div class="pagination">
                                                    <ul>
                                                        <li>
                                                            <a href="#">
                                                                <</a>
                                                        </li>
                                                        <li class="active"><a href="#">1</a></li>
                                                        <li><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="heading">
                                            <h2>Futuros</h2>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="sidebar">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="heading-sidebar">
                                                        <h4>Classifique os próximos eventos por:</h4>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="month">
                                                        <h6>Mês</h6>
                                                        <ul>
                                                            <li><a href="#">Julho</a></li>
                                                            <li><a href="#">Agosto</a></li>
                                                            <li><a href="#">Setembro</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="event-item">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="left-content">
                                                                <h4>Evento 4</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur do adipiscing
                                                                    eliterirt sed eiusmod alori...</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="thumb">
                                                                <img src="{{ asset('site/assets/images/like-01.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="right-content">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <h6>Quarta 8 de Dezembro<br>11:20 AM</h6>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-map-marker"></i>
                                                                        <span>Classic Hotel, Estreito-MA</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-users"></i>
                                                                        <span>528 convidados presentes</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="event-item">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="left-content">
                                                                <h4>Evento 5</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur do adipiscing
                                                                    eliterirt sed eiusmod alori...</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="thumb">
                                                                <img src="{{ asset('site/assets/images/like-01.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="right-content">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <h6>Quarta 8 de Dezembro<br>11:20 AM</h6>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-map-marker"></i>
                                                                        <span>Classic Hotel, Estreito-MA</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-users"></i>
                                                                        <span>240 convidados presentes</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="event-item">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="left-content">
                                                                <h4>Evento 6</h4>
                                                                <p>Lorem ipsum dolor sit amet, consectetur do adipiscing
                                                                    eliterirt sed eiusmod alori...</p>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="thumb">
                                                                <img src="{{ asset('site/assets/images/like-01.png') }}"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="right-content">
                                                                <ul>
                                                                    <li>
                                                                        <i class="fa fa-clock-o"></i>
                                                                        <h6>Quarta 8 de Dezembro<br>11:20 AM</h6>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-map-marker"></i>
                                                                        <span>Classic Hotel, Estreito-MA</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-users"></i>
                                                                        <span>360 convidados presentes</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="col-lg-12">
                                                <div class="pagination">
                                                    <ul>
                                                        <li><a href="#">
                                                                <</a>
                                                        </li>
                                                        <li><a href="#">1</a></li>
                                                        <li class="active"><a href="#">2</a></li>
                                                        <li><a href="#">3</a></li>
                                                        <li><a href="#">></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection