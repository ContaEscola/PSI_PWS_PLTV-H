const printBtn = document.querySelector("[data-print-receipt]");

printBtn.addEventListener('click', () => {

    let faturaID = document.querySelector('#fatura-id');
    let receipt = document.querySelector('#fatura');

    let receiptContainer = receipt.querySelector(".fatura-container__subcontainer");
    let productsList = receipt.querySelector(".fatura__products-list");

    receiptContainer.classList.remove('fatura-container__subcontainer');
    productsList.style.width = "unset";

    let receiptReadyToPrint = receipt.innerHTML;

    document.body.innerHTML = receiptReadyToPrint;
    window.print();

    document.location.href = `./?c=Fatura&a=index&id=${faturaID.textContent}`;
})

