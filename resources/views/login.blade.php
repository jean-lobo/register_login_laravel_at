

@extends('layout')

@section('content')
<div class="col-sm-6">
<form method="post" action="login">
    @csrf
<div class="form-group">
    <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email">
</div>

<div class="form-group">
    <label>Password</label>
        <input type="password" name="password" class="form-control" placeholder="Enter password">
</div>
<button type="submit" class="btn btn-primary">Login</button>

</form>

</div>

@stop