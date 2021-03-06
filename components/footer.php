<footer>

    <section id="footer" class="footer">
      <div class="wrapper footer__wrapper">

        <div class="footer__content">
          <div class="footer__block footer__block--logo">
            <img src="/images/logo-medium.png" alt="" class="footer__logo">
          </div>
          <div class="footer__block footer__block--social footer-social__block">
            <span class="footer-social__title">REDES SOCIAIS</span>

            <ul class="footer-social__ul">
              <li class="footer-social__li">
                <a href="https://www.facebook.com/supervitakids/" class="footer-social__a">
                  <span class="footer-social__icon-block">
                    <i class="fab fa-facebook-square"></i>
                  </span>
                  <span class="footer-social__text">/supervitakids</span>
                </a>
              </li>

              <li class="footer-social__li">
                <a href="https://www.instagram.com/supervitakids/" class="footer-social__a">
                  <span class="footer-social__icon-block">
                    <i class="fab fa-instagram"></i>
                  </span>
                  <span class="footer-social__text">@supervitakids</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="footer__block footer__block--contact">
            <span class="footer-social__title">SEGUNDA A SEXTA - 8H ÀS 17H</span>

            <ul class="footer-social__ul">
              <li class="footer-social__li">
                <div href="#" class="footer-social__a">
                  <span class="footer-social__icon-block">
                    <i class="fas fa-phone-volume"></i>
                  </span>
                  <a href="tel:+5531995292606" class="footer-social__text footer-social__text--phone">31 99529-2606</a>
                  <a href="https://web.whatsapp.com/send?1=pt_br&phone=5531995292606" target="_blank">
                    <span class="footer-social__icon-block">
                      <i class="fab fa-whatsapp"></i>
                    </span>
                  </a>
                </div>
              </li>

              <li class="footer-social__li">
                <a href="mailto:atendimento@nwse.com.br" class="footer-social__a">
                  <span class="footer-social__icon-block">
                    <i class="far fa-envelope"></i>
                  </span>
                  <span class="footer-social__text">atendimento@nwse.com.br</span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="footer__nav">
          <ul class="footer__ul">
            <li class="footer__li"><a href="/doubts" class="footer__li-link">DÚVIDAS FREQUENTES</a></li>
            <!--<li class="footer__li"><a href="/composition" class="footer__li-link">COMPOSIÇÃO</a></li>-->
            <li class="footer__li"><a href="/terms" class="footer__li-link">TERMOS DE USO</a></li>
            <li class="footer__li"><a href="/privacy" class="footer__li-link">POLÍTICA DE PRIVACIDADE</a></li>
            <li class="footer__li"><a href="/exchange" class="footer__li-link">POLÍTICA DE DEVOLUÇÃO</a></li>
          </ul>
        </div>
      </div>

      <div class="footer__cnpj">CNPJ: 37.877.053/0001-03 • SUPERVITA KIDS, BELO HORIZONTE-MG</div>
    </section>

    <script src="./assets/bundle.js"></script>
    <style><?php echo file_get_contents(__DIR__.'/../assets/bundle.css'); ?></style>
  </footer>
  <script>
  function initFreshChat() {
    window.fcWidget.init({
      token: "dfbeaf6e-0271-4fc7-8e6c-4c439f3c3c2d",
      host: "https://wchat.freshchat.com"
    });
  }
  function initialize(i,t){var e;i.getElementById(t)?initFreshChat():((e=i.createElement("script")).id=t,e.async=!0,e.src="https://wchat.freshchat.com/js/widget.js",e.onload=initFreshChat,i.head.appendChild(e))}function initiateCall(){initialize(document,"freshchat-js-sdk")}window.addEventListener?window.addEventListener("load",initiateCall,!1):window.attachEvent("load",initiateCall,!1);
</script>