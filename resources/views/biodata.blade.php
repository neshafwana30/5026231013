2
3
4
5
6
7
8
9
10
11
12
<!DOCTYPE html>
<html>

<head>
    <title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>

<body>

    <h1>Tutorial Laravel</h1>
    <a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

    <br>
    <p>Nama : {{ $nama }}</p>
    <p>Umur : {{ $usia }}</p>
    <p>Alamat : {{ $alamat }}</p>
    <ul>
        {{-- /renungkanlah lagi foreach ini gimanah --}}
        @foreach ($matkul as $sm)
            <li> {{ $sm }}</li>
        @endforeach

    </ul>


</body>

</html>
