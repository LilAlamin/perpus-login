@extends('layout.main')

@section('container')
    <form action="" method="post" class="form d-flex justify-content-center">
        @csrf
        <div class="login">
            <h4>Login</h4>
            <label for="" class="form-label">Username</label>
            <input type="text" name="username">
            <label for="" class="form-label">Password</label>
            <input type="password" name="password">
            <br>
            <button type="submit" class="btn btn-success mt-2">Login</button>
        </div>
    </form>

    <style>
        label{
            display: block;
        }
        form{
            margin-top: 30vh;
        }
        button{
            
        }

    </style>
@endsection