
<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="public/images/img-01.png" alt="IMG">
        </div>

        <form method="post" action="/"  class="contact1-form validate-form">
				<span class="contact1-form-title">
					Всего мгновение и вы свяжитесь с нами!
				</span>
            <?php if ( $validName ) {?>
            <div class="wrap-input1  validate-input">
            <?php }else{  ?>
            <div class="wrap-input1  validate-input alert-validate"   data-validate = "Введите своё ФИО">
                <?php } ?>
                <input class="input1" type="text" name="name" placeholder="Фамилия Имя Отчество" value=<?php echo ( is_null($textName)) ? '' : $textName?> >
                <span class="shadow-input1"></span>
            </div>


            <?php if ( $validEmail )  {?>
            <div class="wrap-input1 validate-input">
            <?php }else{  ?>
            <div class="wrap-input1 validate-input alert-validate" data-validate = "Напишите в формате ex@abc.xyz">
            <?php } ?>
                <input class="input1" type="text" name="email" placeholder="Email" value=<?php echo ( is_null($textEmail)) ? '' : $textEmail?> >
                <span class="shadow-input1"></span>
            </div>

            <?php if ( $validMessage ) {?>
                <div class="wrap-input1 validate-input">
            <?php }else{  ?>
                <div class="wrap-input1 validate-input alert-validate" data-validate = "Введите текст сообщения">
            <?php } ?>
                    <textarea class="input1" name="message"  placeholder="Текст сообщения"><?php echo ( is_null($textMessage)) ? '' : $textMessage?></textarea>
                    <span class="shadow-input1">:</span>
                </div>

            <div class="container-contact1-form-btn">
                <button class="contact1-form-btn" type="submit">
						<span>
							Отправить
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                </button>
            </div>
        </form>
    </div>
</div>




<!--===============================================================================================-->
<!--===============================================================================================-->
<script src="public/vendor/bootstrap/js/popper.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="public/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    });

   $(){
        alert('asd');
    };


</script>

<script src="public/scripts/main.js"></script>