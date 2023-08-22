<html>
<body>

@forelse($hobbies as $hobby)
    <li>{{ $hobby }}</li>
@empty
    <li>Tidak Punya Hobby</li>
@endforelse

</body>
</html>
