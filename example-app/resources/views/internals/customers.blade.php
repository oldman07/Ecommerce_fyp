@extends('layout')
@section('content')

<h1>Customers info</h1>
<form action="customers" method="POST" class="pb-5">

        <div class="input-group">
            <input type="text" name="name">
        </div>
        <button type="submit"> Add customer</button>
@csrf
</form>

{{ $errors -> first('name')}}


<?php
foreach ($customers as $customer){
     echo "<li>".$customer."</li>";
}
?>
@endsection
