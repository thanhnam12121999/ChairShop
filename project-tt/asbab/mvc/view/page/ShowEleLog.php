<link rel="stylesheet"  href="./assets/css/style.css">
<div data-testid="password-container" class="Password_wrapper ">
    <div data-testid="password-input-container" class="Input-module_inputWrapper__1ZJFC  ">
        <input class="Input-module_input__pass" type="password" id="password-input" name="password-input" value="<?php if (isset($_COOKIE["password"])) {echo$_COOKIE["password"];}?>">
        <label for="password-input" class="Input-module_label__pass">Password*</label>
    </div>
</div>
<!---->
<div class="SignInActions_signInActions">
    <div class="SignInActions_checkboxWrapper">
        <input type="checkbox" class="SignInActions_checkbox" id="remember-me-checkbox" name="remember-me-checkbox" <?php if (isset($_COOKIE["username"])) {echo 'checked';}?>>
        <label for="remember-me-checkbox" class="SignInActions_checkboxLabel">Stay signed in</label></div>
    <div>
        <a href="#"><button type="button" id="forgot-password-button"  class="SignInActions_forgotPasswordLink">Forgot your password?</button></a>
    </div>
</div>
<div>
    <button type="submit" name="submit" class="ConfirmButton">CONFIRM</button>
</div>
<script src="./assets/js/main.js"></script>