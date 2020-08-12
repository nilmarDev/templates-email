@extends('emails.layout.store-template')

@section('content')
    <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
        <tr>
            <td class="hero-subheader__title" style="font-size: 20px; color: #333333; font-weight: 500; padding: 25px 0 15px 0;" align="center">{{$data['title']}}</td>
        </tr>

        <tr>
            <td class="hero-subheader__content" style="font-size: 20px; line-height: 30px; color: #333333; padding: 10px 70px 20px;" align="center">
                {!! $data['body_message'] !!}
            </td>
        </tr>
    </table>

    <table style="padding: 40px 0 0 0;">
        <tr>
        <tr>
            <td align="center">
                <table class="" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="" width="230" align="center" style="width: 230px; border-radius: 5px; background: #333333; color: #ffffff; padding: 15px; text-transform: uppercase; text-align: center; font-size: 14px; font-weight: bold;">
                            <a href="{{ $data['button_link'] }}"
                               style=" text-decoration: none; color: #ffffff;">
                                {{ $data['button_text'] }}
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        {{--
        <tr>
            <td align="center">
                <table class="container" border="0" cellpadding="0" cellspacing="0" width="100%" align="center">
                    <tr>
                        <td align="center">
                            <table class="container" border="0" cellpadding="0" cellspacing="0" width="620" align="center" style="width: 620px;">
                                <tr>
                                    <td align="middle">
                                        <table width="60" height="2" border="0" cellpadding="0" cellspacing="0" style="width: 60px; height: 2px;">
                                            <tr>
                                                <td align="middle" width="60" height="2" style="padding: 50px 15px 10px; width: 60px; height: 2px; font-size: 1px;">
                                                    <a href="{{ $data['button_link'] }}" target="_blank">
                                                        <img
                                                            alt="Track image"
                                                            src="{{ $data['track_image_src'] }}">
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        --}}
        </tr>
    </table>
@endsection
