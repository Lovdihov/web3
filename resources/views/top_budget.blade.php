<table border="1">

<tr>
<th>Tên phim</th>
<th>Ngày phát hành</th>
<th>Runtime</th>
</tr>

@foreach($movies as $m)

<tr>
<td>{{ $m->movie_name }}</td>
<td>{{ $m->release_date }}</td>
<td>{{ $m->runtime }}</td>
</tr>

@endforeach

</table>