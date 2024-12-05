@extends('app')

@section('title', 'Form')

@section('content')
    <h2>Форма обратной связи</h2>

    @if(session('status'))
        <div style='border: solid 1px blue; padding: 10px;'>
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="/form">
        @csrf

        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required>
        @error('name')
            <div style = 'color: red;'>{{ $message }}</div>
        @enderror

        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        @error('email')
            <div style = 'color: red;'>{{ $message }}</div>
        @enderror

        <br><br>
        
        <label for="phone">Телефон:</label>
        <input type="text" name="phone" id="phone" required>
        @error('phone')
            <div style = 'color: red;'>{{ $message }}</div>
        @enderror

        <br><br>
        
        <label for="message">Сообщение:</label>
        <textarea name="message" id="message" required></textarea>
        @error('message')
            <div style = 'color: red;'>{{ $message }}</div>
        @enderror

        <br><br>

        <label for="mails">
            <input type="checkbox" name="mails" {{ old('mails') ? 'checked' : '' }}>
            <span>Получать рассылку</span>
        </label>
        @error('mails')
            <div style = 'color: red;'>{{ $message }}</div>
        @enderror

        <br><br>

        <button type="submit">Отправить</button>
    </form>
@endsection