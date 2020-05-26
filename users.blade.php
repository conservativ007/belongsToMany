<table>
  @foreach($categories as $category)
  <tr>
    <td>{{$category->name}}: </td>
    <td>{{$category->product()->pluck('name')->implode(', ')}}</td>
  </tr>
  @endforeach
  </table>
