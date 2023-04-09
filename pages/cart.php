<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m"
    style="background-image: url(images/heading-happywhey-03.png);">
    <h2 class="l-text2 t-center">
        Cart
    </h2>
</section>

<!-- Cart -->
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <table class="table-shopping-cart" id="cart-list">

                </table>
            </div>
        </div>
        <!-- Total -->
        <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
                Cart Totals
            </h5>

            <div class="flex-w flex-sb-m p-b-12">
                <span class="s-text18 w-size19 w-full-sm">
                    Subtotal:
                </span>

                <span class="m-text21 w-size20 w-full-sm" id="total-price-buy"></span>
            </div>

            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm">
                    Shipping:
                </span>

                <div class="w-size20 w-full-sm">
                    <p class="s-text8 p-b-23">
                        เนื่องจากเว็ปไซต์กำลังพัฒนา ทำให้มีแค่การชำระเงินปลายทางเท่านั้น
                    </p>

                    <span class="s-text19">
                        Calculate Shipping
                    </span>

                    <div class="rs2-select2 rs3-select2 rs4-select2 bo4 of-hidden w-size21 m-t-8 m-b-12">
                        <select class="selection-2" name="country">

                            <option>THB</option>
                        </select>
                    </div>

                    <div class="size13 bo4 m-b-12">
                        <input class="sizefull s-text7 p-l-15 p-r-15" type="text" id="detail-buy" name="state"
                            placeholder="ชื่อ/ที่อยู่ เบอร์โทร">
                    </div>
                </div>
            </div>

            <div class="flex-w flex-sb-m p-t-26 p-b-30">
                <span class="m-text22 w-size19 w-full-sm">
                    Total:
                </span>

                <span class="m-text21 w-size20 w-full-sm" id="total-price-buy-final">
                </span>
            </div>

            <div class="size15 trans-0-4">
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="payment()">
                    BUY
                </button>
            </div>
        </div>
    </div>
</section>