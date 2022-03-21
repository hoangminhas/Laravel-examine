@extends('master')
@section('content')
<table>
    <thead>
    <tr>
        <th>Vendor Code</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Vendor Boss</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach($vendors as $vendor)
            <tr>
                <td>{{$vendor->id}}</td>
                <td>{{$vendor->name}}</td>
                <td>{{$vendor->email}}</td>
                <td>{{$vendor->address}}</td>
                <td>{{$vendor->vendor_boss}}</td>
                <td>{{$vendor->status_id}}</td>
                <td><a href="{{route('vendors.edit', $vendor->id)}}">Update</a></td>
                <td><a href="{{route('vendors.destroy', $vendor->id)}}">Delete</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
