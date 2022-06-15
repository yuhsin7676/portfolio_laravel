<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include ('templates.headteg', ['title' => 'Проекты на js'])
    
</head>
<body>
    
    @include ('templates.header')
    
    <div class="b-example-divider"></div>
    
    <div>
        <h3>Здесь будут мои js-игры</h3>
    </div>
    
</body>
</html>