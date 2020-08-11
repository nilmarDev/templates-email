@extends('emails.layout.store-template')

@section('content')
    <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
        <tr>
            <td class="title">{{$data['title']}}</td>
        </tr>

        <tr>
            <td class="message">
                {!! $data['message'] !!}
            </td>
        </tr>

    </table>
    <!-- Table Product -->
    <table class="container table_product" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
        <tr class="" border="0" cellpadding="0" cellspacing="0" width="620" style="border-bottom: solid 1px #333333; width: 620px;">
            <td class="" width="50%" style="font-size: 14px; color: #333333; font-weight: bold; padding: 25px 0 0 0;" align="">RETURN SUMMARY FOR RETURN ID {{$data['return_data']['return_id']}}</td>
            <td class="" width="20%" style="font-size: 14px; color: #333333; font-weight: bold; padding: 25px 10px 0 0;" align="">PRICE</td>
            <td class="" width="20%" style="font-size: 14px; color: #333333; font-weight: bold; padding: 25px 0 0 0;" align="">QTY</td>
            <td class="" width="10%" style="font-size: 14px; color: #333333; font-weight: bold; padding: 25px 0 0 0;" align="">SUBTOTAL</td>
        </tr>
    </table>
    <!-- / Divider -->
    <table class="" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #333333; width: 620px;">
        <tr>
            <td align="center">&nbsp;</td>
        </tr>
    </table>
    <!-- Products -->
    @foreach($data['return_data']['items'] as $item)
    <table class="container table_product" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
        <tr>
            <td class="" width="50%" style="font-size: 10px; color: #333333; font-weight: bold; padding: 25px 0 0 0;" align="">{{strtoupper($item['description'])}}</td>
            <td class="" width="20%" style="font-size: 12px; color: #333333; font-weight: normal; padding: 25px 0 0 0;" align="">${{number_format($item['price'], 2, '.', ',')}}</td>
            <td class="" width="20%" style="font-size: 12px; color: #333333; font-weight: normal; padding: 25px 14px 0 0;" align="">{{$item['quantity']}}</td>
            <td class="" width="20%" style="font-size: 12px; color: #333333; font-weight: normal; padding: 25px 10px 0 0;" align="">${{number_format($item['subtotal'], 2, '.', ',')}}</td>
        </tr>
        <tr>
            <td class="" style="font-size: 12px; color: #333333; font-weight: normal; padding: 10px 0 0 0;" align="">{{$item['item_identifier']}}</td>
        </tr>
    </table>

    <table class="" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="border-bottom: solid 1px #D9D9D9; width: 620px;">
        <tr>
            <td align="center">&nbsp;</td>
        </tr>
    </table>
    @endforeach

    <table class="container table_product" border="0" cellpadding="0" cellspacing="0" width="655" style="width: 655px;" align="">
        <tr>
            <td style="width: 55%;" align="">&nbsp;</td>
            <td class="" style="font-size: 14px; color: #333333; font-weight: bold; padding: 25px 0 0 0;" align="right">RETURN FEE</td>
            <td class="" style="font-size: 14px; color: #333333; font-weight: normal; padding: 25px 36px 0 0;" align="right">${{number_format($data['return_data']['return_fee'], 2, '.', ',')}}</td>
        </tr>
        <tr>
             <td style="width: 55%;" align="">&nbsp;</td>
            <td class="" style="font-size: 14px; color: #333333; font-weight: bold; padding: 25px 0 0 0;" align="right">ESTIMATED REFUND</td>
            <td class="" style="font-size: 14px; color: #333333; font-weight: normal; padding: 25px 36px 0 0;" align="right">${{number_format($data['return_data']['estimated_refund'], 2, '.', ',')}}</td>
        </tr>
    </table>

    <table style="padding: 40px 0 0 0;" width="655">
        <tr>
        <tr>
            <td align="center">
                <table class="cta__block" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="cta__button__link">
                            <a href="{{$data['button_link']}}">
                                {{strtoupper($data['button_text'])}}
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        </tr>
    </table>
    @if(! is_null( $data['return_data']['return_instructions'] ))
    <table class="container " border="0" cellpadding="0" cellspacing="0" width="690" style="width: 690px;" >
        <tr>
            <td class="instructions__title">
                RETURN INSTRUCTIONS:
            </td>
        </tr>
    </table>
    <table class="container " border="0" cellpadding="0" cellspacing="0" width="690" style="width: 690px; text-align: left;" align="">
        {!! $data['return_data']['return_instructions'] !!}
    </table>
    @endif
    @if(! is_null( $data['return_data']['contact_page'] ))
    <table class="container table_product questions" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px; padding: 0 0 50px 0;" align="center">
        <tr>
            <td class="" style="font-size: 20px; color: #333333; font-weight: bold; padding: 25px 0 10px 0;" align="center">Questions?</td>
        </tr>
        <tr>
            <td class="" style="font-size: 20px; color: #333333; font-weight: bold;" align="center">
                <a href="{{$data['return_data']['contact_page']}}" target="_blank" style="color: inherit; text-decoration: none">
                {{$data['return_data']['contact_page']}}
                </a>
            </td>
        </tr>
    </table>
    @endif

@endsection
