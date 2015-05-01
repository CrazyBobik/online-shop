<div class="container" id="body">
    <div class="row">
        <div class="col-sm-12">
            <div class="media">
                <div class="media-left media-top">
                    <img class="media-object" src="{url}">
                </div>
                <div class="media-body">
                    <h3 class="media-heading media-left" id="title">{NameGoods}</h3><br>
                    <h4 class="media-heading media-left" id="title">
                        {PriceGoods} {price} {PriceGoodsVal}</h4><br>
                    <form class="media-left" method="post" action="/pages/goods/buyGoods.php">
                        <input type="hidden" value="{id}" name="id">
                        <input class="btn btn-primary media-left" value="{BtnBuy}"
                                type="submit">
                    </form><br>
                    <p align="left" id="text">{text}</p>
                </div>
            </div>
        </div>
    </div>
</div>