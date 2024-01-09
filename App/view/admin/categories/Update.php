<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="update">

<input type="hidden" value="<?= $category['id'] ?>">

        <div class="form-group">
            <label for="exampleInputEmail1">Categorie</label>
            <input type="text" class="form-control" name="categorie" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Categorie">
            <!-- <input type="text" class="form-control" name="categorie" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Categorie" value="<= $category['name'] ?>"> -->
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Description">
            <!-- <input type="text" class="form-control" name="description" id="exampleInputPassword1" placeholder="Description" value="<= $category['description'] ?>"> -->
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
</body>
</html>