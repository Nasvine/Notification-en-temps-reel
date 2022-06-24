<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.bundle.min.js"></script>
    <title>Message</title>
</head>

<body>
    <h3 class="text-center">Message</h3>
    <div class="container">
        <div class="row ">
        <div class="col-sm-3">
        </div>
            <div class="col-sm-6">
                <div class="card">
                    <form action="{{route('EnvoiMessage.store')}}" method="post">
                    @csrf
                    <div class="card-header">
                        <strong>Message</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Objet</label>
                                    <input type="text" name="objet" class="form-control" id="name" placeholder="Entrer l'objet">
                                </div>
                            </div>
                        </div>
                        <!--/.row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="ccnumber">Message</label>
                                    <textarea name="message" id="" cols="30" rows="10" class="form-control" id="ccnumber" placeholder="Ecrivez-ici"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-sm btn-primary">
                                <i class="fa fa-dot-circle-o"></i> Submit</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
           
            <div class="col-sm-3">
        </div> 

        </div>
</body>

</html>