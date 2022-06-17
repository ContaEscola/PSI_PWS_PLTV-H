const searchBar = document.querySelector('[data-searchbar]');
const searchResults = document.querySelector('[data-search-results-container]');
const searchResultsSubContainer = searchResults.querySelector('.search__results-subcontainer');

let isWorking = false;


searchBar.addEventListener('keyup', () => {
    if (!isWorking) {


        resetSearchResults();

        let searchInput = searchBar.value;
        let length = searchInput.length;

        if (length > 0)
            searchResults.setAttribute('data-visible', 'true');
        else
            searchResults.setAttribute('data-visible', 'false');

        console.log(length);

        const xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $stringFormatada = this.responseText;

                if ($stringFormatada != "") {
                    $stringDesformatada = $stringFormatada.split(";");

                    $stringDesformatada.forEach(($string) => {
                        const li = document.createElement("li");
                        const node = document.createTextNode($string);

                        li.classList.add("search__single-result");
                        li.appendChild(node);

                        li.addEventListener("click", () => {
                            searchBar.value = li.textContent;
                            document.querySelector('#chooseModal').querySelector('form').action += searchBar.value;
                            resetSearchResults();
                        })

                        searchResultsSubContainer.appendChild(li);
                    });

                } else {

                    const li = document.createElement("li");
                    const node = document.createTextNode('Nenhum resultado!');

                    li.classList.add("search__single-result");
                    li.setAttribute('data-type', 'null');
                    li.appendChild(node);

                    searchResultsSubContainer.appendChild(li);
                }

                isWorking = false;

            }
        }

        isWorking = true;
        xmlhttp.open("GET", "http://localhost/PSI_PWS_PLTV-H/weblogicmvc/app/models/ajax/GetAllFuncionarios.php?v=" + searchInput, true);
        xmlhttp.send();
    }
});


function resetSearchResults() {
    $allItems = searchResultsSubContainer.querySelectorAll('.search__single-result');
    if ($allItems != null) {
        $allItems.forEach(($item) => {
            $item.remove();
        })
    }
}