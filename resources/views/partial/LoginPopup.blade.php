 <form method="POST" action="{{ route('login') }}">
    @csrf
             <div class="pop_up_login_container pop_up_container hide_login_pop_up">
                <div class="pop_up_login pop_up">
                        <div class="pop_up_exit_btn"onclick="CloseLoginPopup()"><img src="/images/exit.png"></div>
                        <h1 class="pop_up_title pop_up_login_title">Войти на сайт</h1>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror pop_up_input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Электронная почта">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                   <strong>{{ $message }}</strong>
                              </span>
                        @enderror
                        <input id="password" type="password" class="pop_up_input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Пароль">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <a href="#" class="pop_up_reset_pwd">Забыли пароль?</a>
                        <button type="submit" class="btn btn-primary pop_up_btn">Войти</button>
                        <p class="pop_up_register">Нет аккаунта? <a href="#" onclick="OpenRegPopup()">Регистрация</a></p>
                        <img src="/images/logo1.png" class="pop_up_logo">
                        <p class="pop_up_user_agreement">Нажимая на кнопку Войти, я подтверждаю, что ознакомился и согласен с Пользовательским соглашением и Политикой конфидециальности. </p>
                </div>
                </div>
         </form>