@extends('emails.layout.store-template')

@section('content')
    <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
        <tr>
            <td class="hero-subheader__title" style="font-size: 20px; color: #333333; font-weight: 500; padding: 25px 0 15px 0;" align="center">{{$data['title']}}</td>
        </tr>

        <tr>
            <td class="hero-subheader__content" style="font-size: 20px; line-height: 30px; color: #333333; padding: 10px 70px 20px;" align="justify">
                {!! $data['message'] !!}
            </td>
        </tr>
    </table>
    @if($data['refund_info'])
        <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
            <tr>
                <td class="hero-subheader__content" style="font-size: 15px; line-height: 30px; color: #333333; padding: 10px 70px 20px;">
                    <b>Refund info: </b> {!! $data['refund_info'] !!}
                </td>
            </tr>
        </table>
    @endif
    @if($data['return_method'] === \App\Domains\ShipmentReturn\ReturnMethod::NEED_STORE_CREDIT)
        <table align="justify">
            @if($data['credit_info']['credit_amount_created'])
                <tr>
                    <td class="" style="font-size: 10px; color: #333333; font-weight: bold">CREDIT CREATED:&nbsp;</td>
                    <td class="" style="font-size: 12px; color: #333333; font-weight: normal">${{$data['credit_info']['credit_amount_created']}}</td>
                </tr>
            @endif
            @if($data['credit_info']['credit_expiration_date'])
                <tr>
                    <td class="" style="font-size: 10px; color: #333333; font-weight: bold">EXPIRATION DATE:&nbsp;</td>
                    <td class="" style="font-size: 12px; color: #333333; font-weight: normal">{{$data['credit_info']['credit_expiration_date']}}</td>
                </tr>
            @endif
            @if($data['credit_info']['credit_redemption_code'])
                <tr>
                    <td class="" style="font-size: 10px; color: #333333; font-weight: bold">REDEMPTION CODE:&nbsp;</td>
                    <td class="" style="font-size: 12px; color: #333333; font-weight: normal"> {{$data['credit_info']['credit_redemption_code']}}</td>
                </tr>
            @endif
        </table>
    @endif
@endsection
