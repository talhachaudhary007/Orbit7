<?php include "header.php"?>

<div class="container mt-5" style="padding:50px 50px;">
    <h2 class="text-center">Product Details</h2>
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Product Name</td>
                <td>$10.00</td>
                <td id="productQuantity">0</td>
            </tr>
        </tbody>
    </table>
    <div class="text-center mt-3">
        <button class="btn btn-secondary" onclick="goBack()">Go Back</button>
        <button class="btn btn-primary">Proceed to Checkout</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const urlParams = new URLSearchParams(window.location.search);
        const quantity = urlParams.get('quantity');
        document.getElementById('productQuantity').textContent = quantity;
    });

    function goBack() {
        window.history.back();
    }
</script>
<?php include "footer.php"?>
