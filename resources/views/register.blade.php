@extends('index')

@section('title','Страница авторизации')

@section('content')
    <div class="container p-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="{{route('register')}}" method="post">
                    @if(session()->has('success'))
                        <h3>Операция регистрации успешно выполнена</h3>
                    @endif
                    @csrf
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Ваше имя</label>
                        <input type="text" class="form-control" id="inputName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваша почта</label>
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputAge" class="form-label">Ваш возраст</label>
                        <input type="email" class="form-control" id="inputAge" name="age">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваша почта</label>
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Ваша почта</label>
                        <input type="email" class="form-control" id="inputEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Ваш пароль</label>
                        <input type="password" class="form-control" id="inputPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="inputPasswordConfirmation" class="form-label">Ваш пароль повторно</label>
                        <input type="password" class="form-control" id="inputPasswordConfirmation" name="password_confirmation">
                    </div>
                    <input type="text" name="fullName" placeholder="Ваше имя:"><br>
                    @error('fullName')<p>{{$message}}</p>@enderror
                    <input type="email" name="email" placeholder="Ваша почта:"><br>
                    @error('email')<p>{{$message}}</p>@enderror
                    <input type="text" name="age" placeholder="Ваш возраст:"><br>
                    @error('age')<p>{{$message}}</p>@enderror
                    <input type="text" name="address" placeholder="Ваш адресс:"><br>
                    @error('address')<p>{{$message}}</p>@enderror
                    <input type="text" name="login" placeholder="Ваша логин:"><br>
                    @error('login')<p>{{$message}}</p>@enderror
                    <input type="password" name="password" placeholder="Ваш пароль:"><br>
                    @error('password')<p>{{$message}}</p>@enderror
                    <input type="password" name="password_confirmation" placeholder="Ваш пароль повторно:"><br>
                    <input type="submit" value="Регистрация">
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
