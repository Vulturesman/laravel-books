document.addEventListener("DOMContentLoaded", function () {
    const searchInput = document.getElementById("search-input");
    const searchResults = document.getElementById("search-results");

    searchInput.addEventListener("input", function () {
        const search = searchInput.value;

        fetch("/api/books/search?search=" + search)
            .then((response) => response.json())
            .then((data) => {
                searchResults.innerHTML = "";

                data.forEach((book) => {
                    const result = document.createElement("p");
                    const link = document.createElement("a");
                    link.href = "/book/" + book.id;
                    link.textContent = "Detail";
                    link.classList.add("book-link");
                    result.appendChild(link);
                    result.appendChild(
                        document.createTextNode(" " + book.title)
                    ); // Append the text content!!!!! DICK!!
                    searchResults.appendChild(result);
                });
            });
    });
});
