@extends('layout.layout')
    @section('content')
        <div class="container">
            <main>
                <div class="main_first_block">
                    <div class="main_title">
                        <h1 class="main_title_text">
                            ОНЛАЙН БИБЛИОТЕКА ЙОГИ
                        </h1>
                        <button class="main_title_btn">
                            Начать бесплатный урок
                        </button>
                    </div>
                </div>
                <div class="content_container">
                    <div class="main_second_block">
                        <h1 class="main_second_block_title">ЗДОРОВОЕ ТЕЛО И ГАРМОНИЯ ПОВСЮДУ</h1>
                        <div class="advantages_block">
                            <div class="one_advantage">
                                <img src="/images/ruble.png" class="ruble">
                                <p class="advantage_title">Фиксированная стоимость подписки</p>
                                <p class="advantage_subtitle">Занимайтесь йогой в удовольствие и без лишних трат</p>
                            </div>
                            <div class="one_advantage">
                                <img src="/images/person.png" class="person">
                                <p class="advantage_title">50+ Уроков йоги разных уровней и направлений</p>
                                <p class="advantage_subtitle">В компании нашей команды экспертов</p>
                            </div>
                            <div class="one_advantage">
                                <img src="/images/computer.png" class="computer">
                                <p class="advantage_title">Просматривайте видео на любом устройстве</p>
                                <p class="advantage_subtitle">Превосходное качество на телефоне или компьютере</p>
                            </div>
                            <div class="one_advantage">
                                <img src="/images/planet.png" class="planet">
                                <p class="advantage_title">Занимайтесь где угодно и когда угодно</p>
                                <p class="advantage_subtitle">Вы получаете доступ к урокам в режиме 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="main_third_block">
                        <div class="main_third_block_text">
                            <h1 class="main_third_block_title">ВЫБЕРИ ПРОГРАММУ, КОТОРАЯ ПОДХОДИТ ИМЕННО ТЕБЕ</h1>
                            <p class="main_third_block_subtitle">На aiogi ты найдешь комплексные программы в зависимости от твоего направления и уровня</p>
                            <button class="main_third_block_btn">Выбрать программу</button>
                        </div>
                        <div class="main_third_block_img">
                            <img src="/images/yoga.png">
                        </div>
                    </div>
                    <div class="main_fourth_block">
                        <h1 class="main_fourth_block_title">ДОВЕРЬСЯ ЭКСПЕРТАМ СВОЕГО ДЕЛА</h1>
                        <p class="main_fourth_block_subtitle">Занимайся с лучшими инструкторами по всему миру. Наши преподователи помогут тебе наработать новые навыки, улучшить твою практику йоги и достигнуть поставленных целей. И всегда с позитивным настроем!</p>
                        <div class="experts_block">
                            <div class="expert">
                                <img src="/images/expert1.png" class="expert_photo">
                                <p class="expert_name">Резеда Анамова</p>
                            </div>
                            <div class="expert">
                                <img src="/images/expert2.png" class="expert_photo">
                                <p class="expert_name">Ирина Плотникова</p>
                            </div>
                            <div class="expert">
                                <img src="/images/expert3.png" class="expert_photo">
                                <p class="expert_name">Степан Чекменёв</p>
                            </div>
                            <div class="expert">
                                <img src="/images/expert4.png" class="expert_photo">
                                <p class="expert_name">Марина Пастухова</p>
                            </div>
                        </div>
                    </div>
                    <div class="main_fifth_block">
                        <img src="/images/carpet.png">
                        <div class="main_fifth_block_text">
                            <h1 class="main_fifth_block_title">ГОТОВЫ ПОГРУЗИТЬСЯ В МИР aiogi?</h1>
                            <p class="main_fifth_block_subtitle">Неограниченный доступ к библиотеке от 700 рублей в месяц. Отменить подписку можно в любой момент</p>
                            <button class="main_fifth_block_btn">Оформить подписку</button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    @endsection