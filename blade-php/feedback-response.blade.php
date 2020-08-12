@extends('emails.layout.store-template')
@section('content')
    <table class="container hero-subheader" border="0" cellpadding="0" cellspacing="0" width="620" style="width: 620px;">
        <tr>
            <td class="hero-subheader__title" style="font-size: 16px; font-weight: bold; padding: 80px 0 0px 0;" align="left">
                The {{$feedback_data['store_name']}} store responded to the following comment about the order #{{$feedback_data['order_reference']}}:
            </td>
        </tr>
        <tr>
            <td class="hero-subheader__content" style="font-size: 16px; font-style: italic; color: rgba(65,65,65,0.78);" align="left">
                "{!! $feedback_data['comment'] !!}"
            </td>
        </tr>
        <tr>
        <tr>
            <td class="hero-subheader__title" style="font-size: 16px; font-weight: bold; padding: 20px 0 0px 0;" align="left">
                The {{$feedback_data['store_name']}} Answer:
            </td>
        </tr>
        <tr>
            <td class="hero-subheader__content" style="font-size: 16px; font-style: italic; color: rgba(65,65,65,0.78);" align="left">
                "{!! $feedback_data['response'] !!}"
            </td>
        </tr>
    </table>
@endsection
