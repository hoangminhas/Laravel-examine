@extends('master')
@section('content')
    <form action="{{route('vendors.update')}}" method="post">
        <h2>Update Vendor</h2>
        @csrf
        <input type="hidden" name="method" value="put">
        <input type="text" name="name" value="{{$vendor->name}}" placeholder="name"><br>
        <input type="email" name="email" value="{{$vendor->email}}" placeholder="email"><br>
        <input type="text" name="address" value="{{$vendor->address}}" placeholder="address"><br>
        <input type="text" name="vendor_boss" value="{{$vendor->vendor_boss}}" placeholder="vendor boss"><br>
        <input type="text" name="phone" value="{{$vendor->phone}}"><br>
        <select name="status_id" id="status_id">
            <option value="{{$vendor->status_id}}" selected>{{$vendor->status_id}}</option>
            <option value="1" disabled>Active</option>
            <option value="2" disabled>Inactive</option>
        </select><br>
        <button>Update</button>
    </form>
@endsection
