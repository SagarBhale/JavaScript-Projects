const API_KEY = "a1553b9668e545c7949e7f214e3dc06f";
const url = "https://newsapi.org/v2/everything?q="

window.addEventListener('load',()=>fetchNews("India"));
async function fetchNews(query){
    const res = await fetch(`${url}${query}&apiKey=${API_KEY}`);
    const data = await res.json();
    bindData(data.articles);
}

