<table border="1">

<tr>
    <th>STT</th>
    <th>Tên phim</th>
    <th>Ngày phát hành</th>
    <th>Điểm bình chọn</th>
</tr>

@foreach($movies as $index => $movie)

<tr>
    <td>{{ $index + 1 }}</td>
    <td>{{ $movie->movie_name }}</td>
    <td>{{ $movie->release_date }}</td>
    <td>{{ $movie->vote_average }}</td>
</tr>

@endforeach

</table>