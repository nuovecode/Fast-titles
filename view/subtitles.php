<!DOCTYPE html>
<html>
 <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
     <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
     <script src="view/frontend/js/validator.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Fast titles - il gatto ha nuove code</title>
 </head>
 <body>
   <div class="container">

       <h2>Fast titles <br><small>A simple importer for final cut</small></h2>
       <br><br>

       <form method="POST" data-toggle="validator" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

           <div class="form-group">
               <select name="version" class="form-control" required>
                   <option>Select your version (Default: Final cut pro X)</option>
                   <option value="1">Final cut pro 7</option>
                   <option value="2">Final cut pro X</option>
               </select>
           </div>

           <div class="form-group">
               <label class="radio-inline">
                   <input type="radio" name="division" value="auto" checked> Automatico (50 caratteri)
               </label>
               <label class="radio-inline">
                   <input type="radio" name="division" value="manual">Manuale (a capo)
               </label>
           </div>

           <div class="form-group">
               <textarea class="form-control" name="subtitles" rows="10" placeholder="type some titles" data-error="Type something!!" required></textarea>
               <div class="help-block with-errors"></div>
           </div>

           <button class="btn btn-primary" type="submit" name="submit">Download</button>
       </form>

       <br><br>
       <pre>
           Demo online: <a href="http://www.ilgattohanuovecode.it/tool/final-cut-fast-titles/">Il gatto ha nuove code</a>
           Github: <a href="https://bitbucket.org/nuovecode/fast-titles">Final cut fast titles</a>
       </pre>
   </div>
  </body>
</html>

<?php /*

// DEBUG: Decommentare Per visualizzare l'xml indentato
$xml->asXML();

function saveXMLFile($filename, $xml) {
  $dom = dom_import_simplexml($xml)->ownerDocument;
  $dom->formatOutput = true;
  $dom->save('TEST.xml');

 }
 saveXMLFile('TEST.xml', $xml);


*/?>