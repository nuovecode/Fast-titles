<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
     <link rel="stylesheet" href="view/frontend/css/style.css">
     <link rel="stylesheet" href="view/frontend/css/social-likes_birman.css">
     <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
     <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <script src="view/frontend/js/validator.min.js"></script>
     <script src="view/frontend/js/social-likes.min.js"></script>
     <link rel="shortcut icon" href="http://www.ilgattohanuovecode.it/templates/nuovecode/images/favicon.ico">
     <link rel="image_src"  type="image/jpeg" href="view/frontend/images/intro.jpg" />
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--<meta charset="UTF-8">-->
     <title>Fast titles - il gatto ha nuove code</title>
     <meta name="description" content="Tool gratuito per l'importazione massiva di sottotitoli in Final Cut">
     <meta name="keywords" content="Fast titles, sottotitli final cut, sottotitoli xml">
     
     <meta property="og:title" content="Fast titles - il gatto ha nuove code" />
     <meta property="og:url" content="http://www.ilgattohanuovecode.it/tool/final-cut-fast-titles/index.php" />
     <meta property="og:image" content="http://www.ilgattohanuovecode.it/tool/final-cut-fast-titles/view/frontend/images/intro.jpg" />
     <meta property="og:site_name" content="Il gatto ha nuove code" />
 </head>
 <body>
   
    
   <?php include_once("view/frontend/html/script.php"); ?>
   <?php include_once("view/frontend/html/menu.php"); ?>
   <!-- TOOL -->
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
               <select name="version" class="form-control input-sm" required>
                   <option><?php echo utf8_decode('Select your program version') ?></option>
                   <option value="1"><?php echo utf8_decode('Final cut pro 7') ?></option>
                   <option value="2"><?php echo utf8_decode('Final cut pro X') ?></option>
               </select>
               <div class="mode">
                 <label class="radio-inline">
                     <input type="radio" name="division" value="auto" checked> <?php echo utf8_decode('Automatic') ?>
                 </label>
                 <label class="radio-inline">
                     <input type="radio" name="division" value="manual"><?php echo utf8_decode('Manual') ?>
                 </label> 
                <a class="info" href="#" data-toggle="modal" data-target="#modeModal" ><?php echo utf8_decode('What does it mean? >') ?></a>

               </div>         
               <button class="btn btn-primary" type="submit" name="submit" onClick="_gaq.push(['_trackEvent', Download, 'Click', 'DownloadFileXml']);"><?php echo utf8_decode('Download') ?></button>
 
           </div>         
       </form>      
      </div>
   </div>
   
   <?php include_once("view/frontend/html/istruzioni.php"); ?>
   <?php include_once("view/frontend/html/help.php"); ?>
   
   <footer class="footer">
      <?php include_once("view/frontend/html/footer.php"); ?>
   </footer>

  </body>
</html>
