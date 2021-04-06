<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>



    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="studentaddmodel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Student Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="insertcode.php" method="POST">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" required name="fname" class="form-control"
                                placeholder="Enter First Name">

                        </div>

                        <div class="form-group">
                            <label>last Name</label>
                            <input type="text" required name="lname" class="form-control" placeholder="Enter Last Name">
                        </div>

                        <div class="form-group">
                            <label>Cours</label>
                            <input type="text" required name="course" class="form-control" placeholder="Enter Course">
                        </div>
                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="number" required name="contact" class="form-control"
                                placeholder="Enter Phone Number">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="insertData" class="btn btn-primary">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="jumbotron">
            <div class="card">
                <h2>PHP CRUD bootstrap modal(pop up model)</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#studentaddmodel">
                        Add Data
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.js" ;
        integrity="sha512-HNbo1d4BaJjXh+/e6q4enTyezg5wiXvY3p/9Vzb20NIvkJghZxhzaXeffbdJuuZSxFhJP87ORPadwmU9aN3wSA=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>