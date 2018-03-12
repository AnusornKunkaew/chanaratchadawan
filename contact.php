<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CHANA RATCHADAWAN Co.,Ltd.</title>
		<meta name="description" content="Dental Laboratory" />
		<meta name="keywords" content="chana,chana ratchadawan,chanaratchadawan,ชนะ รัชดาวรรณ,ฟันปลอม,ฟันเทียม,เรียนทำฟันปลอม,อาชีพทำฟันปลอม,ฟันปลอมทำอย่างไร,อยากทำฟันปลอม,โรงเรียนสอนทำฟันปลอม,สอนทำรีเทนเนอร์,เรียนทำฟันปลอมในกรุงเทพ,เรียนทําฟันที่ไหนดี,แลปทำฟันปลอม,แลปทำฟันปลอม กทม,Clear Retainer,Mouth guards,Nigth guards,ทำฟันปลอมหลักสูตรเต็ม,งานฟันปลอมติดแน่น,Partial Denture,Ceramic,Retainer,Mouth Guards,Veneers,E-Max,หลักสูตร Full Denture,Crown,Inlay,Bridge,ฟันปลอมงานถอดได้,พื้นฐานที่เกี่ยวกับฟันปลอม" />
        
        <meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />
        
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />     
	</head>
    
	<body class="contact">
		<div id="page-wrapper">

			<!-- Header -->
            <header id="header">
				<? include_once ("include/menu.php"); ?>
            </header>

			<!-- Main -->
				<article id="main">

					<header class="special container">
						<span class="icon fa-inbox"></span>
						<h2>ติดต่อเรา</h2>
						<p>หากสนใจต้องการเรียนกับเรา สามารถแจ้งรายละเอียดตามด้านล่าง<br>เมื่อกรอกรายละเอียดครบถ้วน ทางเจ้าหน้าที่จะทำการติดต่อกลับตามเบอร์โทรที่ท่านแจ้งไว้</p>
					</header>

					<!-- One -->
						<section class="wrapper style4 special container 75%">

							<!-- Content -->
								<div class="content">
									<form action="sendmail.php" method="post">
										<div class="row 50%">
											<div class="6u 12u(mobile)">
												<input type="text" id="name" name="name" placeholder="ชื่อ - นามสกุล" />
											</div>
											<div class="6u 12u(mobile)">
												<input type="text" id="tel" name="tel" maxlength="10" placeholder="เบอร์โทรศัพท์" />
											</div>
										</div>
							<div class="row 50%">
                            	<div class="6u 12u(mobile) ">
                                  	<label class="radio-inline">
      									<input name="optradio" type="radio" value="ต้องการเรียนครึ่งหลักสูตร">ต้องการเรียน<em><b>ครึ่งหลักสูตร</b></em>
    								</label>
                                    </div>
                                <div class="6u 12u(mobile) ">
    								<label class="radio-inline">
      									<input type="radio" name="optradio" value="เรียนหลักสูตรเต็ม">เรียนหลักสูตรเต็ม
    								</label>
                                </div>
						 	</div>
                            
										<div class="row 50%">
											<div class="12u">
												<textarea name="message" id="message" placeholder="ข้อความเพิ่มเติม" rows="7"></textarea>
											</div>
										</div>
										<div class="row">
											<div class="12u">
												<ul class="buttons">
													<li><input type="submit" class="special" value="Send Message" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>

						</section>

				</article>
                
                

			<!-- Footer -->
				<? include_once ("include/footer.php"); ?>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollgress.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            

	</body>
    
    <script type="text/javascript">

    $(document).on("click", "#call_popup", function () {

        $("#showpopup").show();

    });


    function checktel(tel) {
        var reg = "/^\d+$/";
        var patt = new RegExp(reg);
        //patt.test(phone_number);

        if (checktel(tel) === true) {
            // alert("เบอร์ถูกต้องแล้ว");
        } else {
            alert("เบอร์โทรศัพท์ไม่ถูกต้อง");
            $(".tel").val("");
        }
    }


    $(document).on("keyup", "#tel", function (e) {

        var pattern = /^\d+$/;

        if (pattern.test($(this).val()) !== true) {
            alert("กรุณาใช้ตัวเลขเท่านั้น");
            $(this).val("");
            return;
        }

        var num = $(this).val();
        var num_check_is_phone_number = num.substring(0, 1);
        var num_check = num.substring(0, 2);

        if (num_check_is_phone_number != 0) {
            alert("รูปแบบเบอร์โทรศัพท์ไม่ถูกต้อง");
            $(this).val("");
            e.preventDefault();
            // return;
        }

        // alert(num_check);

        if (num_check == "02" || num_check == "03" || num_check == "04" || num_check == "05" || num_check == "07") {
            console.log("IF");
            $(this).attr("maxlength", "9");
        } else {
            console.log("ELSE");
            $(this).attr("maxlength", "10");
        }

    });


    $(document).on("keydown", "#tel", function (e) {

        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
            // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
            // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
            // let it happen, don't do anything
            return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        } else {
            console.log($(this).val());
        }
    });


    $(document).on("click", "#submit", function () {

        if (name != "" && tel != "" && optradio != "") {

            // $(".preload-hide");

            $.ajax({
                url: site + 'request_pickup',
                type: "POST",
                cache: false,
                dataType: 'json',
                data: {
                    contact_name: name,
                    contact_tel: tel,
                    from: optradio,
                    remark_note: message

                }
            }).done(function (data) {

                console.log(data);

                if (data.status == 'error') {
                    alert("มีบางอย่างผิดพลาด");
                } else {

                    if (msg != 'out_of_office_hour') {
                        alert("การส่งข้อความสำเร็จ กรุณารอการติดต่อกลับจากเจ้าหน้าที่");
                    }

                    $("#close").click();

                    location.reload(true);
                }

            });

        } else {

            alert("กรุณาใส่ข้อมูลให้ถูกต้อง");
            obj.find(".name").val("");
            obj.find(".tel").val("");
            obj.find(".optradio").val("");

        }

    });


    $(document).on("click", "#close", function () {
        $(this).parents("#showpopup").fadeOut(1000, function () {
        });
    });


</script>

</html>