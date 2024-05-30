<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/public/assets/css/global.css" />
        <link rel="stylesheet" href="/public/assets/css/signupForm.css" />
        <title>Document</title>
    </head>
    <body>
        <div id="root">
            <header>
                <div class="logo">
                    <a href="">
                        <img src="/public/assets/icons/Logo.svg" alt="" />
                    </a>
                </div>
                <div class="needHelp">
                    <img src="/public/assets/icons/ic-settings.svg" alt="" />
                    <a href="">Need Help?</a>
                </div>
            </header>
            <div class="formCont">
                <form action="../account/index.html">
                    <div>
                        <h1>Sign in</h1>
                        <p class="newUser">
                            New user? <a href="../createAccount/index.html"> Create an account</a>
                        </p>
                    </div>
                    <div class="input-group">
                        <input
                            required=""
                            type="text"
                            name="text"
                            autocomplete="off"
                            class="input"
                        />
                        <label class="user-label">Email address</label>
                    </div>
                    <div class="input-group">
                        <input
                            required=""
                            type="password"
                            name="text"
                            autocomplete="off"
                            class="input passInp"
                        />
                        <label class="user-label">Password</label>
                        <ion-icon name="eye" class="showPass"></ion-icon>
                        <ion-icon name="eye-off" class="hidePass"></ion-icon>
                    </div>
                    <div class="forgotPassword">
                        <a href="../forgotYourPassword/index.html"
                            >Forgot password?</a
                        >
                    </div>
                    <div class="btn-group">
                        <button type="submit">Login</button>
                    </div>
                    <div class="loginOr">
                        <div class="line"></div>
                        <p>OR</p>
                        <div class="line"></div>
                    </div>
                    <div class="socialIconsCont">
                        <a href="">
                            <img src="/public/assets/icons/ic-google.svg" alt="" />
                        </a>
                        <a href="">
                            <img
                                src="/public/assets/icons/ic-facebbook.svg"
                                alt=""
                            />
                        </a>
                        <a href="">
                            <img src="/public/assets/icons/ic-twitter.svg" alt="" />
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <script
        type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
        nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"
    ></script>
    </body>
    </body>
</html>
