<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($alphabet as $alphabet)
    {{ $alphabet['alpha_name'] }}
    <br>
    @endforeach
    @for($page = 1; $page<= $number_of_page; $page++)
        <?php echo '<a href = "/alpha/' . $page . '">' . $page . ' </a>' ?>
    @endfor
</body>
</html>
