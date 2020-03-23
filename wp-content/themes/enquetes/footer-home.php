<!-- FOOTER -->
<footer class="page-footer">
  <div class="container">
    <div class="row">
      <div class="col l10 push-l1 s12">
        <h2 class="white-text f23 f20m center">No Momento<br>
        <span class="f16">Veja as enquetes do momento.</span></h2>
        <p class="f16 font2">O No Momento é um site onde você pode conferir as enquetes sobre assuntos relevantes do momento. Desde política a entretenimento, as melhores enquetes estão aqui. Dê a sua opinião, pois ela ajuda a descobrirmos o que o público gosta.</p>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container center">
      No Momento © <?php echo date('Y'); ?> - Todos os direitos reservados - Beta 0.0.2
    </div>
  </div>
</footer>
<!-- IMPORTAÇÃO DOS ARQUIVOS DE JAVASCRIPT -->
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/materialize.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<script type="text/javascript">
	var typed2 = new Typed('#typed', {
		strings: ["&bull; Política", '&bull; Televisão', '&bull; Cinema', '&bull; Entretenimento', '&bull; YouTube', '&bull; Instagram', '&bull; Trendings', '&bull; Games', '&bull; Fofoca', '&bull; Facebook'],
		typeSpeed: 50,
		backSpeed: 30,
		backDelay: 250,
		showCursor: false,
		loop: true,
		loopCount: 2
	});
</script>
 
<?php wp_footer(); ?>
</body>
</html>