
<?php if(!empty($msg)) { ?>
 
    <div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    <?php echo $msg; ?>
  </div>
</div>

<?php    
}
?>
<div class="form-cadastro">
            <h1 align="center" style="font-size: 60px; font-family: 'Times New Roman', Times, Serif;">Login</h1>
            <form action="/Home/logar" style="border: 1px solid gray;" class="form-control text-light bg-dark" method="post" id="login">
            <label for="cemail" class="text-primary bg-dark" style="font-size: 40px;"><string> Email:</label><br>
            <input type="text" maxlength="60" name="usuario"  id="cemail" class="formatacao-input"><br>
            <label class="text-primary bg-dark" style="font-size: 40px;">Senha:</label><br>
            <input type="password" maxlength="20" name="senha" id="" class="formatacao-input"><br>
            <button type="submit" class="formatacao-buttom text-primary bg-dark">Entrar</button><br>
            </form>
            </div>
 <div class="clear"></div>
            </form>

            </div>
