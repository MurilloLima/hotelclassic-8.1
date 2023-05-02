<!-- *** Footer *** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="address">
                    <h4>Endereço</h4>
                    <span>Avenida BR-010, <br>1760, Centro<br>65975-000</span>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="links">
                    <h4>Links</h4>
                    <ul>
                        <li><a href="#">Informativos</a></li>
                        <li><a href="#">Guia</a></li>
                        <li><a href="#">Videos</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="hours">
                    <h4>Horário de atendimento</h4>
                    <ul>
                        <li>24 horas de segunda à segunda</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <p>Estreito, Maranhão</p>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <p class="copyright">Copyright 2021 Classic Hotel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="sub-footer">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <img src="{{ asset('site/assets/images/logo.jpg') }}" width="200" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="menu">
                                <ul>
                                    <li><a href="{{ route('site.index') }}" class="active">Home</a></li>
                                    <li><a href="{{ route('site.about') }}">Sobre</a></li>
                                    <li><a href="{{ route('site.accommodations') }}">Acomodações</a></li>
                                    <li><a href="{{ route('site.events') }}">Eventos</a></li>
                                    <li><a href="{{ route('site.contact') }}">Contatos</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="social-links">
                                <ul>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>