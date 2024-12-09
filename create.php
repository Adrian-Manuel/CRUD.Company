<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <form class="row g-3 needs-validation m-2 flex-column" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">First name</label>
            <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
            
        </div>
        
        <div class="col-md-4">
            <label for="validationCustomUsername" class="form-label">Address</label>
            <div class="input-group has-validation">
                
                <input type="text" class="form-control" id="validationAddress" aria-describedby="inputGroupPrepend" required>
                
            </div>
        </div>
        
        
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Salary</label>
            <input type="text" class="form-control m-2" id="validationCustom05" required>
        </div>

        <div class="col-12">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
</body>

</html>