<footer id="footer"><!--Footer-->

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="single-widget">
                            <h2>PHƯỚC LỘC</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Hỗ trợ khách hàng 24/7</a></li>
                                <li><a href="">+ 1264 899 290</a></li>
                                <li><a href="">Ngũ Hành Sơn</a></li>
                                <li><a href="">Đà Nẵng</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-2">
                        <div class="single-widget">
                            <h2>TÌM NHANH</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Vòng tay phong thủy</a></li>
                                <li><a href="">Vật phầm phong thủy</a></li>
                                <li><a href="">Vòng đeo cổ</a></li>
                                <li><a href="">Tượng đá</a></li>
                                <li><a href="">Trang sức đính đá</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-widget">
                            <h2>CHĂM SÓC KHÁCH HÀNG</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Tài khoản</a></li>
                                <li><a href="">Theo dõi đơn hàng</a></li>
                                <li><a href="">Dịch vụ khách hàng</a></li>
                                <li><a href="">Đổi trả hàng</a></li>
                                <li><a href="">Hỗ trợ sản phẩm</a></li>
                                <li><a href="">Tư vấn phong thủy</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-widget">
                            <h2>Thành viên thực hiện</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="">Đoàn Văn Tình</a></li>
                                <li><a href="">Đinh Xuân Hãi</a></li>
                                <li><a href="">Mai Thanh</a></li>
                                <li><a href="">Với sự Giúp đỡ đắt lực của :</a></li>
                                <li><a href="">Google</a></li>
                                <li><a href="">Stackoverflow</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-md-offset-1">
                        <h4>Fanpage</h4>
                        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2F%C4%90%C3%A1-Phong-Thu%E1%BB%B7-Ph%C6%B0%E1%BB%9Bc-L%E1%BB%99c-1934939266768433%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div> -->

                </div>
            </div>
        </div>

        <div class="chatsub">
            <span style="">Chatbox</span>
        </div>
        <div class="chat">
            <div class="title">Hỗ trợ tư vấn trực tuyến <span class="glyphicon glyphicon-remove" style="padding-left: 60px;"></span></div>
            <div id="messgesDiv" style="border: 1px solid silver;">

            </div>
            <div style="background-color: white;">
                <input type="text" id="nameInput" placeholder="Name" class="input1">
                <input type="text" id="messageInput" placeholder="Message" class="input2">
            </div>
        </div>


        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="text-center">Copyright © 2016- 2018 PHUOCLOC -  Chuyên đá phong thủy may mắn.</p>
                </div>
            </div>
        </div>

    <script>
            var myDataRef = new Firebase("https://chat-97266.firebaseio.com/");

            $("#messageInput").keypress(function (e){
                if(e.keyCode == 13){ //Enter
                    var name = $("#nameInput").val();
                    var text = $("#messageInput").val();
                    console.log(name + " -- " + text);
                    ///myDataRef.set({name: name, text: text}); //chỉ cho phép thêm 1 bản ghi
                     myDataRef.push({name: name, text: text}); //cho phép thêm nhiều bản ghi
                    $("#messageInput").val("");
                }
            });

            myDataRef.on('child_added', function (snapshot){
                var message = snapshot.val();
                displayChatMessage(message.name, message.text);
            });

            function displayChatMessage(name, text){
                console.log(name + " -- " + text);
                $('<div/>').text(text).prepend($('<em/>').text(name+": ")).appendTo($("#messgesDiv"));
                $("#messgesDiv")[0].scrollTop = $("#messgesDiv")[0].scrollHeight;
            }
        </script>
    </footer><!--/Footer-->



    <script src="{{ url('js/jquery.js') }}"></script>
    <script src="{{ url('js/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ url('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('js/main.js') }}"></script>
    <script src="{{ url('js/html5shiv.js') }}"></script>
    <script src="{{ url('js/myscript.js') }}"></script>

</body>
</html>
