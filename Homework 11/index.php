<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Create product</h1>
    <form action="modules/createProduct.php" method="get" style = "display: flex; flex-direction: column; gap: 10px; border: 1px solid black; border-radius: 10px; padding: 10px; width: 300px">
        <input type="text" name="ime" placeholder="Product name">
        <input type="text" name="opis" placeholder="Product description">
        <input type="text " name="cena" placeholder="Product price">
        <input type="text" name="dan_nabavke" placeholder="Date of purchase">
        <input type="text" name="kolicina" placeholder="Quantity">
        <button type="submit">Submit</button>
    </form>

    <h1>Get all products</h1>
    <form action="modules/searchProduct.php" method="get" style = "display: flex; flex-direction: column; gap: 10px; border: 1px solid black; border-radius: 10px; padding: 10px; width: 300px">
        <button type="submit">Submit</button>
    </form>

    <h1>Check Product by Name and Title</h1>
    <form action="modules/searchProductByName.php" method="get" style = "display: flex; flex-direction: column; gap: 10px; border: 1px solid black; border-radius: 10px; padding: 10px; width: 300px">
        <input type="text" name="nameAndDescription" placeholder="Product name or description">
        <button type="submit">Submit</button>
    </form>
    
</body>
</html>