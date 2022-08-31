let stock = 0;
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

select("add").onchange = () => {
    ++stock;
    setHtml('add',stock)
};
