function calculateTotal() {
            let selectedItem = products.options[products.selectedIndex].getAttribute("data-price"); 
            let quantity = document.getElementById("quantity").value;

            let total = Number(selectedItem) * Number(quantity);

            document.getElementById("total").value = total.toFixed(2);
        }