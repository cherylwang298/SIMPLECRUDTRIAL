@extends('layouts.app')

@section('title', 'Registration')

@section('content')
<div class="full-content relative bg-amber-50">

<form>
    @csrf
    <input type="text" name="name">
    <input type="email" name="email">
</form>

</div>
@endsection