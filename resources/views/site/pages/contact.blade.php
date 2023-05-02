@extends('site.layouts.app', ['activePage' => 'site.contact'])
@section('title', 'Contatos')
@section('content')
<!-- ***** About Us Page ***** -->
<div class="page-heading-rent-venue">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Pedido de reserva</h2>
                <span>Preencha o formulário a seguir enviando seus dados.</span>
            </div>
        </div>
    </div>
</div>

<div class="rent-venue-tabs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            <article>
                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="right-content">
                                            <h4>Como podemos ajudar você?</h4>
                                            <p>
                                                Para reservas, reserve on-line em www.oclassichotel.com.br ou envie um
                                                e-mail para contato@oclassichotel.com.br. <br>
                                                Você também pode entrar em contato conosco através número da Central de
                                                Reservas abaixo.
                                                Ou preencha o formulário a seguir enviando sua sugestão, dúvida,
                                                reclamação ou elogio.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div id="map">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7349725951267!2d-47.44432928593451!3d-6.555104495258932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d0a0711d37bfaf%3A0x97cd7d2aa60921af!2sClassic%20Hotel!5e0!3m2!1spt-BR!2sbr!4v1638967778631!5m2!1spt-BR!2sbr"
                                                width="100%" height="240" style="border:0;" allowfullscreen=""
                                                loading="lazy"></iframe>
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

<div class="rent-venue-application">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="heading-text">
                    <h4>Pedido de reserva</h4>
                </div>
                <div class="contact-form">
                    <form id="contact" action="" method="post">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" id="name" placeholder="Nome completo" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*"
                                        placeholder="Seu E-mail*" required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="phone-number" type="text" id="phone-number" placeholder="Telefone*"
                                        required="">
                                </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <fieldset>
                                    <input name="company-organization" type="text" id="company-organization"
                                        placeholder="Empresa / Organização">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="about-event-hosting" rows="6" id="about-event-hosting"
                                        placeholder="Observações" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-dark-button">Enviar</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection