@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('تأكيد عنوان بريد الالكتروني') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('تم إرسال رابط التأكيد إلى عنوان بريدك الالكتروني.') }}
                        </div>
                    @endif

                    {{ __('قبل إجراء المتابعة، رجاء قم بتفقد رابط التأكيد في بريدك الالكتروني.') }}
                    {{ __('إذا لم تقم باستلام البريد الالكتروني') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('انقر هنا لطلب تأكيد مجدداً') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
