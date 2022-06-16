function printDiv() {
    const originalContents = document.body.innerHTML;
    const printContents = document.getElementById('printFatura');
    const container = printContents.querySelector(".fatura-container__subcontainer");
    const lista = printContents.querySelector(".fatura__products-list");
    container.classList.remove('fatura-container__subcontainer');
    lista.style.width = "unset";
    const print = printContents.innerHTML;

    document.body.innerHTML = print;
    window.print();
    document.body.innerHTML = originalContents;
}
