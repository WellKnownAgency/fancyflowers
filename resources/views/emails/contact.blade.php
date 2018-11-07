@php
    $style = [
    'body' => 'margin:0;padding:0;background:#f6f6f6;',
    'logo' => 'display:block;margin: auto;',
    'a' => 'color:#348eda;',
    'p' => 'font-family: Arial;color: #666666;font-size: 12px;',
    'h' => 'font-family:Arial;color: #111111;font-weight: 200;line-height: 1.2em;margin: 40px 20px;',
    'h1' => 'font-size: 36px;',
    'h2' => 'font-size: 28px;',
    'h3' => 'font-size: 22px;',
    'h4' => 'font-size: 20px;',
    'th' => 'font-family: Arial;text-align: left;color: #111111;',
    'td' => 'font-family: Arial;text-align: left;color: #111111;',
    ];
@endphp

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{'site_name' | option}</title>
    <style>

    </style>
</head>
<body style="{{$style['body']}};">
<div style="height:100%;padding-top:20px;background:#f6f6f6;">
    <a href="{{ env('APP_URL') }}">
        <img style="{{$style['logo']}}"
             src="{{ env('APP_URL') }}/images/logo.png"
             alt="{{ env('APP_NAME') }}"
             width="120" height="90"/>
    </a>
    <!-- body -->
    <table class="body-wrap" style="padding:0 5px 5px 5px;width: 100%;background:#f6f6f6;margin-top:10px;max-width:800px;margin:auto;">
        <tr>
            <td></td>
            <td class="container" style="border:1px solid #f0f0f0;background:#ffffff;">
                <div class="content">
                    <table style="width:100%;">
                        <tr>
                            <td>
                                @yield('title')

                                <table style="width:95%;margin:auto;">
                                        <tr style="border-bottom:1px solid #f0f0f0;background:#ffffff;">
                                            <th style="{{$style['th']}}">Name</th>
                                            <td style="{{$style['th']}}">{{ $name }} </td>
                                        </tr>
                                        <tr style="border-bottom:1px solid #f0f0f0;background:#ffffff;">
                                            <th style="{{$style['th']}} border-top: 1px solid #eeeeee;">Subject</th>
                                            <td style="{{$style['th']}} border-top: 1px solid #eeeeee;">{{ $subj }} </td>
                                        </tr>
                                        <tr style="border-bottom:1px solid #f0f0f0;background:#ffffff;">
                                            <th style="{{$style['th']}} border-top: 1px solid #eeeeee;">Email</th>
                                            <td style="{{$style['th']}} border-top: 1px solid #eeeeee;">{{ $email }} </td>
                                        </tr>
                                        <tr style="border-bottom:1px solid #f0f0f0;background:#ffffff;">
                                            <th style="{{$style['th']}} border-top: 1px solid #eeeeee;">Message</th>
                                            <td style="{{$style['th']}} border-top: 1px solid #eeeeee;">{{ $body }} </td>
                                        </tr>

                                    <tfoot>
                                    <tr>
                                        <th colspan="3" style="border-top: 1px solid #eeeeee;"></th>
                                        <th style="{{$style['th']}} border-top: 1px solid #eeeeee;text-align: center;padding-top: 5px;"></th>
                                        <th style="{{$style['th']}} border-top: 1px solid #eeeeee;text-align: center;padding-top: 5px;"></th>
                                    </tr>
                                    </tfoot>
                                </table>
                                <br>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /content -->
            </td>
            <td></td>
        </tr>
    </table>
    <!-- /body -->
    <!-- footer -->
    <table style="clear:both !important;width: 100%;">
        <tr>
            <td></td>
            <td class="container">
                <!-- content -->
                <div class="content">
                    <table style="width:100%;text-align: center;">
                        <tr>
                            <td align="center">
                                <p style="{{$style['p']}}">
                                    <a href="{{ env('APP_URL') }}" style="color: #999999;">
                                        {{ env('APP_NAME') }}
                                    </a>
                                </p>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /content -->
            </td>
            <td></td>
        </tr>
    </table>
    <!-- /footer -->
</div>
</body>
</html>
