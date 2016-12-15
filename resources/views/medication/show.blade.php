<!DOCTYPE html>
<html>
<head>
    <title>Show Book</title>
    <meta charset='utf-8'>
    <link href="/css/foobooks.css" type='text/css' rel='stylesheet'>
</head>
<body>

    <header>
        <img
        src='http://making-the-internet.s3.amazonaws.com/laravel-foobooks-logo@2x.png'
        style='width:300px'
        alt='Foobooks Logo'>
    </header>

    <section>
        <ul>
    @foreach($medications as $medication)
        <li>{{ $medication->id }}</li>
        <li>{{ $medication->ndc }}</li>
        <li>{{ $medication->type }}</li>
        <li>{{ $medication->brand_name }}</li>
        <li>{{ $medication->generic_name }}</li>
        <li>{{ $medication->dosage_form }}</li>
        <li>{{ $medication->route }}</li>
        <li>{{ $medication->start_date }}</li>
        <li>{{ $medication->end_date }}</li>
        <li>{{ $medication->manufacturer }}</li>
        <li>{{ $medication->active_ingredient }}</li>
        <li>{{ $medication->strength }}</li>
        <li>{{ $medication->unit }}</li>
        <li>{{ $medication->class }}</li>
        <li>{{ $medication->schedule }}</li>
        <li>{{ $medication->price }}</li>
        <li>{{ $medication->interactions }}</li>
        <li>{{ $medication->tags }}</li>
        <li>{{ $medication->side_effects }}</li>
        <li>{{ $medication->image }}</li>
        <li>{{ $medication->created_at }}</li>
        <li>{{ $medication->updated_at }}</li>
        <br>
    @endforeach
</ul>
    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>