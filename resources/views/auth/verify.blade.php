@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('client.verify_your_email_address')</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('client.fresh_verification_link_address')
                        </div>
                    @endif

                    @lang('client.before_proceeding')
                    @lang('client.if_did_receive_email'), <a href="{{ route('verification.resend') }}">@lang('client.click_request_another')</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
