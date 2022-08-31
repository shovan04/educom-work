Ajax({
    url: "./php/sell-product.php",
    method: "POST",
    data: {
        st: true,
    },
    success: (respons) => {
        setHtml("item", respons);
    },
    error: (respons) => {
        console.log(respons);
    },
});

btnclk('sub-sell', () => {
let stock = getVal('stock');
    if (stock <= 0) {
        setTxt('msg', 'Stock can never be zero or negative')
    }else if(getVal('item') == 0){
        setTxt('msg', 'Pleace Select an Product')
    } else {
        setTxt('msg', '')
        Ajax({
            url: "./php/sell-product.php",
            method: "POST",
            data: {
                "sell-st": true,
                id: getVal('item'),
                stock : stock,
            },
            success: (respons) => {
                setHtml("msg", '<p class="text-success">'+respons+'</p>');
            },
            error: (respons) => {
                console.log(respons);
            },
        });
    }
})