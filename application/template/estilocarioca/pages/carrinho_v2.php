<?php head(); ?>

<section class="section cart">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="cart-list">
                    <table class="tb-cart">
                        <thead>
                            <tr>
                                <th class="item">Item</th>
                                <th class="price">Preço</th>
                                <th class="qty">Quantidade</th>
                                <th class="total">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr class="item_" id="item-ID DO PRODUTO">
                                <td class="item">
                                    <div class="relative">

                                        <a href="LINK DO PRODUTO" class="figure"><span class="figure-img"><em class="shadow"></em><img src="//static-ec4.thefancy.com/_static_gen/_ui/images/common/blank.325472601571.gif" style="background-image:url('//placehold.it/310x310');"></span> <b class="figcaption">Reveal Watch by Projects Watches</b></a>
                                        <span class="detail">

                                            <em class="option">
                                                <small>Opção:</small>
                                                <select class="embo-select option_" data-id="">
                                                    <option selected>P - Pequeno</option>
                                                    <option>M - Médio</option>
                                                    <option>G - Grande</option>
                                                    <option>GG - Extra-Grande</option>
                                                    <option>GGG - Extra-Extra-Grande</option>
                                                </select>
                                            </em>


                                            <em class="arrival hidden"><small>Chegada Estimada</small> <span></span></em>

                                        </span>

                                        <span class="notify sameday-delivery-tomorrow hidden">
                                            Today's deadline has passed.
                                        </span>
                                        <span class="notify sameday-delivery-not-today hidden">
                                            Delivery is not available today.
                                        </span>

                                        <span class="unavailable hidden"></span>
                                        <dl class="notification-cart hidden">
                                            <dt>The selected option is currently unavailable.</dt>
                                            <dd>
                                                <p>To proceed. please change the quantity, options, or remove this item from your cart. If you'd like, we can notify you when the selected option is available again.</p>
                                                <p>
                                                    <input type="checkbox" id="notify-397520-904358" data-siid="397520" data-sio="904358" class="notify-available_">
                                                    <label for="notify-397520-904358">Notify me when available</label>
                                                </p>
                                            </dd>
                                        </dl>

                                        <span class="function">
                                            <a href="#" class="remove remove-item_" data-id="ID DO PRODUTO">Remover</a>
                                        </span>
                                    </div>
                                </td>
                                <td class="price ">R$ 120,00</td>
                                <td class="qty">
                                    <select class="embo-select" data-id="2387704" price="120,00">
                                        <option value="1" selected="">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </td>
                                <td class="total"><b>R$ 120,00</b></td>
                            </tr>
                            <tr><td colspan="4" class="space"></td></tr>

                        </tbody>
                    </table>
                    <div class="gift-option">
                        <div class="relative">
                            <span class="sprite sprite-gift"></span>
                            <b>Gift Order</b>
                            <span class="un">Make this order a gift and add a gift message</span>
                            <span class="on">Order marked as gift</span>
                            <label class="switch" for="is_gift_2387704_18543473"><span class="hidden">Presente</span></label>
                            <input type="checkbox" id="is_gift_2387704_18543473" name="is_gift" data-id="cart-gift-2387704-18543473" value="true" class="hide">
                            <textarea class="text placeholder" id="gift_message_2387704_18543473" name="gift_message" placeholder="Include a gift message"></textarea>        
                        </div>
                    </div>
                    <div class="delivery-option" style="display:none;">
                        <h4><span class="sprite sprite-delivery"></span><b>Same Day Delivery</b> <small>Special delivery instructions</small></h4>
                        <span class="tooltip help"><i class="icon"></i><small>Please detail where the package should be left (i.e. doorman, inside door, behind front gate)<br><br>What's the best 2 hour window for you? We'll do our best to accomodate this with our terms.<b></b></small> Ajuda</span>
                        <textarea id="sameday_message_2387704_18543473" name="sameday_message" placeholder="Give us special instructions." class="text placeholder"></textarea>
                        <p class="comment">Same Day Delivery <a href="#" onclick="$.dialog('term_sdd').open();
                                return false;">Termos de Serviço</a>. <a href="#" onclick="$.dialog('term_sdd').open();
                                        return false;"><span class="tooltip"><i class="icon"></i></span></a></p>
                    </div>
                    <div class="note">
                        <label>Optional note to <b>ProjectsWatches</b></label>
                        <textarea name="note" data-id="cart-note-2387704-18543473" placeholder="Write a personalized note to seller" class="text placeholder" maxlength="1000"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</section>

<?php footer(); ?>