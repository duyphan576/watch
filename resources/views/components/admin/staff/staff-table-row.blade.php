<tr>
    <th scope="row">{{$id}}</th>
    <td>{{$username}}</td>
    <td>{{$role}}</td>
    <td>{{$fullname}}</td>
    <td>{{$status}}</td>
    <td>
        <div class="btn-group" role="group">
             <a href="{{ url('admin/staff/edit/' . $id) }}"><button type="button" class="btn btn-warning">Edit</button></a>
         </div>
    </td>
</tr>