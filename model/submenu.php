<?php include_once "../api/db.php"; ?>
<h3>編輯次選單</h3>
<hr>
<form action="./api/submenu.php" method="post">
    <table id='sub'>
        <tr>
            <td>次選單名稱</td>
            <td>次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        $opts = $Menu->all(['menu_id' => $_GET['id']]);
        foreach ($opts as $opt) {
        ?>
            <tr>
                <td><input type="text" name="text[]" value="<?= $opt['text']; ?>"></td>
                <td><input type="text" name="href[]" value="<?= $opt['href']; ?>"></td>
                <td>
                    <input type="hidden" name="id[]" value="<?= $opt['id']; ?>">
                    <input type="checkbox" name="del[]" value="<?= $opt['id']; ?>">
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div>
        <input type="submit" value="修改確定">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">
    </div>
</form>
<script>
    function more() {
        let item = ` <tr>
            <td><input type="text" name="add_text[]" id=""></td>
            <td><input type="text" name="add_href[]" id=""></td>
        </tr>`
        $("#sub").append(item)
    }
</script>