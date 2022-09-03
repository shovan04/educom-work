let upPric_ , upStoc_;
Ajax({
  url: "./php/updateProduct.php",
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
upPric = () => {
  if (document.getElementById("upPric").checked) {
    upPric_ = true;
    show("p_rice");
  } else {
    upPric_ = false;
    hide("p_rice");
  }
};
upStoc = () => {
  if (document.getElementById("upStoc").checked) {
    upStoc_ = true;
    show("s_tock");
  } else {
    upStoc_ = false;
    hide("s_tock");
  }
};
