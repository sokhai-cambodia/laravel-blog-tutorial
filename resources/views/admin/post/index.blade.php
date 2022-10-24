@extends('layouts.app')

@section('title', 'Category List')

@section('content')
<div class="row">
    <div class="d-flex justify-content-between mb-2">
      <h3>Post List</h3>
      <a class="btn btn-success" href="{{ route('admin.post.create') }}" role="button"
        >Create</a
      >
    </div>
    
    <!-- Blog entries-->
    <div class="col-lg-12">
      <div class="card p-3">
        <table
          id="datatable"
          class="table table-striped"
          style="width: 100%"
        >
          <thead>
            <tr>
              <th>No</th>
              <th>Thumbnail</th>
              <th>Title</th>
              <th>Tag</th>
              <th>Tag</th>
              <th style="width: 100px">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Thumbnail</td>
              <td>Title</td>
              <td>Tag</td>
              <td>Tag</td>
              <td>
                <a
                  class="btn btn-primary btn-sm"
                  href="create_edit.html"
                  role="button"
                  >Edit</a
                >
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Thumbnail</td>
              <td>Title</td>
              <td>Tag</td>
              <td>Tag</td>
              <td>
                <a
                  class="btn btn-primary btn-sm"
                  href="create_edit.html"
                  role="button"
                  >Edit</a
                >
              </td>
            </tr>
            <tr>
              <td>1</td>
              <td>Thumbnail</td>
              <td>Title</td>
              <td>Tag</td>
              <td>Tag</td>
              <td>
                <a
                  class="btn btn-primary btn-sm"
                  href="create_edit.html"
                  role="button"
                  >Edit</a
                >
              </td>
            </tr>
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Thumbnail</th>
              <th>Title</th>
              <th>Tag</th>
              <th>Tag</th>
              <th style="width: 100px">Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection