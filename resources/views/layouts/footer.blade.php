<footer class="footer">
    <div class=" container">
        <div class="pro_border">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="lets_projects">
                        <h3>La seguridad y confianza, de entregar lo que <a href="#!">necesites!</a> </h3>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="phone_number">
                        <h4>Teléfono local matriz:
                            <a href="tel:998 882 2698">998 882 2698</a>
                        </h4>
                        <h4>WhatsApp:
                            <a href="tel:998 230 0868">998 230 0868</a>
                        </h4>
                        {{--<a href="#!">support@seogo.com</a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-30">
        <div class="row">
            <div id="contact"></div>
            <div class="col-12">
                <h3 class="contact-title float-right">Contacto</h3>
            </div>
            <div class="col-lg-4"></div>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="{{ route('contact') }}" method="post" id="contactForm">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingesa tu nombre'" placeholder = 'Ingesa tu nombre' required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu email'" placeholder = 'Ingresa tu email' required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ingresa tu teléfono'" placeholder = 'Ingresa tu teléfono' required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select name="service" class="custom-select footer-select" required>
                                    <option value="">Servicio de Interés</option>
                                    <option value="Afiliados">Afiliados</option>
                                    <option value="Servicios Premium">Servicios Premium</option>
                                    <option value="Membresía de prepago">Membresía de prepago</option>
                                    <option value="Cotizaciones">Cotizaciones</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea name="message" style="height: 75px !important;" class="form-control" id="exampleFormControlTextarea1" rows="3"
                                          onfocus="this.placeholder = ''"
                                          onblur="this.placeholder = 'En caso de envío por favor especifica si es sobre, caja mediana, caja grande u otro objeto.'"
                                          placeholder = 'En caso de envío por favor especifica si es sobre, caja mediana, caja grande u otro objeto.' required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 float-right">
                        <button type="submit" id="contact-submit-button" class="button button-contactForm btn_4 boxed-btn">Enviar Mensaje</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="qlwapp" class="qlwapp-free qlwapp-bubble qlwapp-bottom-right qlwapp-all qlwapp-rounded qlwapp-js-ready desktop">
      <div class="qlwapp-container">
            <a class="qlwapp-toggle" data-action="open" data-phone="+529982300868" data-message="" href="https://wa.me/9982300868" target="_blank">
                <i class="qlwapp-icon qlwapp-whatsapp-icon"></i>
                <i class="qlwapp-close" data-action="close">×</i>
                <span class="qlwapp-text">¿Cómo te podemos ayudar?</span>
              </a>
          </div>
    </div>

    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-3">
                    <div class="footer_widget">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#!">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-lg-3">
                </div>
                <div class="col-xl-2 col-md-6 col-lg-2">
                </div>
                <div class="col-xl-4 offset-xl-1 col-md-6 col-lg-4">
                </div>
            </div>
        </div>
    </div>
</footer>
