let product = {
    data: [
        {
            namaProduk: "Kemeja Flanel",
            kategori: "Kemeja",
            harga: "89.000",
            gambar: "../assets/images/kemeja-flanel.jpg",
        },
        {
            namaProduk: "Kemeja Zora",
            kategori: "Kemeja",
            harga: "59.000",
            gambar: "../assets/images/kemeja-zora.jpg",
        },
        {
            namaProduk: "Basic Sweater",
            kategori: "Sweater",
            harga: "40.000",
            gambar: "../assets/images/basic-sweater.jpg",
        },
        {
            namaProduk: "Kemeja Giovani",
            kategori: "Kemeja",
            harga: "35.000",
            gambar: "../assets/images/kemeja-giovani.jpg",
        },
        {
            namaProduk: "Kaos Sablon",
            kategori: "Kaos",
            harga: "25.000",
            gambar: "../assets/images/Kaos-sablon.jpg",
        },
        {
            namaProduk: "Jaket Bomber",
            kategori: "Jaket",
            harga: "125.000",
            gambar: "../assets/images/jaket-bomber.jpg",
        },
        {
            namaProduk: "Kaos Polos",
            kategori: "Kaos",
            harga: "25.000",
            gambar: "../assets/images/kaos-polos.jpg",
        },
        {
            namaProduk: "Kardigan Rajut",
            kategori: "Jaket",
            harga: "50.000",
            gambar: "../assets/images/kardigan-rajut.jpg",
        },
        {
            namaProduk: "Jaket Fleece",
            kategori: "Jaket",
            harga: "175.000",
            gambar: "../assets/images/jaket-fleece.jpg",
        },
        {
            namaProduk: "Kemeja Ciangi",
            kategori: "Kemeja",
            harga: "65.000",
            gambar: "../assets/images/kemeja-ciangi-sanghai.jpg",
        },
    ],
};

for (let i of product.data) {
    //Create Card
    let card = document.createElement("div");

    //Card harus punya kategori
    card.classList.add("card", i.kategori, "hide");

    //image div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");

    //image tag
    let image = document.createElement("img");
    image.setAttribute("src", i.gambar);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);

    //container
    let container = document.createElement("div");
    container.classList.add("container");
    
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.namaProduk.toUpperCase();
    container.appendChild(name);

    //price
    let harga = document.createElement("h6");
    harga.innerText = "Rp. " + i.harga;
    container.appendChild(harga);

    card.appendChild(container);
    document.getElementById("product").appendChild(card);
}


//parameter tombol
function filterProduct(value) {
    //Button class code
    let buttons = document.querySelectorAll(".button-value");
    buttons.forEach(button => {
        //check if value equals innerText
        if(value.toUpperCase() == button.innerText.toUpperCase()){
            button.classList.add("active");
        } else {
            button.classList.remove("active");
        }
    });

    //select all cards
    let elements = document.querySelectorAll(".card");
    //loop through all cards
    elements.forEach((element) => {
        //display all cards on 'all' button click
        if (value == "Semua") {
            element.classList.remove("hide");
        } else{
            if(element.classList.contains(value)){
                //display element based on category
                element.classList.remove("hide");
            } else {
                //hide other elements
                element.classList.add("hide");
            }

        }

    });
}


//Search Button Click
document.getElementById("search").addEventListener("click", () => {
    //inisialisasi
    let searchInput = document.getElementById("search-input").value;
    let elements = document. querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
    
    //loop through all elements
    elements.forEach((element, index) => {
        //check if text includes the search value
        if(element.innerText.includes(searchInput.toUpperCase())){
            //display matching cards
            cards[index].classList.remove("hide");
        } else {
            //hide others
            cards[index].classList.add("hide");
        }
    })
});

//initially display all product
window.onload = () => {
    filterProduct("Semua");
};