@extends('layouts.template')
@section('title','Login Admin')
@section('head')
<style>
        /* body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        
        } */

    .card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card-title {
        color: #495057;
        /* Text color */
    }

    .form-control {
        border: 1px solid #ced4da;
        /* Input border color */
    }

    .btn-primary {
        background-color: #007bff;
        /* Button color */
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        /* Button hover color */
    }
</style>
@endsection

@section('content')
<br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card p-4">
                <div class="text-center mb-4">
                    <img src="https://i.ibb.co/yVGxFPR/2.png" alt="Logo" style="max-width: 100px;">
                    <h3 class="card-title mt-2">Login Admin</h3>
                    @if(session('error'))
                    <div class="alert alert-danger mt-4">
                        {{ session('error') }}
                    </div>
                    @endif
                </div>
                <form action="/login" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<br>
@endsection



@section('script')

@endsection