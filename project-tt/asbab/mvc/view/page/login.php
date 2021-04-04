<main class="App_mainContainer " data-testid="mainContainer">
    <section>
        <div data-testid="access-gucci">
            <h1 class="typography_title" data-testid="title">My Asbab Account</h1>
            <div class="typography_message " data-testid="informative-text">OR</div>
            <h2 class="typography_subtitle" data-testid="subtitle">Continue with your email address</h2>
            <div class="typography_message " data-testid="informative-text">If you have already registered with us, your password will be requested.</div>
            <form class="UserCheckForm_accessForm" id="form" method="post" action="./public/login/checkAccExist">
                <div>
                    <div class="Email_container ">
                        <div data-testid="email-input-container" class="Input-module_inputWrapper__1ZJFC Input-module_hasErrorMessage__2NyZL ">
                            <input class="Input-module_input__1IPSm" type="email" id="email-input" name="email-input" value="<?php if (isset($_COOKIE["username"])) {echo$_COOKIE["username"];}?>">
                            <label for="email-input" class="Input-module_label__29rQT">Email*</label>
                            <span role="alert" id="email-input-error" class="Input-module_errorMessage__lRmnV" style="display: none;">Please enter a valid email address</span>
                        </div>
                    </div>
<!--ajax link to page VIEW / PAGE /showelelog.php-->
                    <div class="result-name"></div>
<!------------------------------------------------->
                    <?php if (!empty($_SESSION['error'])) : ?>
                    <div class="error" style="color: red">
                        <?php
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        ?>
                    </div>
                    <?php endif; ?>
<!--                    -->
                    <div class="result-check"></div>
<!--                    -->
                </div>
            </form>
            <button  class="ConfirmButton_confirmButton">CONTINUE</button>
        </div>
    </section>
</main>

