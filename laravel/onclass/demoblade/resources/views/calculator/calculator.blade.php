@extends('calculator.layout')


@section('content')
    <div class="row">
        <div class="col-4">
            <h3>Tính toán:</h3>
        </div>
        <div class="col-8">
            <form action="{{ route('calculator') }}" method="post">
                @csrf
                <div class="row mb-2">
                    <label class="col-4" for="">Nhập a:</label>
                    <div class="col-8">
                        <input name="numbera" class="col-6 form-control" placeholder="Nhập a" />
                    </div>
                </div>
                <div class="row mb-2">
                    <label class="col-4" for="">Nhập b:</label>
                    <div class="col-8">
                        <input name="numberb" class="col-6 form-control" placeholder="Nhập b" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-8 offset-4 d-flex">
                        <button class="btn btn-primary w-25 me-2">
                            Cộng
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
