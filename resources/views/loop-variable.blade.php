<html>
<body>

@foreach($hobbies as $hobby)
    <li>{{$loop->iteration .". ". $hobby }}</li>
@endforeach

</body>
</html>
