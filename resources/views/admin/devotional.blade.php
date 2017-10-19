@extends('shared.admin.main')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.3/quill.bubble.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.min.css" />
@endsection

@section('title', 'Devotional')

@section('content')
    <div class="overlay" style="display: none">
        <div class="loader">
            <img src="{{asset('images/loader.gif')}}" alt="">
        </div>
    </div>
    <div class="content">
        <div class="container">
           <div class="row">
               <div class="col-md-offset-1 col-sm-10 col-md-8">
                   <div class="card">
                       <div class="header">
                           <h4 class="title">New Devotional</h4>
                           <hr>
                       </div>
                       <div class="content ">
                           <form action="/" method="post" role="form">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" id="title" name="title" placeholder="Title" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="row">
                                   <div class="col-sm-4">
                                       <div class="form-group">
                                           <div class="col-sm-12">
                                               <input type="text" class="form-control" id="bible-verse" name="bible-verse" placeholder="Bible Verse" required>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-sm-8">
                                       <div class="form-group">
                                           <div class="col-sm-12">
                                               <input type="text" class="form-control" id="reading" name="Reading" placeholder="Reading" required>
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
                                   <div class="col-sm-4">
                                       <div class="form-group">
                                           <div class="col-sm-12">
                                               <input type="text" class="form-control datepicker-here" id="date" name="Date" placeholder="Devotional Date" data-language='en' data-position="top left" required>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-sm-4">
                                       <div class="form-group">
                                           <div class="col-sm-12">
                                               <input type="text" class="form-control" id="author" name="author" placeholder="Author" required>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-sm-4">
                                       <a href="javascript:" class="btn btn-info btn-block btn-fill text-uppercase" id="add-day">add day </a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.min.js"></script>
<script>
    $(document).ready(() => {
        $('#date').datepicker();
        var quill = new Quill('#editor', {
            theme: "bubble",
            modules: {
                toolbar: [
                    [{ header: [1, 2, false] }],
                    ['bold', 'italic', 'underline'],
                    ['image', 'code-block'],
                    ['link']
                ]
            }
        });
        $('#add-day').click((e) => {
            let title = $('#title').val();
            let reading = $('#reading').val();
            let verse = $('#bible-verse').val();
            let content = quill.getText();
            let date = $('#date').val();
            let author = $('#author').val();
            if (title === "" || reading === "" || verse === "" || content === "\n" || date === "" || author === ""){
                e.preventDefault();
                new Noty({
                    type: 'error',
                    text: 'all fields are required',
                    timeout: 2000
                }).show();
            } else {
                $.ajax({
                    type: 'POST',
                    url: '{{route('addDevotional')}}',
                    data: {
                        '_token': '{{csrf_token()}}',
                        'title': title,
                        'reading': reading,
                        'verse': verse,
                        'content': content,
                        'date': date,
                        'author': author
                    },
                    beforeSend: () => {
                        $('.overlay').removeAttr('style');
                    },
                    success: (data) => {
                        if (data === 'success'){
                            $('.overlay').addClass('display', 'none');
                            new Noty({
                                type: 'success',
                                text: 'Devotional added successfully',
                                timeout: 2000
                            }).show();
                            setTimeout(() => window.location.reload(true), 2000);
                        }
                    }
                });
            }
        });
    });

</script>
@endsection