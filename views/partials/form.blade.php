<form name="callback">
    <input
            class="popup__name"
            type="text"
            name="name"
            placeholder="Ваше имя"
            value="{{ $name ?? '' }}">

    <input
            class="popup__tel"
            type="tel"
            name="phone"
            placeholder="Ваш телефон +7(000)000-00-00"
            value="{{ $tel ?? '' }}">

    @if(isset($errors))
        @foreach($errors->all() as $error)
            <p class="error">{{$error}}</p>
        @endforeach
    @endif

    <button class="popup__submit" type="submit">Отправить</button>
</form>
