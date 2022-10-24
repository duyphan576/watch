<tr>
    <th scope="row">{{$id}}</th>
    <td>{{$username}}</td>
    <td>{{$password}}</td>
    <td>{{$role}}</td>
    <td>{{$fullname}}</td>
    <td>
         <select class="form-select" aria-label="Floating label select example" id="status" name="status">
            <option value="0" @if ({{$status}} = 0) selected>Open</option>
            <option value="1" @if ({{$status}} = 1) selected>Lock</option>
            </select>
    </td>
    <td>
        <div class="btn-group" role="group">
        <button type="submit" class="btn btn-danger">Status</button>
             <a href=""><button type="button" class="btn btn-warning">Password</button></a>
            <a href="signup"><button type="button" class="btn btn-success">Add</button></a>
         </div>
    </td>
</tr>