<td class="auto-style28">&nbsp;</td>
                <td class="auto-style23">
                    <div id="mymenu">
                        <div class="style1">
                            <?=strtoupper($user_usertype) ?>
                        </div>

                        <?php

                        $conn = new mysqli($servername, $db_username, $db_password, $db_name);
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT menu_name, menu_link FROM tbl_menuinfo where (usertype='".$user_usertype."') order by ordering";
                        //die($sql);
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) 
                        {
                            while($row = $result->fetch_assoc()) 
                            {
                                if($row["menu_name"]==$selected_menu)
                                {                                    
                                echo '<div class="menu_sel">
                                <a href="'.$host_url.'/'.$row["menu_name"].'" style="text-decoration: none; color: white;">'.$row["menu_name"].'</a>
                                </div>';  
                                }
                                else
                                {
                                echo '<div class="menu">
                                <a href="'.$host_url.'/'.$row["menu_name"].'" style="text-decoration: none; color: white;">'.$row["menu_name"].'</a>
                                </div>';
                                }
                            }
                        }
                        ?>
                    </div>
                </td>