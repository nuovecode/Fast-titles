<!--istruzioni-->
<div id="istruzioni"> 
   <div class="container">
      <div class="col-md-4 i1"><p><span>1</span><?php echo utf8_decode('Incolla il testo da suddividere in titoli') ?></p></div>
      <div class="col-md-4 i2"><p><span>2</span><?php echo utf8_decode('Seleziona la tua versione di Final Cut') ?></p></div>
      <div class="col-md-4 i3"><p><span>3</span><?php echo utf8_decode('Scarica un file xml che contiene tutti i sottotitoli già separati in clip nel browser') ?></p></div>
      <div class="clearfix"></div>
   </div>
</div>


<!--modal-->
<div class="modal fade" id="modeModal" tabindex="-1" role="dialog" aria-labelledby="modeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">     
      <div class="modal-body">
        <strong><?php echo utf8_decode('Automatico:') ?></strong><br>
         <p><?php echo utf8_decode('Ogni sottotitolo sarà di massimo 50 battute. Inoltre ogni \'a capo\' del testo originale determina un nuovo sottotitolo') ?></p>
         <strong><?php echo utf8_decode('Manuale:') ?></strong><br>
         <p><?php echo utf8_decode('Decidi tu quanto testo inserire in ogni sottotitolo. Dopo aver incollato il testo all\'interno del form, premi \'invio\' per andare a capo: ad ogni riga corrisponderà una clip differente.') ?> <br> <small><?php echo utf8_decode('(I sottotitoli sono determinati solo dagli \'a capo\': ma non c\'è il limite delle 50 battute. Per cui un testo non \'preparato\' difficilmente produrrà poi un xml utilizzabile)') ?></small></p>
      </div>     
      <button class="btn" data-dismiss="modal"><?php echo utf8_decode('Chiudi') ?></button>     
    </div>
  </div>
</div>