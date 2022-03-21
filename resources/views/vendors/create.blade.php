@extends('master')
@section('content')
    <form action="{{route('vendors.store')}}" method="post">
        <h2>Add Vendor</h2>
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="email" name="email" placeholder="email"><br>
        <input type="text" name="address" placeholder="address"><br>
        <input type="text" name="vendor_boss" placeholder="vendor boss"><br>
        <input type="text" name="phone" placeholder="phone"><br>
        <select name="status_id" id="status_id">
            <option value="1">Active</option>
            <option value="2">Inactive</option>
        </select><br>
        <button>Add</button>
    </form>
@endsection
