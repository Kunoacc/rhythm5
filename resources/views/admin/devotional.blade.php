@extends('shared.admin.main')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.3/quill.bubble.min.css" />
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
                           <form action="/" method="post" role="form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
                                   <div class="col-sm-4">
                                       <div class="form-group">
                                           <div class="col-sm-12">
                                               <input type="text" class="form-control" id="bible-verse" name="bible-verse" placeholder="Bible Verse">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-sm-8">
                                       <div class="form-group">
                                           <div class="col-sm-12">
                                               <input type="text" class="form-control" id="Reading" name="Reading" placeholder="Reading">
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-12">
                                       <div id="editor" style="min-height: 100px">
                                           <p>Today's devotional content. (Double click on a word to see the editor options)</p>
                                       </div>
                                   </div>
                               </div>
                               <div class="row">
                                   <div class="col-sm-8">
                                       <div class="form-group date">
                                           <div class="col-sm-12">
                                               <input type="text" class="form-control" id="date" name="Date" placeholder="Devotional Date">
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-sm-4">
                                       <a href="javascript:" class="btn btn-info btn-block btn-fill text-uppercase">add day </a>
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
<script src="{{asset('js/plugins/bootstrap-datepicker.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.3/quill.min.js"></script>
<script>
    var Quill = new Quill('#editor', {
        theme: "bubble",
        modules: {
            toolbar: [
                [{ header: [1, 2, false] }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block'],
                ['link']
            ]
        },
    });
    $('#date').datepicker({
        todayBtn: true,
        datesDisabled: ['10/06/2017', '10/21/2017']
    });
</script>
@endsection