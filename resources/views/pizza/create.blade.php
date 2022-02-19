@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <div class="form-group">
                        <ul class="list-group">
                            <a href="" class="list-group-item list-group-item-action">View</a>
                            <a href="" class="list-group-item list-group-item-action">Create</a>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{route('pizza.store')}}" method="post">@csrf

                <div class="card-body">
                    <div class="form-group mt-2">
                        <label for="name">Name of pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="name of pizza">
                    </div>

                    <div class="form-group mt-2">
                        <label for="description">Description of pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <div class="row mt-2">
                        <div class="col-2">
                            <label>Pizza price($)</label>
                        </div>
                        <div class="col">
                            <input type="number" name='small_pizza_price' class="form-control" placeholder="small pizza price">
                        </div>
                        <div class="col">
                            <input type="number" name='medium_pizza_price' class="form-control" placeholder="medium pizza price">
                        </div>
                        <div class="col">
                            <input type="number" name='large_pizza_price' class="form-control" placeholder="large pizza price">
                        </div>
                    </div>

                    <div class="form-group mt-2">
                        <label for="category">Category</label>
                        <select class="form-control" name='category'>
                            <option value=""></option>
                            <option value="vegetarian">Vegetarian pizza</option>
                            <option value="nonvegetarian">Non vegetarian pizza</option>
                            <option value="traditional">Traditional pizza</option>
                        </select>
                    </div>

                    <div class="form-group mt-2">
                        <label>Image</label>
                        <input type="file" name='image' class="form-control">
                    </div>     
                    
                    <div class="form-group text-center mt-2">
                        <button class="btn btn-primary" type="submit">Save</button>
                    </div> 
                </form>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection
