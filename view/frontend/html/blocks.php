<?php $repositoryName = 'Fast-title'?>
<?php $url = "http://www.ilgattohanuovecode.it/tool/final-cut-fast-titles/"?>
<?php $relateRoot = "final-cut-round-trip"?>
<?php $relateName = "Fcp to Motion"?>


<div id="help">
   <div class="container">
       <div class="col-md-5">
           <!-- APP SUMMARY-->
         <p class="title"><?php echo utf8_decode(' What is Fast titles?') ?></p>
         <p><?php echo utf8_decode('Fast titles is a project born from the need of making the insertion of subtitles while video editing faster.') ?> <br><br>
             <?php echo utf8_decode('It is still a beta version, and we plan to improve it.') ?></p>
           <!-- SHARE BUTTONS ($url)-->
           <?php if(file_exists( $modulePath . "share-buttons.php"))  include_once $modulePath . "share-buttons.php"; ?>
      </div>
      <div class="col-md-7">
          <!-- SHARE BUTTONS ($repositoryName)-->
          <?php if(file_exists( $modulePath . "help-us.php"))  include_once $modulePath . "help-us.php"; ?>
          <!-- PAYPAL-->
          <?php if(file_exists( $modulePath ."paypal-donate.php"))  include_once $modulePath . "paypal-donate.php"; ?>
      </div>
      <div class="clearfix"></div>
   </div>
</div>


<div id="social">
   <div class="container">
       <!-- YOUTUBE -->
       <?php if(file_exists( $modulePath . "get-in-touch.php")): ?>
       <div class="col-md-6">
           <div class="youtube">
               <iframe width="560" height="315" src="https://www.youtube.com/embed/1vO2Z66tHMw" frameborder="0" allowfullscreen></iframe>
           </div>
       </div>
       <?php endif; ?>

       <!-- CONTACTS -->
       <?php if(file_exists( $modulePath . "get-in-touch.php"))  include_once $modulePath . "get-in-touch.php"; ?>
       <!-- SHARE BUTTONS ($url)-->
       <?php if(file_exists($modulePath ."links.php"))  include_once $modulePath . "links.php"; ?>
   </div>
</div>

<!-- Thanks to -->
<div id="thanks" >
    <div class="container">
        <div class="col-md-4 col">
            <h1>Thanks!</h1>
            <small>To all those who helped us.</small>
         </div>
        <div class="col-md-3 col">

            <h5><a href="http://www.ilgattohanuovecode.it/cv/maurizio_massari.html" target="_blank">Maurizio Massari</a></h5>
            <p>Localization & QA Professional</p>
            <h5>Feedback and ideas</h5>
            <p>
                <strong>Kim</strong> (He had the first idea), <strong>
                <a href="http://backstager.eu/" target="_blank">Ugo Flandina</a></strong> (He suggested the gap function)
            </p>
        </div>
        <div class="col-md-5 col">
            <h5><a href="http://ericguichaoua.fr/" target="_blank">Eric Guichaoua</a></h5>
            <p>He worked since 2000 in the broadcast area in Paris, mainly for corporate communication, TV channel and brand advertising.
            Since 2014, He works in the educational area, directing project in broadcast and multimedia fields.<br>
            Specialized in post-production, He also evaluate tools that allows people to easily share and collaborate on projects.</p>
            <a href="https://github.com/nuovecode/Fast-titles-FR" target="_blank">Here the French version in download</a>
        </div>
    </div>
</div>



