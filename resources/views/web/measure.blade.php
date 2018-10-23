@extends('web.layouts.e_master')

@section('title', 'Taj Tailors : Book Appointment')
<style type="text/css">
    .masurment_section {
        display: inline-block;
        width: 100%;
        padding-top: 70px;
        background: #f5f5f5;
        text-align: center;
    }

    .tabs_panel {
        margin-bottom: 20px;
    }

    .panel_bg {
        background: #f5f5f5;
    }

    .tabs-body {
        background: #ffffff;
        padding: 15px 10px 2px 10px;
        border: solid thin #e1e1e1;
        border-top: none;
    }

    .masurment_img_box {
        display: inline-block;
        width: 100%;
    }

    .imgtxt_collection {
        display: inline-block;
        width: 49%;
        float: left;
        margin-bottom: 20px;
    }

    .imgtxt_collection:nth-of-type(odd) {
        margin-right: 2%;
    }

    .imgtxt_collection h5 {
        font-size: 14px;
        background: #f5f5f5;
        padding: 7px 5px;
        margin: 0px;
        text-transform: uppercase;
        text-shadow: 1px 1px #dadada;
    }

    .img_box {
        display: inline-block;
        width: 125px;
        float: left;
        padding-top: 2px;
        border: solid thin #e1e1e1;
        border-radius: 4px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        margin-right: 10px;
        margin-top: 15px;
        cursor: pointer;
    }

    .img_box img {
        width: 100%;
        padding: 2px 5px;
    }

    .img_caption {
        width: 100%;
        border-top: solid thin #e1e1e1;
        margin-top: 3px;
        background: #f5f5f5;
        padding: 3px 0px;
        text-shadow: 1px 1px #bdbdbd;
        transition: .5s all;
    }

    .img_box:hover .img_caption {
        background: #005a3c;
        color: #ffffff;
    }

    .selected_style .img_caption {
        background: #005a3c;
        color: #ffffff;
    }

    .selected_style {
        border: solid thin #005a3c;
    }

    .pants_block .img_box img {
        height: 100px !important;
        width: auto;
    }

    .suit_block .img_box img {
        height: 100px !important;
        width: auto;
    }

    .imgtxt_collection .img_box img {
        height: 100px !important;
        width: auto;
    }

    .nav > li > a {
        padding: 5px 15px !important;
        font-size: 14px;
        text-transform: uppercase;
        color: #666666;
        text-shadow: 1px 1px #dadada;
        height: 40px;
    }

    .nav_img {
        width: 25px;
        height: 30px;
        margin-right: 5px;
        font-size: 20px;
        color: #666666;
    }

    .first_appointment {
        text-align: center;
    }

    .first_appointment h4 {
        color: #4CAF50;
        font-size: 24px;
    }

    .first_appointment img {
        height: 125px !important;
        width: auto !important;
    }

    .first_appointment .img_box {
        float: initial !important;
    }

    .no_review {
        padding: 50px;
        background: #fbfbfb;
        display: none;
    }

    .top_namebtn {
        display: inline-block;
        width: 100%;
        text-align: left;
        margin-bottom: 10px;
    }

    .first_name {
        display: inline-block;
        width: auto;
        font-size: 20px;
        text-shadow: 1px 1px #f3f3f3;
    }
