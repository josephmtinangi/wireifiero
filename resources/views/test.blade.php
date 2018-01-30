@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
            
                <div class="panel-body">
                    <form action="" method="POST" role="form">
                    
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                    
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password">
                        </div>
                    
                        <button type="button" id="login" class="btn btn-primary">Login</button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
    <script src="{{ asset('js/login.js') }}"></script>
@endpush
