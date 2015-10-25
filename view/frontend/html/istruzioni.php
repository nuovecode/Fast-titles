<!--istruzioni-->
<div id="istruzioni"> 
   <div class="container">
      <div class="col-md-4 i1"><p><span>1</span><?php echo utf8_decode('Paste the text to be split in subtitles') ?></p></div>
      <div class="col-md-4 i2"><p><span>2</span><?php echo utf8_decode('Select your version of Final Cut') ?></p></div>
      <div class="col-md-4 i3"><p><span>3</span><?php echo utf8_decode('Download an xml file containing all the subtitles already separated in clips in the browser') ?></p></div>
      <div class="clearfix"></div>
   </div>
</div>


<!--modal-->
<div class="modal fade" id="modeModal" tabindex="-1" role="dialog" aria-labelledby="modeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">     
      <div class="modal-body">
        <strong><?php echo utf8_decode('Automatic:') ?></strong><br>
         <p><?php echo utf8_decode('Each subtitle has a limit of 50 characters. Also, every new paragraph of the original text determines a new subtitle.') ?></p>
         <strong><?php echo utf8_decode('Manual:') ?></strong><br>
         <p><?php echo utf8_decode('You can customize the length of each subtitle. After pasting the text in the form, press Enter to start a new paragraph: every line will correspond to a different clip.') ?> <br> <small><?php echo utf8_decode('(Subtitles will be determined only by paragraphs: there will be no limit of 50 characters, thus a text not arranged will probably not produce an usable xml)') ?></small></p>
      </div>     
      <button class="btn" data-dismiss="modal"><?php echo utf8_decode('Close') ?></button>     
    </div>
  </div>
</div>