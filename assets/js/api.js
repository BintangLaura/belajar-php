const fetchResolver = (response) => response.json();

fetch('https://fakestoreapi.com/products')
    //menangkap promise
    .then(fetchResolver)

    //menampilkan hasil response
    .then((data) => {
        console.log(data);
        const productList = data;

        const bodyProduct = document.getElementById('product');

        var dataBody = "";
        for (var i = 0; i < productList.length; i++) {
            dataBody += `
            <div class="card">
                <img src="${productList[i].image}">
                <div class="container">
                    <h5 class="product-name">${productList[i].title.toUpperCase()}</h5>
                    <h6> $ ${productList[i].price}</h6>
                </div>
            </div>
            `;

        }

        bodyProduct.innerHTML = dataBody;
    })

    //menampilkan Error
    .catch((error) => {
        console.log(error);
    });

//Search Button Click
document.getElementById("search").addEventListener("click", () => {
    //inisialisasi
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");

    //loop through all elements
    elements.forEach((element, index) => {
        //check if text includes the search value
        if (element.innerText.includes(searchInput.toUpperCase())) {
            //display matching cards
            cards[index].classList.remove("hide");
        } else {
            //hide others
            cards[index].classList.add("hide");
        }
    })
});


