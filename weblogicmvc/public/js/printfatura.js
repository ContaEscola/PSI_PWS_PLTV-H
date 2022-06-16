function printDiv() {
    var originalContents = document.body.innerHTML;
    var printContents = document.getElementById('printprint');
    var container = printContents.querySelector(".fatura-container__subcontainer");
    var lista = printContents.querySelector(".fatura__products-list");
    container.classList.remove('fatura-container__subcontainer');
    lista.style.width="unset";
    var print = printContents.innerHTML;

    document.body.innerHTML = print;
    window.print();
    document.body.innerHTML = originalContents;
    console.log(container);

}
