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
    @if($data['reason'])
        <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
            <tr>
                <td class="hero-subheader__content" style="font-size: 15px; line-height: 30px; color: #333333; padding: 10px 70px 20px;" align="center">
                    Reason: {!! $data['reason'] !!}
                </td>
            </tr>
        </table>
    @endif
@endsection
