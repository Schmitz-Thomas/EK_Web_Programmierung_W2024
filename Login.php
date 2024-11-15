<?php require_once('.\assets\layout\header.php');?>
<?php require_once('.\assets\layout\nav.php');?>

<div class="container">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

         <h1>Login</h1>
         <br>
         <br>
         <br>
        
         <form>
             <div class="form-group">
                 <label for="username">Benutzername:</label>
                 <input type="text" class="form-control" id="username" placeholder="Benutzername">
             </div>
             <div class="form-group">
                 <label for="password">Passwort:</label>
                 <input type="password" class="form-control" id="password" placeholder="Passwort">
             </div>
             <br>
         <br>
             <button type="submit" class="btn btn-primary">Einloggen</button>
         </form>
      
     </div>


<?php require_once('.\assets\layout\\footer.php');?>