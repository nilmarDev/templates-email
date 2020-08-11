@extends('emails.layout.store-template')

@section('content')
    <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
        <tr>
            <td class="title">{{$data['title']}}</td>
        </tr>

        <tr>
            <td class="message">
                {!! $data['body_message'] !!}
            </td>
        </tr>
    </table>

    <table style="padding: 40px 0 0 0;" width="655">
        <tr>
        <tr>
            <td align="center">
                <table class="cta__block" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="cta__button__link">
                            <a href="{{ $data['button_link'] }}">
                                {{ $data['button_text'] }}
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
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
        </tr>
    </table>
@endsection
