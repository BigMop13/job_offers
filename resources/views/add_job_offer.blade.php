@extends('layout')


@section('body')
<form method="POST" action="{{ route('store') }}">
    @csrf

    <div class="form-group">
        <label for="exampleFormControlTextarea5">Title</label>
        <textarea class="form-control" id="title" name="title" rows="1"></textarea>
      </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea5">Description</label>
        <textarea class="form-control" id="description" name="description" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea5">Responsibilities</label>
        <textarea class="form-control" id="responsibilities" name="responsibilities" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea5">Perfect candidate</label>
        <textarea class="form-control" id="candidate" name="candidate" rows="5"></textarea>
      </div>

      <select id="tag" name="tag" class="form-select" aria-label="Default select example">
        <option selected>Add tag for your offer</option>
        @foreach ($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->tag_name}}</option>
        @endforeach
      </select>

    <div class="flex items-center justify-end mt-3">
        <x-jet-button class="ml-4">
            {{ __('Add offer') }}
        </x-jet-button>
    </div>
</form>
@endsection
