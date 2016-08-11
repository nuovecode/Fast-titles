<?php $modulePath = "../modules/blocks/"?>
<!DOCTYPE html>
<html>
 <head>
     <?php include_once("view/frontend/html/head.php"); ?>
 </head>
 <body>
   <?php if(file_exists( $modulePath . "script/fast-titles.php"))  include_once $modulePath . "script/fast-titles.php"; ?>
   <?php if(file_exists("../modules/menu.php"))  include_once "../modules/menu.php"; ?>

   <div class="main">
     <div class="container"> 
       
       <div class="intro">
         <a href="http://www.ilgattohanuovecode.it/">
           <img src="http://www.ilgattohanuovecode.it/blog/templates/nuovecode/images/logo.png" alt="il gatto ha nuove code" class="logo">
         </a>
         <h3><a href="http://www.ilgattohanuovecode.it/">Il gatto ha nuove code</a></h3>
         <h1><?php echo utf8_decode('Fast titles') ?> <small><?php echo utf8_decode(' for final cut pro') ?></small></h1>  
         <div class="clearfix"></div>
       </div>
       
       
       <form method="POST" data-toggle="validator" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">         
           <div class="col-md-9 form-group">
               <textarea class="form-control" name="subtitles" rows="15" placeholder="Paste the subtitles" data-error="Paste the subtitles" required></textarea>
               <div class="help-block with-errors"></div>      
           </div>
                    
           <div class="form-group col-md-3">

               <div class="version">
                   <label><?php echo utf8_decode('Select your software version') ?>
                       <select id="version" name="version" class="form-control input-sm" required>
                           <option value="x"><?php echo utf8_decode('Final cut pro X') ?></option>
                           <option value="7"><?php echo utf8_decode('Final cut pro 7') ?></option>
                       </select>
                   </label>
               </div>

               <div class="mode">
                 <label class="radio-inline">
                     <input type="radio" name="division" value="auto" checked> <?php echo utf8_decode('Automatic') ?>
                 </label>
                 <label class="radio-inline">
                     <input type="radio" name="division" value="manual"><?php echo utf8_decode('Manual') ?>
                 </label> 
                <a class="info" href="#" data-toggle="modal" data-target="#modeModal" ><?php echo utf8_decode('What does it mean? >') ?></a>
               </div>

               <div class="gap">
                   <span class="new"><?php echo utf8_decode('New feature') ?></span>
                   <label><input type="checkbox" name="gap" value="gap">
                       <?php echo utf8_decode('Add gap') ?>
                   </label>
                   <a class="info" href="#" data-toggle="modal" data-target="#gapModal" >
                       <?php echo utf8_decode('What does it mean? >') ?>
                   </a>
                   <a class="gap-info" href="#" data-toggle="modal" data-target="#gapModal" >
                       <img src="view/frontend/images/gap.jpg" />
                   </a>
               </div>

               <button class="btn btn-primary" type="submit" name="submit" onClick="_gaq.push(['_trackEvent', Download, 'Click', 'DownloadFileXml']);"><?php echo utf8_decode('Download') ?></button>
 
           </div>         
       </form>      
      </div>
   </div>
   
   <?php include_once("view/frontend/html/istruzioni.php"); ?>
   <?php include_once("view/frontend/html/blocks.php"); ?>
   
   <footer class="footer">
      <?php if(file_exists("../modules/footer.php"))  include_once "../modules/footer.php"; ?>
   </footer>

  </body>
</html>
<script type="text/javascript">
    $("#version").change(function() {
        if ($(this).val() == '7') {
            $("input[value='gap']")
              .attr('disabled', true)
              .prop('checked', false );
          $('.gap').addClass('disabled');
        } else {
          $("input[value='gap']").attr('disabled', false);
          $('.gap').removeClass('disabled');
        }
    });
</script>


