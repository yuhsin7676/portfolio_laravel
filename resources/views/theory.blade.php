<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include ('templates.headteg', ['title' => 'теория'])
    
</head>
<body>
    
    @include ('templates.header')
    
    <div class="b-example-divider"></div>
    
    <div>
        <h3>Здесь будут какая-нибудь теория</h3>
    </div>
    
</body>
</html>