@extends('layouts.user_side.master')
@section('title', 'Cart')
@section('content')
    <div class="container py-5">
        @if (is_null($usercart))
            <div class="text-muted" style="min-height: 400px">
                You have no product in cart, go to <a href="{{ url('/') }}" class="text-decoration-none">home</a> to
                add item to cart
            </div>
        @else
            <div class="row justify-content-center" style="min-height: 400px">
                @foreach ($usercart as $product)
                    <div class="col-3 my-3">
                        <div class="card shadow-sm border-0 text-black px-2">
                            <div class="card-body">
                                <div class="text-start">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                </div>
                                <div>

                                    <div class="d-flex justify-content-between" style="height: 50px">
                                        <span>{{ $product->description }}</span>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-between font-weight-bold mt-4">
                                    <span>@toRP($product->price)</span>
                                </div>
                                <div class="d-flex justify-content-between font-weight-bold mt-3 text-primary">
                                    <span class="text-muted border px-2 rounded">{{ $product->qty }}</span>
                                    <button class="badge m-0 p-0 bg-transparent border-0 delete-confirm"
                                        data-id="{{ $product->id }}" data-name="{{ $product->name }}"><i
                                            class="fas fa-fw fa-trash text-danger fs-4"
                                            style="font-size: 18px;"></i></button>
                                    <form action="/toCart/{{ $product->id }}" id="form-delete-{{ $product->id }}"
                                        method="POST" style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <input type="submit">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card border-0 mt-3">
                <div class="card-body d-flex justify-content-between ">
                    <span class="fw-semibold p-0">Total:</span>
                    <span class="fw-bold p-0">@toRP($totalPrice)</span>
                </div>
            </div>
        @endif
    </div>
@endsection
