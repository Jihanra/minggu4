<html>
<body>
<h1 align = center>Ini adalah halaman getById</h1><br>

    <table border = "3">
        <tr align = center>
            <td>ID</td>
            <td>Title</td>
            <td>Content</td>
            <td>Image</td>
            <td>Create At</td>
            <td>Update At</td>
        </tr>
        <tr>
            <td>{{$Article->id}}</td>
            <td>{{$Article->title}}</td>
            <td>{{$Article->content}}</td>
            <td>{{$Article->image}}</td>
            <td>{{$Article->created_at}}</td>
            <td>{{$Article->updated_at}}</td>
        </tr>
    </table>
</body>
</html>