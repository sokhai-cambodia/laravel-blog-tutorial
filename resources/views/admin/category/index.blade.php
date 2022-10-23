@extends('layouts.app')

@section('title', 'Category List')

@section('content')
<div class="row">
    <div class="d-flex justify-content-between mb-2">
      <h3>Category List</h3>
      <a class="btn btn-success" href="{{ route('admin.category.create') }}" role="button"
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
              <th>Category</th>
              <th style="width: 100px">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($categories as $category)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>
                  <a
                    class="btn btn-primary btn-sm"
                    href="{{ route('admin.category.edit', ['id' => $category->id]) }}"
                    role="button"
                    >Edit</a
                  >
                  <form method="POST" action="{{ route('admin.category.destroy', ['id' =>  $category->id]) }}">
                    @method('DELETE')
                    @csrf
                    <button
                      class="btn btn-danger btn-sm"
                      role="button"
                      type="submit"
                      >Delete</button
                    >
                  </form>
                  
                </td>
              </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>No</th>
              <th>Tag</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>
  </div>
@endsection