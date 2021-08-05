@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('اللوحة الرئيسية') }}</div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('لقد تم تسجيل الدخول!') }}
                </div>
                <div class="text-center">
                    <a href="/projects" class="btn btn-primary w-25" role="button">
                     {{ __('لوحة المشاريع') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
