@extends('root.root_admin_layout')

@section('content')
<div class="container">
  <div class="profile-section" style="padding-top:0;">
    <div class="card">
      <div class="card-body">
        <div class="flexbox mb-20">
          <div class="lookup lookup-right">
            <form class="form-group" action="index.html" method="post">
              <input class="w-200px" type="text" name="s" placeholder="Name">
              <input class="w-200px" type="text" name="s" placeholder="Transaction id">
              <input class="w-200px" type="text" name="s" placeholder="Amount">
              <button type="button" class="btn btn-info btn-round" name="button" style="padding-top:0;">Search</button>

            </form>
          </div>
        </div>
        <table class="table table-separated">
          <thead>
            <tr>
              <th>#</th>
              <th>Customer Name</th>
              <th>Transaction id</th>
              <th>Transaction Amount</th>
              <th class="text-center w-100px">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Jajang Nurjaman</td>
              <td>#0878978</td>
              <td>Rp. 120.398</td>
              <td class="text-right table-actions">
                <a class="table-action hover-primary" href="#"><i class="ti-check-box"></i></a>
                <a class="table-action hover-danger" href="#"><i class="ti-trash"></i></a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

@endsection
