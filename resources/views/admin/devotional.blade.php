@extends('shared.admin.main')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.3/quill.snow.min.css" />
@endsection

@section('title', 'Devotional')

@section('content')
    <div class="content">
        <div class="container">
           <div class="row">
               <div class="col-md-offset-1 col-sm-10 col-md-8">
                   <div class="card">
                       <div class="header">
                           <h4 class="title">New Devotional</h4>
                           <hr>
                       </div>
                       <div class="content">
                           <form action="">
                               <div class="form-group">
                                   <label for="Title" class="col-sm-2 control-label">Title</label>
                                   <div class="col-sm-10">
                                       <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                   </div>
                               </div>

                           </form>
                       </div>
                   </div>
               </div>
               <div class="col-md-offset-1 col-sm-10 col-md-8">
                   <div class="card">
                       abcde
                   </div>
               </div>
           </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.3/quill.min.js"></script>
@endsection