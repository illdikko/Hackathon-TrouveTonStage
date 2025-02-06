const searchElem = document.getElementById("search-string");
searchElem.addEventListener("input", () => {
    let input = searchElem.value.toLowerCase().replace("/[-,;:!'\"\\]/", "");

    const items = document.querySelectorAll("div.card");

    items.forEach(function (item) {
        title = item.querySelector(".card-title").innerText.toLowerCase();
        text = item.querySelector(".card-text").innerText.toLowerCase();

        !title.includes(input) && !text.includes(input)
            ? (item.style.display = "none")
            : (item.style.display = "block");
    });
});
