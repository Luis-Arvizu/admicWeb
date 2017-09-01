<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        #watermark {position: fixed; bottom: 0px; right: 0px; width: 700px; height: 1000px; }
        .text {font-size: 15px; font-weight: 600; z-index: 9999; color: white; position: relative; font-family: "Roboto", sans-serif}
    </style>
    <title>Código Guanajoven - {{ $nombre }}</title>
</head>

<body>
<div id="watermark"><img src="{{ url('img/credencial_background.png') }}" height="100%" width="100%"></div>
<p style="top: 240px" class="text" align="center"> {{ $nombre }} </p>
<p style="top: 260px" class="text" align="center"> {{ $curp  }} </p>

<p style="z-index: 9999; position: relative; top: 625px; left: 445px">
    <img src="data:image/png;base64, {!!base64_encode(QrCode::format('png')->size(140)->generate( $api_token )) !!}">
</p>

</body>

</html>
