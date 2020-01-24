<?php
//this program for used calculation 
extract($_POST);//extract the value
if(isset($save))
{
    switch($change)
    {
        case '+':
        $res=$name+$name1;
        break;
        
        case '-':
        $res=$name-$name1;
        break;
        
        case '*':
        $res=$name*$name1;
        break;


    }
    
}

?>
<!DOCTYP html>
<html>
    <head>
        <title>Calculator- switch</title>
        
    </head>
    <body>
    
        <form method="post">
        <table border="1" align="center">
            
            <tr>
                <th>Enter your First num</th>
                <th><input type="number" name="name" step=".01" value=""/></th>
            </tr> 
            <tr>
                <th>Enter your Second num</th>
                <th><input type="number" name="name1"  step=".01" value=""/></th>
            </tr>
             <tr>
                <th>Your Result</th>
                <th><input type="number" readonly="readonly"  step=".01" value="<?php  echo @$res;?>"/></th>
            </tr> 
            <tr>
                <th>Select Your Choice</th>
                <th>
                <select name="change">
                    <option>+</option>
                    <option>-</option>
                    <option>*</option>
                </select>
                </th>
            </tr>
            <tr>
                <td>Result</td>
                <td><input type="submit" name="save" value="Show Result"/></td>
             </tr>
        </table>
        </form>
    </body>
</html>