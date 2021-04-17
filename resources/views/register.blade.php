
@extends('layout')

@section('content')

<div class="col-sm-6">
<form method="post" action="register">
    @csrf
<div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name">
        </div>
<div class="form-group">
            <label>Email</label>
            <input type="Email" name="email" class="form-control" placeholder="Enter Email">
            </div>
                    
<div class="form-group">
                <label>Password</label>
                <input type="Password" name="password" class="form-control" placeholder="Enter Password">
                </div>
        
    <div>
            <button type="submit" class="btn btn-primary">Register</button>

                </div> 
        

</form>
</div>
@stop