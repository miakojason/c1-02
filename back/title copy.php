<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli">網站標題管理</p>
	<form method="post" target="back" action="?do=tii">
		<table width="100%">
				<tr class="yel">
					<td width="45%">網站標題</td>
					<td width="23%">替代文字</td>
					<td width="7%">顯示</td>
					<td width="7%">刪除</td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
		</table>

		<table style="margin-top:40px; width:70%;">
				<tr>
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/<?=$do;?>.php?table=<?=$do;?>')" value="新增網站標題圖片"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
					</td>
				</tr>
		</table>

	</form>
</div>