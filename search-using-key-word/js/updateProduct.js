let upPric_,
  upStoc_ = false;
let item = 0;
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
btnclk("item", () => {
  item = getVal("item");
  if (item == 0) {
    select('up_p_s').setAttribute('disabled','disabled');
    setTxt("msg", "Pleace select an Product");
  } else {
    select('up_p_s').setAttribute('disabled','disabled');
    setTxt("msg", '');
  }
  console.log(item);
});
btnclk("up_p_s", () => {
  if (upPric_ === true || upStoc_ === true || item != 0) {
    if (upPric_ === true) {
      let price = getVal("up_price");
      if (price == "") {
        setTxt("msg", "Pleace enter price");
      } else {
        send_data(item, "price", price);
      }
      // console.log(data)
    }
    if (upStoc_ === true) {
      let price = getVal("up_stock");
      if (price == "") {
        setTxt("msg", "Pleace enter stock");
      } else {
        send_data(item, "stock", price);
      }
    }
  }
  else if(upPric_ != true || upStoc_ != true || item == 0){
    setTxt("msg", "Pleace select an update value");
    console.log(false);
  }
  console.log('clicked')
});

send_data = (item_, key_, data_) => {
  //   console.log(data_);
  Ajax({
    url: "./php/updateProduct.php",
    method: "POST",
    data: {
      up_data: true,
      id: item_,
      key: key_,
      data: data_,
    },
    success: (respons) => {
        setHtml("msg", respons);
      console.log(respons);
    },
    error: (respons) => {
      console.log(respons);
    },
  });
};
