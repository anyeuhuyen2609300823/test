<div class="row">
            <div class="row header formtitle mb">
                <H1>DANH SÁCH LOẠI HÀNG</H1>
            </div>
            <form action="index.php?act=lissp" method="post">
                        <input type="text" name="kyw" >
                        <select name="iddm" >
                        <option value="0" selected> Tất cả </option>
                        <?php 
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                        ?>

                    </select>
                    <input type="submit" name="listok" value="GO">
            </form>
            <div class="row fromcontent">
                <div class="row m10 formdslh">
                    
                    <table>
                        <tr>
                            <th></th>
                            <th>Mã Loại</th>
                            <th>Tên Sản phẩm</th>
                            <th> Hình</th>
                            <th>Giá</th>
                            <th>Lượt Xem</th>
                            <th></th>
                        </tr>
                            <?php 
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp="index.php?act=suasp&id=".$id;
                                    $xoasp="index.php?act=xoasp&id=".$id;
                                    $hinhpath="../upload/".$img;
                                    if(is_file($hinhpath)){
                                        $hinh = "<img src='".$hinhpath."' height='100'>";
                                    }else{ 
                                        $hinh="no photo";
                                    }
                                    echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>'.$id.'</td>
                                    <td>'.$name.'</td>
                                    <td>'.$hinh.'</td>
                                    <td>$'.$price.'</td>
                                    <td>'.$luotxem.'</td>
                                    <td><a href="'.$suasp.'"><input type="button" value="sửa"></a> <a href="'.$xoasp.'" ><input type="button" value="Xóa"></a> </td>
                                </tr>';
                                }
                            
                            ?>
                        
                    </table>
                </div>
                <div class="row m10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn ">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div> 