
<!--Shopping cart section-->


  <section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--shopping cart items-->
        <div class="row">
            <div class="col-sm-9">
                <!--Empty Cart-->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-12 text-center py-2">
                       <p class="font-baloo font-size-100 text-black-50">Empty Cart</p>
                    </div>
                </div>


                <!--Empty Cart-->
         
                
            
            </div>
            <!--sub total section-->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-14 font-rale text-success py-3"><i class="fas fa-check"></i> Your order is eligible for FREE Delivery. </h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size 20">Subtotal (<?php echo isset ($subTotal) ? count($subTotal) : 0;?>):&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $cart->getSum($subTotal) : 0; ?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                    </div>
                </div>
            </div>
            <!--sub total section-->
        </div>
        <!--shopping cart items-->
    </div>
  </section>
  <!--Shopping cart section-->