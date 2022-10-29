<div class="card mb-4">
    <div class="card-header">Tags</div>
    <div class="card-body">
      <div class="row">
        @foreach ($sidebar_tags as $sidebar_tag)
          <div class="col-sm-6">
            <a href="{{ route('home', ['tag_id' => $sidebar_tag->id]) }}">{{ $sidebar_tag->name }}</a>
          </div>
        @endforeach
        
      </div>
    </div>
  </div>