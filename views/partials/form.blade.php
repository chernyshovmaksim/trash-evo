<form name="callback">
    <input
            class="popup__name"
            type="text"
            name="name"
            placeholder="Ваше имя"
            required
            value="{{ $name ?? '' }}">

    <input
            class="popup__tel"
            type="tel"
            name="phone"
            placeholder="Ваш телефон +7(000)000-00-00"
            required
            value="{{ $tel ?? '' }}">

    <button class="popup__submit" type="submit">Отправить</button>
</form>
