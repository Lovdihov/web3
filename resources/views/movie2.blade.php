<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Top 10 Phim Hay Nhất</title>
    <style>
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
    </style>
</head>
<body>

    <h2>Danh sách 10 bộ phim có điểm bình chọn cao nhất</h2>

    <table>
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Bộ Phim (movie_name)</th>
                <th>Ngày Phát Hành (release_date)</th>
                <th>Điểm Bình Chọn (vote_average)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($movies as $index => $movie)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $movie->movie_name }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>{{ $movie->vote_average }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>