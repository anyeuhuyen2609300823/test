<div class="row">
            <div class="row">
                <div class="row frmtitle">
                    <h1>THÊM Tài khoản admin</h1>
                </div>
                <div class="row frmcontent">
                    <form action="index.php?act=addtk" method="post">
                        <div class="row mb10">
                            Mã loại <br>
                        <input type="text" name="maloai" id="" disabled>
                        </div>
                        <div class="row mb10">
                            Email<br>
                            <input type="email" name="email" id="" >
                        </div>
                        <div class="row mb10">
                            USER<br>
                            <input type="text" name="user" id="" >
                        </div>
                        <div class="row mb10">
                           Pass <br>
                            <input type="pass" name="pass" id="" >
                        </div>
                        <div class="row mb10">
                        Address <br>
                            <input type="text" name="address" id="" >
                        </div>
                        <div class="row mb10">
                        tel <br>
                            <input type="text" name="tel" id="" >
                        </div>
                        <div class="row mb10">
                        role <br>
                            <input type="text" name="role" id="" >
                        </div>
                        <div class="row mb10">
                            <input type="submit" name="themmoi" value="THÊM MỚI" id="" >
                            <input type="reset" value="NHẬP LẠI" id="" >
                            <a href="index.php?act=listtk"><input type="button" value="DANH SÁCH"></a>
                        </div>
                        <?php
                            if(isset($thongbao)&&($thongbao!="")) 
                            echo $thongbao;
                        ?>
                      
                        
                    </form>
                </div>
            </div>
        </div>