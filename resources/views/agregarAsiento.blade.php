<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuelos</title>
</head>
<body>
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2>Agregar asiento a vuelo</h2>
                <br>
                <div class="form-group">
                    <label for="metros">N&uacute;mero Vuelo</label>
                    <input type="text"class="form-control" value = "CM385" readonly/>
                </div>

                <div class="form-group">
                    <label for="metros">Fecha Vuelo</label>
                    <input type="date"class="form-control" readonly/>
                </div>


                <form >
                    <div class="form-group">
                        <label for="color">Numero Asiento:</label>
                        <input type="text" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label for="color">Id Tipo Asiento:</label>
                        <input type="text" class="form-control" />
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <a class="btn btn-warning">Volver</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>