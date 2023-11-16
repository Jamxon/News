<?php
include "header.php";
?>
<section id="contact">
    <div class="container">
        <div class="form_title">Напишите нам</div>
        <div class="contact_wrapper">
            <form action="send/">
                <div class="form_body">
                    <div class="sup_inputs">
                        <input
                            type="text"
                            class="name_input"
                            placeholder="Имя"
                            required
                        />
                        <input
                            type="text"
                            class="phone_input"
                            placeholder="Номер телефона"
                            required
                        />
                    </div>
                    <input
                        type="email"
                        class="email_input"
                        placeholder="Электронная почта"
                        required
                    />
                    <textarea placeholder="Текст"></textarea>
                    <div class="form_button">
                        <button type="submit">Отправить</button>
                    </div>
                </div>
            </form>
            <div class="contact_news">
                <div class="contact_cards">
                    <div class="contact_card">
                        <div class="contact_card_title">Электронная почта</div>
                        <div class="contact_card_text">info@namanganliklar24.uz</div>
                    </div>
                    <div class="contact_card">
                        <div class="contact_card_title">Номер телефона</div>
                        <div class="contact_card_text">+998 88 522-54-76</div>
                    </div>
                    <div class="contact_card">
                        <div class="contact_card_title">Адрес</div>
                        <div class="contact_card_text last_card_text">
                            Ташкент, площадь Мустакиллик, 6
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include "footer.php";
?>