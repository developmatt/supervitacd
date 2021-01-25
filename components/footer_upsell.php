<footer>

    <section id="footer" class="footer">

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

