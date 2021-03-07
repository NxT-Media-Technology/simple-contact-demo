@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (session('error'))
                <div class="alert alert-success" role="alert">
                    <span class="sr-only">Error:</span>
                    {{ session('error') }}
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
            </div>

            <br />

            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail Address</label>
                            <input type="email" name="email" class="form-control" />
                        </div>

                        <input type="submit" value="Create" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
