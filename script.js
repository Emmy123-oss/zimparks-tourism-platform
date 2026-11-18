function filterParks() {
    let input = document.getElementById('search').value.toLowerCase();
    let items = document.getElementById('parkList').getElementsByTagName('li');
    for (let i = 0; i < items.length; i++) {
        let text = items[i].textContent || items[i].innerText;
        items[i].style.display = text.toLowerCase().indexOf(input) > -1 ? "" : "none";
    }
}