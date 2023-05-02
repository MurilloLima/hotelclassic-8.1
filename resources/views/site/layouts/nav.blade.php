<!-- ***** Pre HEader ***** -->
<div class="pre-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <span>Serviços de hospedagem de alta qualidade</span>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="text-button">
                    <a href="{{ route('site.contact') }}">Faça já sua reserva! <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('site.index') }}" class="logo">
                        <img src="{{ asset('site/assets/images/logo.jpg') }}" width="200" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="{{ route('site.index') }}"
                                class="{{ $activePage == 'site.index' ? 'active' : '' }}">Home</a></li>
                        <li><a href="{{ route('site.about') }}"
                                class="{{ $activePage == 'site.about' ? 'active' : '' }}">Sobre</a></li>
                        <li><a href="{{ route('site.accommodations') }}"
                                class="{{ $activePage == 'site.accommodations' ? ' active' : '' }}">Acomodações</a>
                        </li>
                        <li><a href="{{ route('site.events') }}"
                                class="{{ $activePage == 'site.events' ? 'active' : '' }}">Eventos</a></li>
                        <li><a href="{{ route('site.contact') }}"
                                class="{{ $activePage == 'site.contact' ? 'active' : '' }}">Contatos</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->