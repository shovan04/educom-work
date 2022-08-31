btnclk("sub", () => {
  let name = getVal("iNmae");
  let price = getVal("iPrice");
  let stock = getVal("iStock");
  if (name == "" || price == "" || stock == "") {
    setHtml("msg", '<p class="text-danger">Please fiel all the fields.');
  } else {
    Ajax({
      url: "./php/add-item.php",
      method: "POST",
      data: {
        st: true,
        name: name,
        price: price,
        stock: stock,
      },
      success:(a)=> {
        setHtml("msg", a);
      },
      error:(a)=> {
        console.log(a);
      },
    });
  }
});
