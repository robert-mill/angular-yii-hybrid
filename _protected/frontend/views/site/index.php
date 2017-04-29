<?php

/* @var $this yii\web\View */
$this->title = Yii::t('app', Yii::$app->name);
?>
<div class="site-index">

    <div class="jumbotron row">
        <div class="productbox col-lg-12 col-sm-6 col-xs-12">





            <div class="productBox col-lg-3 col-md-3 col-sm-4 col-xs-6" ng-repeat="item in message.data  | unique: 'category'  track by $index " >
                <div class="arc-top"></div>
                <div class="portfolio-item col-lg-12 col-xs-12">
                    <div class="productCat col-xs-12">{{ item.category }}</div>
                    <div class="productTitle col-xs-12">{{ item.title }}</div>
                    <div class="productImage col-xs-12"><img src="./../uploaded_imgs/{{ item.image }}"/></div>
                    <div class="productDescription col-xs-12">{{ item.description }}</div>
                    <div class="productPrice col-lg-6 col-md-6 col-sm-6 col-xs-6">{{ item.price }}</div>
                    <div class="productDiscountprice col-lg-6 col-md-6 col-sm-6 col-xs-6" ng-if="item.discountprice">{{ item.discountprice }}</div>
                    <ngcart-addtocart class="btn btn-success" style="width:100%; color: #fff;" id="{{ item.id }}" title="{{ item.title }}" price="{{ item.price }}" quantity="1" quantity-max="30" data="item">Add to cart</ngcart-addtocart>

                </div>
                <div class="arc-bottom"></div>
            </div>


        </div>

    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-3">
                <h3>Yii documentation</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii forum</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Yii extensions</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
            <div class="col-lg-3">
                <h3>Freetuts.org</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.freetuts.org/">Freetuts.org &raquo;</a></p>
            </div>
        </div>

    </div>
</div>


