@extends('layout')


@section('body')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="form-group">
        <label for="exampleFormControlTextarea5">Title</label>
        <textarea class="form-control" id="exampleFormControlTextarea5" name="title" rows="1"></textarea>
      </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea5">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea5" name="description" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea5">Responsibilities</label>
        <textarea class="form-control" id="exampleFormControlTextarea5" name="responsibilities" rows="5"></textarea>
      </div>

      <div class="form-group">
        <label for="exampleFormControlTextarea5">Perfect candidate</label>
        <textarea class="form-control" id="exampleFormControlTextarea5" name="candidate" rows="5"></textarea>
      </div>

    <div class="flex items-center justify-end mt-3">
        <x-jet-button class="ml-4">
            {{ __('Add offer') }}
        </x-jet-button>
    </div>
</form>
@endsection
