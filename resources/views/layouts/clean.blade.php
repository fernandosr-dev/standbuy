<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | {{ config('app.name', 'StandBuy') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body @isset($cssClass)class="{{$cssClass}}"@endisset>
@yield('childContent')

<!-- Scripts -->
<script>
    function shareVehicle(vehicleName) {
        const shareText = `Confira este veículo incrível: ${vehicleName} - disponível na StandBuy!`;
        const shareUrl = window.location.href; // Link da página atual

        if (navigator.share) {
            navigator.share({
                title: 'StandBuy | Veículos Premium',
                text: shareText,
                url: shareUrl
            }).catch(error => console.log('Erro ao compartilhar:', error));
        } else {
            alert('Compartilhamento não suportado neste dispositivo.');
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/your-code.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
