Ajax({
  url: "./php/server.php",
  method: "POST",
  data: { first: !0 },
  success(a) {
    setHtml("tbl", a);
  },
  error(a) {
    console.log(a);
  },
})
  btnclk("search", () => {
    let a = getVal("searchKey");
    "" == a
      ? (setHtml("tbl", ""), setTxt("err", "Please enter Product Name"))
      : (setHtml("err", ""),
        Ajax({
          url: "./php/server.php",
          method: "POST",
          data: { st: !0, search: a },
          success(a) {
            setHtml("tbl", a);
          },
          error(a) {
            console.log(a);
          },
        }));
  });
