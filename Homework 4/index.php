<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form action="calculations.php" method="GET" style="display:flex;flex-direction:column; gap:10px; width: 300px; ">
        <input  type="number" name="price" placeholder="Enter the price" required> 
        <select name="choice">  
            <option value="food">Food</option> 
            <option value="pc">PC</option> 
        </select>
        <div>
            <input type="checkbox" name="priceVat" id="priceVat">
            <label for="priceVat">Calculate with VAT</label> 
        </div>
        <button type="submit">Calculations</button>
    </form>
</body>
</html>