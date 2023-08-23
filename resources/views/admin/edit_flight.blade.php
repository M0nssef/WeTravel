<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Modify Flight</title>
</head>

<body>
    <div class="container py-5">
        <form class="row g-3" action="{{route('admin.modifier',$airline->airline_id)}}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <h2>Modify Flight</h2>
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Country</label>
                <input type="text" name="Country" class="form-control" id="inputEmail4" value="{{{old('Country',$airline->Country )}}}">
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Place de Depart</label>
                    <input type="text" class="form-control" name="Depart" value="{{{old('Depart',$airline->Depart )}}}">
                </div>

                <div class="col-md-6">

                    <label class="form-label">Place de Retour</label>
                    <input type="text" class="form-control" name="Retour" value="{{{old('Retour',$airline->Retour )}}}">
                </div>
            </div>
            <div class="col-12">
                <label class="form-label">Image</label>
                <input type="file" class="form-control" name="Image" >
            </div>
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Date de Depart</label>
                    <input type="date" name="date_Aller" class="form-control" value="{{{old('date_Aller',$airline->date_Aller )}}}">
                </div>

                <div class="col-md-6">

                    <label class="form-label">Date de Retour</label>
                    <input type="date"  name="date_Retour" class="form-control" value="{{{old('date_Retour',$airline->date_Retour )}}}">
                </div>
            </div>
            <div class="col-12">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" required>{{{old('description',$airline->description )}}}</textarea>
            </div>
            <div class="row g-2">
                <div class="col-md-10">
                  <label class="form-label" >Capacity</label>
                  <input class="form-label" type="number" name="capacity" required value="{{{old('capacity',$airline->capacity )}}}">
                </div>
                <div class="col-md-10">
                    <label class="form-label" >Price</label>
                    <input class="form-label" type="number" name="price" required value="{{{old('price',$airline->price )}}}">
                  </div>
                <div class="col-md-2">
                    <input class="form-check-input" type="checkbox" name="available" value="1" >
                    <label class="form-check-label" for="gridCheck" >
                        Available
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Modify Flight</button>
            </div>
        </form>
    </div>
</body>

</html>
