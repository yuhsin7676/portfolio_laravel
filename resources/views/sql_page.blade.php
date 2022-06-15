<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include ('templates.headteg', ['title' => 'sql-запросы'])
    
</head>
<body>
    
    @include ('templates.header')
    
    <div class="b-example-divider"></div>
    
    <div>
        <h3>Здесь будут мои sql-запросы</h3>
    </div>
    
    <script>
        
$.ajax({
    url: "/getStudents",
    method: "GET",
    success: function(data){
        console.log(data);
    }
});

$.ajax({
    url: "/getClasses",
    method: "GET",
    success: function(data){
        console.log(data);
    }
});  

$.ajax({
    url: "/getTeachers",
    method: "GET",
    success: function(data){
        console.log(data);
    }
});  
        
    </script>
    
</body>
</html>