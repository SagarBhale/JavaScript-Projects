// let timer;
//     const inputText = document.getElementById("search-content").addEventListener("keydown",()=>{
//         clearTimeout(timer);
//         timer = setTimeout(()=>{
//         const inputVal = document.getElementById("search-content").value;
//         console.log(inputVal);
//         document.getElementById("display").innerHTML = inputVal;
//         },500);
//     });

let url = "https://dummyjson.com/products";
// console.log(fetch(url));
fetch(url)
    .then((response) =>
        response.json())
    .then((data) => {

        data.products.map((item) => {
            document.write(`<h1>${item.title}</h1>
            <img src="${item.images[0]}"/>
            <p>Price: ${item.price}</p>
            <p>${item.description}</p>
            <p>Stock: ${item.stock}</p>
            `)}
         )
    }
    

)
    .catch((err) => {
        console.error(`please check the URL ${err.message}`)
    }

    );
