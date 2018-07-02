<?php 
                  $sql = "SELECT * FROM sbrhtb013 ";
                  $query = $bd->query($sql);
                  while ($row = $query->fetch()) {
                     echo "<option value='$row[0]'>$row[1]</option>"
                  }

                ?>