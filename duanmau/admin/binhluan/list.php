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
                                <th>ID</th>
                                <th>Nội dung</th>
                                <th>iduser</th>
                                <th>idpro</th>
                                <th>ngày bl </th>
                              
                                <th></th>
                            </tr>
                            <?php
                                foreach($listbinhluan as $binhluan){
                                    extract($binhluan);  
                                    $suabl="index.php?act=suabl&id=".$id;
                                    $xoabl="index.php?act=xoabl&id=".$id;   

                                echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$noidung.'</td>
                                    <td>'.$iduser.'</td>
                                    <td>'.$idpro.'</td>
                                    <td>'.$ngaybinhluan.'</td>
                                    <td>
                                    <a href=" '.$suabl.'"><input type="button" value="sửa"></a>
                                    <a href=" '.$xoabl.'"><input type="button" value="Xóa"></a>
                                    </td>
                                </tr>';
                                }
                            ?>
                      </table>
                    </div>
                    <!-- <div class="row mb10">
                        <input type="button" value="chọn tất cả" id="" >
                        <input type="button" value="Bỏ chọn tất cả" id="" >
                        <input type="button" value="Xóa đã tất cả" id="" >
                    </div> -->
                </div>
            </div>
        </div>