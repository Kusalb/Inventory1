
<form method="POST" action="{{route('login')}}">
    <h1>Inventory Management System</h1>

    <div class="form">
        <form class="register-form">

            Email:<input id="email" type="email" class="form-control" name="email" value="{{old('email')}}" required autofocus><br><br>
            Password:<input id="password" type="password" class="form-control" name="password" required><br>
            <button type="submit" class="btn btn-primary">
                Login
            </button>
        </form>
    </div>
</form>