<?php require_once "App/Pages/header.php"; ?>
    <div style="text-align: right; margin: 20px 0px 10px;">
        <a id="btnAddAction" href="index.php?action=member-add"><img src="App/Pages/image/icon-add.png" />Add Member</a>
    </div>
    <div id="toys-grid">
        <table cellpadding="10" cellspacing="1">
            <thead>
                <tr>
                    <th><strong>Member Fullame</strong></th>
                    <th><strong>Description</strong></th>
                    <th><strong>Registration Date</strong></th>
                    <th><strong>Modification Date</strong></th>

                </tr>
            </thead>
            <tbody>
                    <?php
                    if (! empty($result)) {
                        foreach ($result as $k => $v) {
                            ?>
          <tr>
                    <td><?php echo $result[$k]["member_fullname"]; ?></td>
                    <td><?php echo $result[$k]["description"]; ?></td>
                    <td><?php echo $result[$k]["created"]; ?></td>
                    <td><?php echo $result[$k]["modified"]; ?></td>
                    <td><a class="btnEditAction"
                        href="index.php?action=member-edit&member_id=<?php echo $result[$k]["member_id"]; ?>">
                        <img src="App/Pages/image/icon-edit.png" />
                        </a>
                        <a class="btnDeleteAction" 
                        href="index.php?action=member-delete&member_id=<?php echo $result[$k]["member_id"]; ?>">
                        <img src="App/Pages/image/icon-delete.png" />
                        </a>
                    </td>
                </tr>
                    <?php
                        }
                    }
                    ?>
                
            
            
            <tbody>
        
        </table>
    </div>
<?php require_once "App/Pages/footer.php"; ?>