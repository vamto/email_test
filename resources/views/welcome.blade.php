<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unisender</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/css/bootstrap-modal.min.css">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h1>Отправить email</h1>
                <form action="{{action('AjaxController@actionSendUnisender')}}" method="post" id="form">
                    <div class="form-group">
                        <label>Email получателя</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ваше имя</label>
                        <input type="text" name="sender_name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Ваш Email</label>
                        <input type="email" name="sender_email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Тема </label>
                        <input type="text" name="subject" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Текст сообщения</label>
                        <textarea name="body" class="form-control" cols="30" rows="10" required></textarea>
                    </div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-primary" value="Отправить">
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>


    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>


    <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modal.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-modal/2.2.6/js/bootstrap-modalmanager.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    </body>
</html>
