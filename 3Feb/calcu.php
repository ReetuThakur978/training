<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>A Simple Calculator</title>
<style>
    
    .container {
        width: 250px;
        background-color: white;
        margin: 100px auto;
    }
    table {
        width: 100%;
        border-color: #f4f4f4;
    }
    td {
        width: 70px;
    }
    button {
        width: 30px;
        height: 40px;
        font-size: 24px;
        background-color: white;
        border: none;
    }
    #inputLabel {
        height: 60px;
        font-size: 40px;
        vertical-align: bottom;
        text-align: right;
        padding-right: 16px;
        background-color: #ececec;
    }
</style>
</head>
<body>
	
<div class="container">
    <table border="1" cellspacing="0">
        <tr>
            <td colspan="4" id="inputLabel">0</td>
        </tr>
        <tr>
            <td colspan="3">
            <button onclick="pushBtn(this);">AC</button></td>
            <td><button onclick="pushBtn(this);">/</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">7</button></td>
            <td><button onclick="pushBtn(this);">8</button></td>
            <td><button onclick="pushBtn(this);">9</button></td>
            <td><button onclick="pushBtn(this);">*</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">4</button></td>
            <td><button onclick="pushBtn(this);">5</button></td>
            <td><button onclick="pushBtn(this);">6</button></td>
            <td><button onclick="pushBtn(this);">-</button></td>
        </tr>
        <tr>
            <td><button onclick="pushBtn(this);">1</button></td>
            <td><button onclick="pushBtn(this);">2</button></td>
            <td><button onclick="pushBtn(this);">3</button></td>
            <td><button onclick="pushBtn(this);">+</button></td>
        </tr>
        <tr>
            <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
            <td><button onclick="pushBtn(this);">.</button></td>
            <td><button onclick="pushBtn(this);">=</button></td>
        </tr>
    </table>
</div>
 
<script>
    var inputLabel = document.getElementById('inputLabel');
     
    function pushBtn(obj) {
         
        var pushed = obj.innerHTML;
         
        if (pushed == '=') {
            // Calculate
            inputLabel.innerHTML = eval(inputLabel.innerHTML);
             
        } else if (pushed == 'AC') {
            // All Clear
            inputLabel.innerHTML = '0';
             
        } else {
            if (inputLabel.innerHTML == '0') {
                inputLabel.innerHTML = pushed;
                 
            } else {
                inputLabel.innerHTML += pushed;   
            }
        }
    }
</script>
</body>
</html>