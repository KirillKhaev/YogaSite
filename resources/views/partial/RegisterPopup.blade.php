<form method="POST" action="{{ route('register') }}">
    @csrf
    <div class="pop_up_reg_container pop_up_container hide_reg_pop_up">
        <div class="pop_up_reg pop_up">
                        <div class="pop_up_exit_btn"onclick="CloseRegPopup()"><img src="/images/exit.png"></div>
                        <h1 class="pop_up_title pop_up_reg_title">Регистрация</h1>
                        <p class="reg_pop_up_text">Зарегистрируйся и получи доступ к бесплатным урокам!</p>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror pop_up_input" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Имя">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror pop_up_input" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Электронная почта">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror pop_up_input" name="password" required autocomplete="new-password" placeholder="Пароль">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <input id="password-confirm" type="password" class="pop_up_conf_input  pop_up_input form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Повторите пароль">
                                <button type="submit" class="btn btn-primary pop_up_btn">
                                    {{ __('') }}
                                    <p>Регистрация</p>
                                </button>
                        <p class="pop_up_register">Уже есть аккаунт?<a href="#"  onclick="OpenLoginPopup()"> Войти</a></p>
                        <img src="/images/logo1.png" class="pop_up_logo">
                        <p class="pop_up_user_agreement">Нажимая на кнопку Войти, я подтверждаю, что ознакомился и согласен с Пользовательским соглашением и Политикой конфидециальности. </p>
        </div>
    </div>
</form>