</style>
@section('head')
    <section class="masurment_section">
        <div class="container-fluid">
            <div class="tabs_panel">
                <div class="panel_bg">
                    <ul class="nav nav-tabs appoint_tab">
                        <li id="nav_shirt" class="active"><a href="#shirt" data-toggle="tab" aria-expanded="true">
                                <img src="images/coustom_images/nav-shirt.png" class="nav_img"/>
                                Shirt</a></li>
                        <li id="nav_pants" class=""><a href="#pant" data-toggle="tab" aria-expanded="false"> <img
                                        src="images/coustom_images/Pants/pant-pleats-single-(one).jpg" class="nav_img"/>
                                Pants</a></li>
                        <li id="nav_suit" class=""><a href="#suit" data-toggle="tab" aria-expanded="false"><img
                                        src="images/coustom_images/Suit/jacket-type-two-button.jpg" class="nav_img"/>Suit</a>
                        </li>
                        <li id="nav_review" class=""><a href="#review" onclick="Show_Review();" data-toggle="tab"
                                                        aria-expanded="false">
                                <i class="mdi mdi-checkbox-multiple-marked-outline nav_img"></i>
                                Review</a>
                        </li>
                        <li id="nav_appoint" class=""><a href="#appointment" data-toggle="tab" aria-expanded="false"><i
                                        class="mdi mdi-calendar-multiple-check nav_img"> </i>Appointment</a></li>
                    </ul>
                </div>
                <div class="tabs-body ">
                    <div class="tab-content">
                        <div class="tab-pane fade shirt_block active in" id="shirt">
                            <div class="top_namebtn">
                                <div class="first_name">Hello Pinku Kesharwani</div>
                                <div class="pull-right">
                                    <a type="button" onclick="SwitchTable('PANTS')"
                                       class="btn btn-success btn-sm ">
                                        <i class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                    </a>
                                </div>
                            </div>
                            <div class="masurment_img_box">
                                <div class="imgtxt_collection">
                                    <h5>BODY SHAPE</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_body_size_fit.png">
                                        <div class="img_caption">Fitted</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_body_size_common.png">
                                        <div class="img_caption">Classic</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>SHIRT FRONT</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_frount_planket.png">
                                        <div class="img_caption">Planket</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_frount_noplanket.png">
                                        <div class="img_caption">No Planket</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_frount_fly.png">
                                        <div class="img_caption">Fly Frount</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>CUFF STYLE</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_cuff_style_single_round.png">
                                        <div class="img_caption">Round</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_cuff_style_single_square.png">
                                        <div class="img_caption">Square</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_cuff_style_single_mitred.png">
                                        <div class="img_caption">Mitred</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_cuff_style_single_round_2button.png">
                                        <div class="img_caption">2 Button Round</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_cuff_style_single_square_2button.png">
                                        <div class="img_caption">2 Button Square</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_cuff_style_single_mitred_2button.png">
                                        <div class="img_caption">2 Button Mitred</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>COLLAR STYLE </h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_full_collar.png">
                                        <div class="img_caption">Small Collar</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_collar_style_cutaway.png">
                                        <div class="img_caption">Cutaway</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_collar_style_2button_stand.png">
                                        <div class="img_caption">Double Button</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_collar_style_classic.png">
                                        <div class="img_caption">Classic</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_collar_style_button_down.png">
                                        <div class="img_caption">Button Down</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_collar_style_pointed.png">
                                        <div class="img_caption">Pointed</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>POCKETS </h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_pockets_no_pockets.png">
                                        <div class="img_caption">No Pockets</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_pockets_one_pointed_left.png">
                                        <div class="img_caption">Left Pointed</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_pockets_one_pointed_right.png">
                                        <div class="img_caption">Right Pointed</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_pockets_one_rounded_left.png">
                                        <div class="img_caption">Left Rounded</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_pockets_one_rounded_right.png">
                                        <div class="img_caption">Right Rounded</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>COLLAR TRIM OPTIONS </h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_full_collar.png">
                                        <div class="img_caption">Full Collar</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_full_top_collar.png">
                                        <div class="img_caption">Top Collar</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_outer_top_collar.png">
                                        <div class="img_caption">Outer Collar</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_inside_collar_stand.png">
                                        <div class="img_caption">Inside Collar</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_under_collar.png">
                                        <div class="img_caption">Under Collar</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_inside_placket_1.png">
                                        <div class="img_caption">Inside Placket</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>CUFF TRIM</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_full_cuff.png">
                                        <div class="img_caption">Full Cuff</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/shirt/shirt_contrast_full_cuff.png">
                                        <div class="img_caption">Inner Cuff</div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit_btnbox row">
                                <a href="#pant" type="button" onclick="SwitchTable('PANTS')"
                                   class="btn btn-success btn-sm "
                                ><i class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                </a>
                            </div>
                        </div>
                        <div class="tab-pane fade pants_block" id="pant">
                            <div class="top_namebtn">
                                <div class="first_name">Hello Pinku Kesharwani</div>
                                <div class="pull-right">
                                    <a type="button" class="btn btn-primary btn-sm center_btnmargin"
                                       onclick="SwitchTable('SHIRT')"><i
                                                class="mdi mdi-arrow-left basic_icon_margin"></i>Prev
                                    </a>
                                    <a type="button" onclick="SwitchTable('SUIT')"
                                       class="btn btn-success btn-sm ">
                                        <i class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                    </a>
                                </div>
                            </div>
                            <div class="masurment_img_box">
                                <div class="imgtxt_collection">
                                    <h5>Pant Pleats</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-pleats-none-(flat-front).jpg">
                                        <div class="img_caption">Flat Front</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-pleats-single-(one).jpg">
                                        <div class="img_caption">Single Pleats</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-pleats-double-(two).jpg">
                                        <div class="img_caption">Double Pleats</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Bottom Cuffs</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-cuffs-no.jpg">
                                        <div class="img_caption">No</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-cuffs-yes.jpg">
                                        <div class="img_caption">Yes</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Pant Back Pockets</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-back-pockets-one-on-right.jpg">
                                        <div class="img_caption">Pocket Right</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-back-pockets-one-on-left.jpg">
                                        <div class="img_caption">Pocket Left</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-back-pockets-two.jpg">
                                        <div class="img_caption">Two Pocket</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-back-pockets-none.jpg">
                                        <div class="img_caption">None</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Belt Loops</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-belt-loops-yes.jpg">
                                        <div class="img_caption">Yes</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-belt-loops-no.Jpg">
                                        <div class="img_caption">No</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Pants/pant-belt-loops-no-with-side-tabs.jpg">
                                        <div class="img_caption">No with side tabs</div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit_btnbox row">
                                <button type="button" class="btn btn-primary btn-sm center_btnmargin"
                                        onclick="SwitchTable('SHIRT')"><i
                                            class="mdi mdi-arrow-left basic_icon_margin"></i>Prev
                                </button>
                                <button type="button" class="btn btn-success btn-sm "
                                        onclick="SwitchTable('SUIT')"><i
                                            class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                </button>


                            </div>
                        </div>
                        <div class="tab-pane fade suit_block" id="suit">
                            <div class="top_namebtn">
                                <div class="first_name">Hello Pinku Kesharwani</div>
                                <div class="pull-right">
                                    <a type="button" class="btn btn-primary btn-sm center_btnmargin"
                                       onclick="SwitchTable('PANTS')"><i
                                                class="mdi mdi-arrow-left basic_icon_margin"></i>Prev
                                    </a>
                                    <a type="button" onclick="SwitchTable('REVIEW')"
                                       class="btn btn-success btn-sm ">
                                        <i class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                    </a>
                                </div>
                            </div>
                            <div class="masurment_img_box">
                                <div class="imgtxt_collection">
                                    <h5>Jacket Type</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-type-one-button.jpg">
                                        <div class="img_caption">One Button</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-type-two-button.jpg">
                                        <div class="img_caption">Two Button</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-type-three-button.jpg">
                                        <div class="img_caption">Three Button</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-type-double-breasted.jpg">
                                        <div class="img_caption">Double-Breasted</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Lapel Type</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/lapel-type-notch.jpg">
                                        <div class="img_caption">Notch</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/lapel-type-slim-notch.jpg">
                                        <div class="img_caption">Slim Notch</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/lapel-type-peak.jpg">
                                        <div class="img_caption">Peck</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/lapel-type-slim-peak.jpg">
                                        <div class="img_caption">Slim Peck</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Vents</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/vents-single.jpg">
                                        <div class="img_caption">Single (center)</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/vents-double.jpg">
                                        <div class="img_caption">Double (side)</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Vest (Add Vest)</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/add-vest-yes.jpg">
                                        <div class="img_caption">Yes</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/add-vest-no.jpg">
                                        <div class="img_caption">No</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Pick Stitching</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/pick-stitching-yes.jpg">
                                        <div class="img_caption">Yes</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/pick-stitching-none.jpg">
                                        <div class="img_caption">No</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Accent Stitching - Boutonniere</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/accent-stitching-match-inner-lining.jpg">
                                        <div class="img_caption">Match inner layer</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/accent-stitching-boutonniere-none.jpg">
                                        <div class="img_caption">None</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Accent Stitching - Last Sleeve Buttonhole</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/accent-stitching-inner-lining.jpg">
                                        <div class="img_caption">Match inner lining</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/accent-stitching-last-sleeve-buttonhole-none.jpg">
                                        <div class="img_caption">None</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Suspender Buttons</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/suspender-buttons-yes.jpg">
                                        <div class="img_caption">Yes</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/suspender-buttons-no.jpg">
                                        <div class="img_caption">No</div>
                                    </div>
                                </div>
                                <div class="imgtxt_collection">
                                    <h5>Jacket Pockets</h5>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-pockets-slanted-flapped.jpg">
                                        <div class="img_caption">Slanted Flapped</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-pockets-straight-flapped.jpg">
                                        <div class="img_caption">Straight Flapped</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-pockets-slanted-piped.jpg">
                                        <div class="img_caption">Slanted Piped</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-pockets-straight-piped.jpg">
                                        <div class="img_caption">Straight Piped</div>
                                    </div>
                                    <div class="img_box">
                                        <img src="images/coustom_images/Suit/jacket-pockets-patch-pocket.jpg">
                                        <div class="img_caption">Patch Pocket</div>
                                    </div>
                                </div>
                            </div>
                            <div class="submit_btnbox row">
                                <button type="button" class="btn btn-primary btn-sm center_btnmargin"
                                        onclick="SwitchTable('PANTS')"><i
                                            class="mdi mdi-arrow-left basic_icon_margin"></i>Prev
                                </button>
                                <button type="button" class="btn btn-success btn-sm "
                                        onclick="SwitchTable('REVIEW')"><i
                                            class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade review" id="review">
                            <div class="top_namebtn">
                                <div class="first_name">Hello Pinku Kesharwani</div>
                                <div class="pull-right">
                                    <a type="button" class="btn btn-primary btn-sm center_btnmargin"
                                       onclick="SwitchTable('SUIT')"><i
                                                class="mdi mdi-arrow-left basic_icon_margin"></i>Prev
                                    </a>
                                    <a type="button" onclick="SwitchTable('APPOINTMENT')"
                                       class="btn btn-success btn-sm ">
                                        <i class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                    </a>
                                </div>
                            </div>
                            <div class="masurment_img_box">
                                <div class="imgtxt_collection" id="shirt_measure_review_block">
                                    <h5>Review Your Customizations Shirt</h5>
                                    <div class="dynamic_review_block" id="shirt_measure_review"></div>
                                </div>
                                <div class="imgtxt_collection" id="pants_measure_review_block">
                                    <h5>Review Your Customizations Pants</h5>
                                    <div class="dynamic_review_block" id="pants_measure_review"></div>
                                </div>
                                <div class="imgtxt_collection" id="suit_measure_review_block">
                                    <h5>Review Your Customizations Suit</h5>
                                    <div class="dynamic_review_block" id="suit_measure_review"></div>
                                </div>
                                <div class="no_review" id="norecord_review"><b>You not coustomize any item</b>
                                    <small>Shirt, Pants and Suit</small>
                                </div>
                            </div>
                            <div class="submit_btnbox row">
                                <button type="button" class="btn btn-primary btn-sm center_btnmargin"
                                        onclick="SwitchTable('SUIT')"><i
                                            class="mdi mdi-arrow-left basic_icon_margin"></i>Prev
                                </button>
                                <button type="button" class="btn btn-success btn-sm "
                                        onclick="SwitchTable('APPOINTMENT')"><i
                                            class="mdi mdi-arrow-right basic_icon_margin"></i>Next
                                </button>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="appointment">
                            <div class="container">
                                <form action="{{url('take_appointment')}}" method="post" id="take_appointment1"
                                      enctype="multipart/form-data">
                                    <div class="update_profile_row row">
                                        <div class="col-sm-6">
                                            <div class="textbox_containner">
                                                <input type="text" name="name" autocomplete="off" class="animate_txt"
                                                       id="app_name" placeholder="Enter Name">
                                                <label class="animate_placeholder" for="app_name">Name*</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="textbox_containner ">
                                                <input type="text" name="contact" autocomplete="off" class="animate_txt"
                                                       id="contact" placeholder="Enter Contact No">
                                                <label class="animate_placeholder" for="contact">Contact No.*</label>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="update_profile_row row">

                                        <div class="col-sm-4">
                                            <div class="textbox_containner">
                                                <input type="email" name="email" autocomplete="off" class="animate_txt"
                                                       id="email" placeholder="xyz@gmail.com">
                                                <label class="animate_placeholder" for="email">Email*</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="textbox_containner ">
                                                <input type="text" name="appointment_date" onpaste="return false;"
                                                       autocomplete="off" class="animate_txt dtp "
                                                       onkeypress="return false" id="appointment_date"
                                                       placeholder="Select Appointment Date">
                                                <label class="animate_placeholder" for="appointment_date">Appointment
                                                    Date*</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <select name="time_slot" id="appointment_time"
                                                    class="form-control requiredDD drop_edit">
                                                <option value="0">Select Time Slot*</option>
                                                <option value="09:00 - 10:00">09:00 - 10:00</option>
                                                <option value="10:00 - 11:00">10:00 - 11:00</option>
                                                <option value="11:00 - 12:00">11:00 - 12:00</option>
                                                <option value="12:00 - 13:00">12:00 - 13:00</option>
                                                <option value="13:00 - 14:00">13:00 - 14:00</option>
                                                <option value="14:00 - 15:00">14:00 - 15:00</option>
                                                <option value="15:00 - 16:00">15:00 - 16:00</option>
                                                <option value="16:00 - 17:00">16:00 - 17:00</option>
                                                <option value="17:00 -18:00">17:00 -18:00</option>
                                                <option value="18:00 - 19:00">18:00 - 19:00</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="update_profile_row row">

                                        <div class="col-sm-6">
                                            <textarea name="address" class="form-control update_txtarea"
                                                      placeholder="Address" id="address" autocomplete="off"></textarea>
                                        </div>
                                        <div class="col-sm-6">
                                            <textarea name="additional" class="form-control update_txtarea"
                                                      placeholder="Additional Information" id="additional"
                                                      autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                    <div class="submit_btnbox row">
                                        <button type="button" class="btn btn-primary btn-sm center_btnmargin"
                                                onclick="SwitchTable('REVIEW')"><i
                                                    class="mdi mdi-arrow-left basic_icon_margin"></i>Prev
                                        </button>
                                        <button type="button" onclick="book_appointment()"
                                                class="btn btn-success btn-sm " id="btn_Update_profile">
                                            <i class="mdi mdi-account-check basic_icon_margin"></i>Schedule Appointment
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="Appointment_details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Appointment Details</h4>
                </div>
                <div class="modal-body">
                    <div class="update_profile_row row">
                        <div class="col-sm-6">
                            <div class="textbox_containner">
                                <input type="text" name="name" autocomplete="off" class="animate_txt" id="appoint_name"
                                       placeholder="Enter Name">
                                <label class="animate_placeholder" for="appoint_name">Name*</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="textbox_containner ">
                                <input type="text" name="contact" autocomplete="off" class="animate_txt"
                                       id="appoint_contact"
                                       placeholder="Enter Contact No">
                                <label class="animate_placeholder" for="appoint_contact">Contact No.*</label>
                            </div>
                        </div>

                    </div>
                    <div class="update_profile_row row">

                        <div class="col-sm-12 first_appointment"><h4><b>CHOOSE ATLEAST ONE</b></h4>
                            <div class="img_box selected_style">
                                <img src="images/coustom_images/shirt/shirt_body_size_common.png">
                                <div class="img_caption">SHIRT</div>
                            </div>
                            <div class="img_box">
                                <img src="images/coustom_images/Pants/pant-pleats-single-(one).jpg">
                                <div class="img_caption">PANTS</div>
                            </div>
                            <div class="img_box">
                                <img src="images/coustom_images/Suit/jacket-type-three-button.jpg">
                                <div class="img_caption">SUIT</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="app_submit();">Submit
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            //$('#top_header_menu').addClass('fixed_menu');
            $('.img_box').click(function () {
                if ($(this).attr('class') != 'img_box selected_style') {
                    $(this).parent().find('.img_box').removeClass('selected_style');
                    $(this).addClass('selected_style');
                } else {
                    $(this).removeClass('selected_style');
                }
            });
            $('#Appointment_details').modal('show');
        });
        function Show_Review() {
            $('#shirt_measure_review').html('');
            $('#pants_measure_review').html('');
            $('#suit_measure_review').html('');
            $('.shirt_block').find('.selected_style').each(function () {
                $('#shirt_measure_review').append("<div class='img_box'>" + $(this).html() + '</div>');
            });
            if ($('#shirt_measure_review').find('.img_box').length < 1) {
                $('#shirt_measure_review_block').hide();
            } else {
                $('#shirt_measure_review_block').show();
            }
            $('.pants_block').find('.selected_style').each(function () {
                $('#pants_measure_review').append("<div class='img_box'>" + $(this).html() + '</div>');
            });
            if ($('#pants_measure_review').find('.img_box').length < 1) {
                $('#pants_measure_review_block').hide();
            } else {
                $('#pants_measure_review_block').show();
            }
            $('.suit_block').find('.selected_style').each(function () {
                $('#suit_measure_review').append("<div class='img_box'>" + $(this).html() + '</div>');
            });
            if ($('#suit_measure_review').find('.img_box').length < 1) {
                $('#suit_measure_review_block').hide();
            } else {
                $('#suit_measure_review_block').show();
            }
            if ($('.dynamic_review_block').find('.img_box').length < 1) {
                $('#norecord_review').show();
            } else {
                $('#norecord_review').hide();
            }
        }
        function app_submit() {
            var current_select = $('.first_appointment').find('.selected_style').find('.img_caption').text();
            SwitchTable(current_select);
        }
        function SwitchTable(switch_block) {
            $('.appoint_tab li').removeClass('active');
            $('.tab-pane').removeClass('active');
            switch (switch_block) {
                case 'SHIRT':
                    $('#nav_shirt').addClass('active');
                    $('#shirt').addClass('active in');
                    break;

                case 'PANTS':
                    $('#nav_pants').addClass('active');
                    $('#pant').addClass('active in');
                    break;

                case 'SUIT':
                    $('#nav_suit').addClass('active');
                    $('#suit').addClass('active in');
                    break;
                case 'REVIEW':
                    $('#nav_review').addClass('active');
                    $('#review').addClass('active in');
                    Show_Review();
                    break;
                case 'APPOINTMENT':
                    $('#nav_appoint').addClass('active');
                    $('#appointment').addClass('active in');
                    break;
                default:
                    $('#nav_shirt').addClass('active');
                    $('#shirt').addClass('active in');
            }
        }
    </script>
@stop