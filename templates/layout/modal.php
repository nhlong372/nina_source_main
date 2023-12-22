 <?php if (POPUP == true) {
        if (!empty($popup)) { ?>
         <!-- Modal popup -->
         <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                 <div class="modal-content">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                     <!-- <div class="modal-header">
                    <h6 class="modal-title" id="popupModalLabel"><?= $popup['name' . $lang] ?></h6>                    
                </div>-->
                     <div class="modal-body">
                         <a href="<?= $popup['link'] ?>">
                             <?= $func->getImage(['sizes' => '800x530x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $popup['photo'], 'alt' => 'Popup']) ?>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
 <?php }
    } ?>


 <!-- Modal xem bản đồ -->
 <?php /*
<div class="modal fade" id="popup-map" tabindex="-1" role="dialog" aria-labelledby="popup-map-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-lg" role="document">
        <div class="modal-content">                     
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>       
            <div class="modal-body">
                <?=htmlspecialchars_decode($optsetting['coords_iframe'])?>
            </div>
        </div>
    </div>
</div>
*/ ?>

 <!-- Modal xem nhanh sản phẩm -->
 <?php if (QUICKVIEW == true) { ?>
     <div class="modal fade" id="popup-pro-detail" tabindex="-1" role="dialog" aria-labelledby="popup-pro-detail-label" aria-hidden="true">
         <div class="modal-dialog modal-dialog-top modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body"></div>
             </div>
         </div>
     </div>
 <?php } ?>

 <!-- Modal báo giá -->
 <?php /*
<div class="modal fade" id="popup-baogia" tabindex="-1" role="dialog" aria-labelledby="popup-baogia-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top modal-lg" role="document">
        <div class="modal-content">                     
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>       
            <div class="modal-body">
                <div class="box-lienhe">
                    <div class="wap_1200 css_lienhe">
                        <div class="td-tc1">Đăng ký báo giá</div>
                        <div class="td-tc2">Hãy điền đầy đủ thông tin vào form bên dưới.</div>

                        <form class="baogia-form validation-contact col-lg-6" novalidate method="post" action="index.php" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="contact-input col-sm-6">
                                    <input type="text" class="form-control text-sm" id="fullname-baogia" name="dataBaogia[fullname]" placeholder="<?=hoten?>" value="<?=$flash->get('fullname')?>" required />
                                    <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
                                </div>
                                <div class="contact-input col-sm-6">
                                    <input type="number" class="form-control text-sm" id="phone-baogia" name="dataBaogia[phone]" placeholder="<?=sodienthoai?>" value="<?=$flash->get('phone')?>" required />
                                    <div class="invalid-feedback"><?=vuilongnhapsodienthoai?></div>
                                </div>         
                            </div>
                            <div class="form-row">
                                <div class="contact-input col-sm-6">
                                    <input type="email" class="form-control text-sm" id="email-baogia" name="dataBaogia[email]" placeholder="Email" value="<?=$flash->get('email')?>" required />
                                    <div class="invalid-feedback"><?=vuilongnhapdiachiemail?></div>
                                </div>
                                <div class="contact-input col-sm-6">
                                    <input type="text" class="form-control text-sm" id="address-baogia" name="dataBaogia[address]" placeholder="<?=diachi?>" value="<?=$flash->get('address')?>"  />
                                    <div class="invalid-feedback"><?=vuilongnhapdiachi?></div>
                                </div>
                            </div>            
                            <div class="contact-input">
                                <textarea class="form-control text-sm" id="content-baogia" name="dataBaogia[content]" placeholder="Yêu cầu"  /><?=$flash->get('content')?></textarea>
                                <div class="invalid-feedback"><?=vuilongnhapnoidung?></div>
                            </div>           
                            <input type="submit" class="btn btn-primary mr-2 guimail" name="submit-baogia" value="<?=dangky?>" disabled />
                            <input type="hidden" name="recaptcha_response_baogia" id="recaptchaResponseContact">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
*/ ?>

 <?php if (CARTSITE == true) { // giỏ hàng nâng cao
    ?>
     <!-- Modal cart -->
     <div class="modal fade" id="popup-cart" tabindex="-1" role="dialog" aria-labelledby="popup-cart-label" aria-hidden="true">
         <div class="modal-dialog modal-dialog-top modal-lg" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h6 class="modal-title" id="popup-cart-label"><?= giohangcuaban ?></h6>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body"></div>
             </div>
         </div>
     </div>
 <?php } ?>

 <?php /*
<!-- Modal prototype -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".exampleModal">
	Open Modal
</button>
<div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="exampleModalLabel">Modal title</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				...
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
*/ ?>

 <?php /* ?>
<div class="modal fade modal-form" id="popup-form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title-main"><span>Đặt lịch nè :3</span></div>
                <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal"><i class="far fa-xmark"></i></button>
            </div>
            <div class="modal-body">
                <div class="layout-form">
                    <form class="newsletter-form validation-newsletter" id="booking-form" novalidate method="post" action="" enctype="multipart/form-data">
                        <div class="newsletter-input">
                            <input type="text" class="form-control text-sm" id="fullname-newsletter" name="dataBooking[fullname]" placeholder="<?= hoten ?>" required />
                            <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                        </div>

                        <div class="newsletter-input">
                            <input type="number" class="form-control text-sm" id="phone-newsletter" name="dataBooking[phone]" placeholder="<?= sodienthoai ?>" required />
                            <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                        </div>

                        <div class="newsletter-input">
                            <input type="text" class="form-control text-sm" id="address-newsletter" name="dataBooking[address]" placeholder="<?= diachi ?>" required />
                            <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                        </div>

                        <div class="newsletter-input">
                            <input type="email" class="form-control text-sm" id="email-newsletter" name="dataBooking[email]" placeholder="<?= nhapemail ?>" required />
                            <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                        </div>

                        <div class="newsletter-input">
                            <input type="datetime-local" class="form-control text-sm" id="date-newsletter" name="dataBooking[notes]" required />
                            <div class="invalid-feedback"><?= vuilongchonngaydat ?></div>
                        </div>

                        <div class="newsletter-input">
                            <textarea class="form-control text-sm" id="content-newsletter" name="dataBooking[content]" placeholder="<?= noidung ?>" required /></textarea>
                            <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" form="booking-form" class="btn btn-sm btn-danger w-100" name="submit-booking" value="<?= gui ?>">
                <input type="hidden" name="recaptcha_response_booking" id="recaptchaResponseBooking">
            </div>
        </div>
    </div>
</div>
<?php */ ?>

<?php /* ?>
 <div id="popup-form" class="popup">
     <div class="popup-overlay"></div>
     <div class="popup-content">
         <a href="#" class="close-popup btn-close" data-id="popup-form" data-animation="slideLeft"><i class="far fa-xmark"></i></a>
         <div class="title-main"><span>Đặt lịch nè :3</span></div>
         <div class="layout-form">
             <form class="newsletter-form validation-newsletter check-validate" id="form-booking" novalidate method="post" action="" enctype="multipart/form-data">
                 <div class="newsletter-input">
                     <input type="text" class="form-control text-sm" id="fullname-newsletter" name="dataBooking[fullname]" placeholder="<?= hoten ?>" required />
                     <div class="invalid-feedback"><?= vuilongnhaphoten ?></div>
                 </div>

                 <div class="newsletter-input">
                     <input type="number" class="form-control text-sm" id="phone-newsletter" name="dataBooking[phone]" placeholder="<?= sodienthoai ?>" required />
                     <div class="invalid-feedback"><?= vuilongnhapsodienthoai ?></div>
                 </div>

                 <div class="newsletter-input">
                     <input type="text" class="form-control text-sm" id="address-newsletter" name="dataBooking[address]" placeholder="<?= diachi ?>" required />
                     <div class="invalid-feedback"><?= vuilongnhapdiachi ?></div>
                 </div>

                 <div class="newsletter-input">
                     <input type="email" class="form-control text-sm" id="email-newsletter" name="dataBooking[email]" placeholder="<?= nhapemail ?>" required />
                     <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                 </div>

                 <div class="newsletter-input">
                     <input type="datetime-local" class="form-control text-sm" id="date-newsletter" name="dataBooking[notes]" required />
                     <div class="invalid-feedback"><?= vuilongchonngaydat ?></div>
                 </div>

                 <div class="newsletter-input">
                     <textarea class="form-control text-sm" id="content-newsletter" name="dataBooking[content]" placeholder="<?= noidung ?>" required /></textarea>
                     <div class="invalid-feedback"><?= vuilongnhapnoidung ?></div>
                 </div>

                 <div class="newsletter-button">
                     <input type="submit" class="btn btn-sm btn-danger w-100 btn-send" data-loai="booking" value="Gửi ngay" disabled>
                     <input type="hidden" name="submit-booking" value="1">
                     <input type="hidden" name="recaptcha_response_booking" id="recaptchaResponseBooking">
                 </div>
             </form>
         </div>
     </div>
 </div>
 <?php */ ?>