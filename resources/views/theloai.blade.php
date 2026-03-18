<table border="1">

<tr>
    <th>Genre Name</th>
    <th>Genre Name VN</th>
</tr>

@foreach($phim as $item)

<tr>
    <td>{{ $item->genre_name }}</td>
    <td>{{ $item->genre_name_vn }}</td>
</tr>

@endforeach

</table>