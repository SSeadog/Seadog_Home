<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <div><font id=S size=100>S</font></div>
        <form name="login_form_id" action="login_pw.php" method="post">
            <div name=container>
                <div>Hi!!!</div>
                <div name=id>id</div>
                <input type="text" id=userid name=userid>
            </div>
            <span onClick="location.replace('../sign_up/add_form.php')">make account</span>
            <input type="submit" name="submit" value="next">
        </form>
    </body>
</html>

<script>
    function chk_id()
    {
        if(login_form_id.userid.strlen<=2) {
            // some css works
        } else {
            
        }
    }
</script>