
<a href="../sanpham/add.php"><button>Thêm sản phẩm</button></a>
<table border="1" style="border-collapse:collapse;width:900px;height:200px;margin:0 auto;" class="table">
                    <tr>
                        <td class="id">id</td>
                        <td class="id">product name</td>
                        <td class="id">image</td>
                        <td class="id">price</td>
                        <td class="id">desc</td>
                        <td class="id">action</td>
                    </tr>
                    <?php
                        $i = 1;
                            while ($row = mysqli_fetch_assoc($query_cate)) 
                            {?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['ten_San_pha,'];?></td>
                                    <td><img src="../image/<?php echo $row['hinh'];?>" style="width:100px;height:100px;padding:5px;"></td>
                                    <td><?php echo $row['don_gia'];?></td>
                                    <td class="id_1"><?php echo $row['mo_ta_tom_tat'];?></td>
                                    <td>
                                        <button style="background:blue;">
                                            <a href="../sanpham/update.php?ma_san_pham= <?php echo $row['m_san_pham'];?>">
                                                update
                                            </a>
                                        </button>
                                        <button style="background:red;">
                                            <a onclick="return Del('<?php echo $row['ma_san_pham']?>')" href="../sanpham/delete.php?ma_san_pham= <?php echo $row['ma_san_pham'];?>">
                                                delete
                                            </a>
                                        </button>
                                    </td>
                                </tr>
                            <?php 
                        } ?>
                </table>