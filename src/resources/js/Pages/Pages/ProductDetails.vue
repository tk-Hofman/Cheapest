<template>
    <button class="details-delete-button">削除ボタン</button>
    <div class="product-details-container">
        <div class="product-details">
            <!-- 商品名 -->
            <div class="detail-product-name details-border">商品名</div>
            <!-- Amazon価格・楽天価格 -->
            <div class="prices">
                <div>
                    <p>Amazon価格</p>
                    <div class="details-border"></div>
                </div>
                <div>
                    <p>楽天価格</p>
                    <div class=" details-border"></div>
                </div>
            </div>
            <!-- JANコード・更新日・登録日 -->
            <div>
                <p>JAN CODE</p>
                <div class="details-border"></div>
            </div>
            <div class="prices">
                <div>
                    <p>更新日</p>
                    <div class="details-border"></div>
                </div>
                <div>
                    <p>登録日</p>
                    <div class=" details-border"></div>
                </div>
            </div>
        </div>
        <div>
            <div class="details-border">
                現在の最安値<br>
                ￥80000円
            </div>
        </div>
    </div>
    

  </template>
  
  <script>
  export default {
    name: "ProductDetails",
  };
  </script>
  
<style scoped>
    .details-border {
        border: 2px solid black; /* 黒色のボーダーを追加 */
        padding: 10px; /* 内側の余白を追加 */
        border-radius: 5px; /* 角を少し丸める（オプション） */
    }
    .product-details-container {
        display: flex;
        margin-top: 80px;
        margin-left: 10%;
        width: 100%;
        height: 100%;
    }
    .product-details {
        width: 50%;
    }
    .details-delete-button{
        background-color: red;
        color: white;
        height: 4%;
        width: 5%;
        margin-top: 10px;
        position: absolute; /* 要素を右寄せするために絶対配置 */
        right: 10px; /* 右から10pxの位置に配置 */
        top: 10px; /* 上から10pxの位置に配置 */
    }
    .detail-product-name{
        width: 35%;
        height: 8%;
    }
    .prices{
        display: flex;
        width: 70%;
    }
</style>
  