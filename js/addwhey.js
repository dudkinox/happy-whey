var setCartName = JSON.parse(window.localStorage.getItem("cartName")) ?? [];
var setCartPrice = JSON.parse(window.localStorage.getItem("cartPrice")) ?? [];
var orderNumber = (document.getElementById("cart-order").innerHTML =
  setCartName.length ?? 0);

var totalBuy = 0;

function addToCart(whey, price) {
  setCartName.push(whey);
  setCartPrice.push(price);
  window.localStorage.setItem("cartName", JSON.stringify(setCartName));
  window.localStorage.setItem("cartPrice", JSON.stringify(setCartPrice));
  document.getElementById("cart-order").innerHTML = setCartPrice.length;

  document.getElementById("my-cart").innerHTML += `
                                        <div class="col-9">
                                            <div class="header-cart-item-txt">
                                                <a href="#" class="header-cart-item-name">
                                                    ${whey}
                                                </a>
                                                <span class="header-cart-item-info">
                                                    1 x ${price}
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <button class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>`;
}

document.getElementById("cart-list").innerHTML = `
<tr class="table-head">
    <th class="column-1"></th>
    <th class="column-2">Product</th>
    <th class="column-3">Price</th>
    <th class="column-4 p-l-70">Quantity</th>
    <th class="column-5">Total</th>
    <th class="column-5">delete</th>
</tr>`;

const loopName = setCartName.filter((value, index, self) => {
  return self.indexOf(value) === index;
});
const loopPrice = setCartPrice.filter((value, index, self) => {
  return self.indexOf(value) === index;
});

for (var i = 0; i < loopName.length; i++) {
  const order = setCartName.filter((value) => value === loopName[i]).length;
  var sum = order * Number(parseInt(loopPrice[i].replace(/,/g, "")));
  document.getElementById("cart-list").innerHTML += `
    <tr class="table-row">
        <td class="column-1">
            <div class="cart-img-product b-rad-4 o-f-hidden">
                <img src="images/item-05.jpg" alt="IMG-PRODUCT">
            </div>
        </td>
        <td class="column-2">${loopName[i]}</td>
        <td class="column-3">฿ ${loopPrice[i]}</td>
        <td class="column-4">
            <div class="flex-w bo5 of-hidden w-size17" onclick="sumPrice('${loopName[i]}', '${loopPrice[i]}')">
                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                </button>

                <input id="${loopName[i]}" class="size8 m-text18 t-center num-product" type="number" name="num-product2" value="${order}">

                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                </button>
            </div>
        </td>
        <td class="column-5" id="sum-${loopName[i]}">${sum}</td>
        <td><button class="btn btn-danger" onclick="removeCart('${loopName[i]}', '${loopPrice[i]}')">X</button></td>
    </tr>`;

  totalBuy += order * Number(parseInt(loopPrice[i].replace(/,/g, "")));
}

function removeCart(name, price) {
  setCartName = setCartName.filter((value) => value !== name);
  setCartPrice = setCartPrice.filter((value) => value !== price);
  window.localStorage.setItem("cartName", JSON.stringify(setCartName));
  window.localStorage.setItem("cartPrice", JSON.stringify(setCartPrice));
  location.reload();
}

function sumPrice(id, price) {
  const value = document.getElementById(id).value;
  const sum = value * Number(parseInt(price.replace(/,/g, "")));
  document.getElementById(`sum-${id}`).innerHTML = sum;
  document.getElementById("total-price-buy").innerHTML = totalBuy;
  document.getElementById("total-price-buy-final").innerHTML = totalBuy;
}
document.getElementById("total-price-buy").innerHTML = totalBuy;
document.getElementById("total-price-buy-final").innerHTML = totalBuy;

function payment() {
  const documentDetail = document.getElementById("detail-buy").value;
  window.location.href =
    "?page=payment&total=" +
    JSON.stringify(loopName).replace(/"/g, "'") +
    " รวม " +
    totalBuy +
    "&detail=" +
    documentDetail;
  window.localStorage.clear();
}
