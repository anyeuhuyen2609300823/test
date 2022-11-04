<div class="row">
            <div class="row">
                <div class="row frmtitle">
                    <h1>DANH SÁCH Tài khoản</h1>
                </div>
                <div class="row frmcontent">
                    <div class="row mb10 frmdsloai">
                      <table>
                            <tr>
                                <th></th>
                                <th>Mã TK</th>
                                <th>USER</th>
                                <th>PASS</th>
                                <th>EMAIL</th>
                                <th>Địa chỉ</th>
                                <th>Điện thoại</th>
                                <th>Vai trò</th>
                                <th></th>
                            </tr>
                            <?php
                                foreach($listtaikhoan as $taikhoan){
                                    extract($taikhoan);  
                                    $suatk="index.php?act=suatk&id=".$id;
                                    $xoatk="index.php?act=xoatk&id=".$id;   

                                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$user.'</td>
                                    <td>'.$pass.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$address.'</td>
                                    <td>'.$tel.'</td>
                                    <td>'.$role.'</td>
                                    <td>
                                    <a href=" '.$suatk.'"><input type="button" value="sửa"></a>
                                    <a href=" '.$xoatk.'"><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
                                }
                            ?>
                      </table>
                    </div>
                    <div class="row mb10">
                        <!-- <input type="button" value="tạo tài khoản admin" id="" > -->
                        <!-- <input type="button" value="Bỏ chọn tất cả" id="" >
                        <input type="button" value="Xóa đã tất cả" id="" > -->
                        <!-- <a href="index.php?act=addtk"><input type="button" value="tạo tài khoản admin"></a> -->
                    </div>
                </div>
            </div>
        </div>