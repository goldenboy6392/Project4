<!DOCTYPE html>
<html>
<head>
    <title>Medications</title>
    <meta charset='utf-8'>
    <link href="/css/main.css" type='text/css' rel='stylesheet'>
</head>
<body>

    <header>

    </header>

    <section>
        @foreach($medications as $medication)
        <table border="1">
        <tr>
            <td>NDC</td>
            <td>Type</td>
            <td>Brand Name</td>
            <td>Generic Name</td>
            <td>Dosage Form</td>
            <td>Route Of Administration</td>
            <td>Initial Patent Date</td>
            <td>Patent Expiration Date</td>
            <td>Manufacturer</td>
            <td>Active Ingredient</td>
            <td>Strength(s)</td>
            <td>Unit of Dosing</td>
            <td>Medication Class</td>
            <td>Medication Schedule</td>
            <td>Average Retail Price</td>
            <td>Medication Interactions</td>
            <td>Tags</td>
            <td>Side Effects</td>
            <td>Image</td>
            <td>Created At</td>
            <td>Updated At</td>       
        </tr>
        <tr>
            <td>{{ $medication->ndc }}</td>
            <td>{{ $medication->type }}</td>
            <td>{{ $medication->brand_name }}</td>
            <td>{{ $medication->generic_name }}</td>
            <td>{{ $medication->dosage_form }}</td>
            <td>{{ $medication->route }}</td>
            <td>{{ $medication->start_date }}</td>
            <td>{{ $medication->end_date }}</td>
            <td>{{ $medication->manufacturer }}</td>
            <td>{{ $medication->active_ingredient }}</td>
            <td>{{ $medication->strength }}</td>
            <td>{{ $medication->unit }}</td>
            <td>{{ $medication->class }}</td>
            <td>{{ $medication->schedule }}</td>
            <td>{{ $medication->price }}</td>
            <td>{{ $medication->interactions }}</td>
            <td>{{ $medication->tags }}</td>
            <td>{{ $medication->side_effects }}</td>
            <td>{{ $medication->image }}</td>
            <td>{{ $medication->created_at }}</td>
            <td>{{ $medication->updated_at }}</td>       
        </tr>
        <br>
        </table>
    @endforeach

    </section>

    <footer>
        &copy; {{ date('Y') }}
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>