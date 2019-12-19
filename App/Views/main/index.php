<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="public/images/img-01.png" alt="IMG">
        </div>

        <form method="post" class="contact1-form validate-form">
				<span class="contact1-form-title">
					Всего мгновение и вы свяжитесь с нами!
				</span>
            <div class="wrap-input1  validate-input" data-validate="Введите своё ФИО">
                <input class="input1" type="text" name="name" placeholder="Фамилия Имя Отчество">
                <span class="shadow-input1"></span>
            </div>
            <div class="wrap-input1 validate-input">
                <div class="wrap-input1 validate-input"
                     data-validate="Напишите в формате ex@abc.xyz">
                    <input class="input1" type="text" name="email" placeholder="Email">
                    <span class="shadow-input1"></span>
                </div>
                <div class="wrap-input1 validate-input" data-validate="Введите текст сообщения">
                            <textarea class="input1" name="message"
                                      placeholder="Текст сообщения"></textarea>
                    <span class="shadow-input1">:</span>
                </div>
                <div class="container-contact1-form-btn">
                    <button class="contact1-form-btn" type="button">
						<span>
							Отправить
							<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="lastMessage">
    <?php
    foreach ($messages as $message) { ?>
        <div class="container-lastMessage row mb-3">
            <div class="col-md-12 themed-grid-col">
                <div class="pb-3">
                    <b>От: </b><?php echo $message['nameFO']; ?> <br>
                    <b>Email: </b><?php echo $message['email']; ?>
                </div>
                <div class="row">
                    <div class="col-md-12 themed-grid-col"><?php echo $message['text']; ?></div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<script src="public/vendor/bootstrap/js/popper.js"></script>
<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="public/vendor/select2/select2.min.js"></script>
<script src="public/vendor/tilt/tilt.jquery.min.js"></script>
<script src="public/scripts/main.js"></script>