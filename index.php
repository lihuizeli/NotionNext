<form id="form1" name="form1" method="post" action="post.php">
    <table width="550" border="0" align="center" cellspacing="1" bgcolor="#E0FFFF">
        <tr>
            <td height="46" colspan="2" bgcolor="#DDDDDD"><font color="#333333" size="+2">请输入你的个人信息</font></td>
        </tr>
        <tr>
            <td width="82" height="20" align="right" bgcolor="#DDDDDD">姓名：</td>
            <td width="414" height="20" bgcolor="#DDDDDD"><input type="text" name="name"/></td>
        </tr>
        <tr>
            <td height="20" align="right" bgcolor="#DDDDDD">性别：</td>
            <td height="20" bgcolor="#DDDDDD">
                <input type="radio" name="sex" value="男"/>男
            &nbsp;&nbsp;
                <input type="radio" name="sex" value="女" />女
            </td>
        </tr>
        <tr>
            <td height="20" align="right" bgcolor="#DDDDDD">出生年月：</td>
            <td height="20" bgcolor="#DDDDDD"><select name="year">



            <?php
                for($i=1900;$i<=2010;$i++){
                    echo "<option value='".$i."'".($i==1988?" selected":"").">".$i."年</option>";
                }
            ?>
        </select>
        <select name="month">
            <?php
                for($i=1;$i<=12;$i++){
                    echo"<option value='".$i."'".($i==1?" selected":"").">".$i."月</option>";
                    }
                ?>
                </select></td>
            </tr>
        <tr>
            <td height="20" align="right" bgcolor="#DDDDDD">爱好：</td>
            <td height="20" bgcolor="#DDDDDD"><input type="checkbox" name="interest[]" value="看电影"/>看电影
            <input type="checkbox" name="interest[]" value="听音乐"/>听音乐
            <input type="checkbox" name="interest[]" value="演奏乐器"/>演奏乐器
            <input type="checkbox" name="interest[]" value="打篮球"/>打篮球
            <input type="checkbox" name="interest[]" value="看书"/>看书
            <input type="checkbox" name="interest[]" value="上网"/>上网</td>
        </tr>
        <tr>
            <td height="20" align="right" bgcolor="#DDDDDD">地址：</td>
            <td height="20" bgcolor="#DDDDDD"><input type="text" name="address"/></td>
        </tr>
        <tr>
            <td height="20" align="right" bgcolor="#DDDDDD">电话：</td>
            <td height="20" bgcolor="#DDDDDD"><input type="text" name="tel"/></td>
        </tr>
        <tr>
            <td height="20" align="right" bgcolor="#DDDDDD">qq：</td>
            <td height="20" bgcolor="#DDDDDD"><input type="text" name="qq"/></td>
        </tr>
        <tr>
            <td height="20" align="right" bgcolor="#DDDDDD">邮箱：</td>
            <td height="20" bgcolor="#DDDDDD"><input type="text" name="email"/></td>
        </tr>
        <tr>
            <td align="right" valign="top" bgcolor="#DDDDDD">自我评价：</td>
            <td bgcolor="#DDDDDD"><textarea name="comment" cols="60" rows="5"></textarea></td>
        </tr>
        <tr>
            <td bgcolor="#DDDDDD">&nbsp;</td>
            <td bgcolor="#DDDDDD">
                <input type="Submit" value="提交"/>
                <input type="Submit" value="重置"/></td>
        </tr>
    </table>
</form>