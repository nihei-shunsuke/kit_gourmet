const range = ["~300m","~500m","~1000m","~2000m","~3000m"];
const sort = ["店名かな順","ジャンルコード順","小エリア順","おすすめ順"];

window.addEventListener('DOMContentLoaded', function() {
    let search_range = document.getElementById('search_range');
    for(var i=0; i<=4; i++){
        let option = document.createElement("option");
        option.text = range[i];
        option.value = i + 1 ;
        search_range.appendChild(option);
    }
    let search_sort = document.getElementById('search_sort');
    for(var i=0; i<=3; i++){
        let option = document.createElement("option");
        option.text = sort[i];
        option.value = i + 1 ;
        search_sort.appendChild(option);
    }
})

function search() {
    const junre = document.getElementById('junre').value;
    const search_range = document.getElementById('search_range').value;
    const result_count = document.getElementById('result_count').value;
    const result = document.getElementById('result');
    for (let i = 0; i < result_count; i++) {
        let shop = document.createElement('p');
        shop.textContent = "ジャンルは" + junre + "です。" + "検索範囲は" + range[search_range] + "です。";
        result.appendChild(shop);
    }
}
