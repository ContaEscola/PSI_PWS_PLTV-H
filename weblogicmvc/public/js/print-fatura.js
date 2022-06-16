
function printReceipt() {
    let originalPage = document.body.innerHTML;
    let receipt = document.getElementById('fatura');

    let receiptContainer = receipt.querySelector(".fatura-container__subcontainer");
    let productsList = receipt.querySelector(".fatura__products-list");

    receiptContainer.classList.remove('fatura-container__subcontainer');
    productsList.style.width = "unset";

    let receiptReadyToPrint = receipt.innerHTML;

    document.body.innerHTML = receiptReadyToPrint;
    window.print();
    document.body.innerHTML = originalPage;
}

