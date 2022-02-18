@extends('app')

@section('registration')

<form action="script.php" method="post">

    <div class="partRegBox">
        <label for="login">Логин:</label>
        <input type="text" name="login" value="" id="login"/>
    </div>

    <div class="partRegBox">
        <label for="pass">Пароль:</label>
        <input type="password" name="pass" id="pass"/>
    </div>

    <div class="submitBox">
        <input type="submit" value="Отправить"/>
    </div>

</form>

@endsection