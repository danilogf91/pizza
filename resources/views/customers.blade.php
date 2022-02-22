@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

 
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>

            <div class="card">
                <div class="card-header">Customers
                    <a class="me-2 float-end" href="{{route('pizza.index')}}" >View Pizza</a>
                    <a class="me-2 float-end" href="{{route('pizza.create')}}" >Create Pizza</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Phone/Email</th>
                            <th scope="col">Menber since</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as  $customer)
                            <tr>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{ \Carbon\Carbon::parse($customer->created_at)->format('M d Y')}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
   
            </div>
        </div>

    </div>
</div>
@endsection
