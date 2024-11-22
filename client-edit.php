<!DOCTYPE html>
<html lang="en">
<!-- Faire la page avec les infos du formulaire inclus dans un GET  -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Client</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <h2>Edit Client</h2>
        <form action="client-update.php" method="post">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <label>Name
                <input type="text" name="name" value="<?= $name; ?>">
            </label>
            <label>Address
                <input type="text" name="address" value="<?= $address; ?>">
            </label>
            <label>Phone
                <input type="text" name="phone" value="<?= $phone; ?>">
            </label>
            <label>Zip Code
                <input type="text" name="zip_code" value="<?= $zip_code; ?>">
            </label>
            <label>Email
                <input type="email" name="email" value="<?= $email; ?>">
            </label>
            <input type="submit" class="btn" value="Update">
        </form>
    </div>
</body>

</html>