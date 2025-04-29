@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mt-2">Register</h2>
            <form method="POST" action="{{ route('register.submit') }}">
                @csrf
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Name" required><br>
                    <input type="email" class="form-control" name="email" placeholder="Email" required><br>
                    <input type="password" class="form-control" name="password" placeholder="Password" required><br>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required><br>
                    <label for="role">Select Role</label>
                    <select class="form-control" name="role" id="role" required>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                    </select><br>
                    <button class="btn btn-primary" type="submit">Register</button>
                    <a href="{{ route('login') }}" class="btn btn-success">Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
</html>
