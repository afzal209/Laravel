@extends('layouts.homee')
@section('title','fee-upd')

@section('content')
<div class="container" style="width:100%;">
    <div class="row">
        <div class="col-md-6">
    <img src="img/5ec15ed8-eabf-4916-a00c-7eae6fbd10a1.png" width="300px" height="200px">
</div>
<br>
<br>
<br>
<div class="col-md-6">
<form action="up_fee">
    <input type="hidden" name="id" value="<?php echo $ed->id?>">
    <label style="font-family: David; font-size: 30px;">Update Fee:</label>
    <input type="number" style="border:2px solid orange;" name="class_fee" value="<?php echo $ed->Monthly_fee?>" class="form-control" required>
    <br>
    <br>
    <input type="submit" name="sb" value="update" class="btn btn-danger" style="float:right;">
    </form>
</div>
</div>
</div>
                   @endsection