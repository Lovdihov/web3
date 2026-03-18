<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phim Có Thời Lượng Lớn Hơn 120 Phút</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 20px;">
    <h2>Danh sách 10 phim có thời lượng hơn 120 phút</h2>
    
    <ul>
        @foreach($movies as $movie)
            <li style="margin-bottom: 10px; border-bottom: 1px dashed #ccc; padding-bottom: 10px;">
                <strong>Tên phim:</strong> {{ $movie->movie_name }} <br>
                <strong>Ngày phát hành:</strong> {{ $movie->release_date }} <br>
                <strong>Thời lượng:</strong> <span style="color: red;">{{ $movie->runtime }} phút</span>
            </li>
        @endforeach
    </ul>

</body>
</html>