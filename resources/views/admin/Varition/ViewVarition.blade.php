<html lang="en">
@extends('admin.index')
@section('viewvarition')
  <body>
      <!-- Striped Rows -->
      <div class="container cont  d-flex justify-content-center align-content-center" style="margin-top: 85px;" id="tabul">
        <div class="table-responsive w-100">
          <h2 class=" text-uppercase  text-center" style="font-family:Times New Roman, Times, serif">Varition Detail Table</h2>
          <table class="table table-striped table-fixed order-table">
            <thead>
              <tr >
                <th>S.N</th>
                <th>Varition Name</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($data as $datas)


                  <tr>
                    <td>{{$datas->variation_id}}</td>
                    <td>{{$datas->variation_name}}</td>
                    <td>
                      <a class="btn btn-primary text-white" href="{{"/admin/variation/$datas->variation_id/edit"}}" style="text-decoration:none; width: 5rem; margin: 0.125rem;" role="button"> Edit </a>
                      <form action="{{route('variation.destroy',$datas->variation_id)}}" method="post">
                        @csrf
                        @method('DELETE')
                      <button class="btn-danger btn delete_btn" value="" class="text-white" style="text-decoration:none;  width: 5rem; margin: 0.125rem;"> Delete </button>&nbsp;
                    </form>
                </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <div class="d-flex justify-content-center">
            {{$data->links() }}
        </div>
        </div>
      </div>

  </body>
</html>
@endsection
