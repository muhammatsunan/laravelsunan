<!DOCTYPE html>
<html>
<head>
<title>Contac Us</title>
</head>
<style>
            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #52ebe0;
            }
            li{
                float: left;
            }
            li a{
                display: block;
                color: #333;
                text-align: center;
                padding: 14px 36px;
                text-decoration: none;
            }
            li a:hover {
                background-color: #fff;
            }
            li .active{
                background-color: #00bfff;
            }
        </style>
<body>
<ul>
<li><a href="{{url('/home0159')}}">Home</a></li>
<li><a href="{{url('/artikel0159')}}">Artikel</a></li>
<li><a class="active" href="{{url('/ContacUs0159')}}">ContacUs</a></li>
</ul>
<body> 
<br><br><br>
<table border="1" align="center">
<tr>
        <td colspan="2" align="center" ><img src="{{ ('C:\daskom\laravelsunan\public\storage\sunan.jpeg') }}" ></td>
        </tr>
        <tr>
            <td>Nama : </td>
            <td>Muhamat Sun'an</td>
        </tr>
        <tr>
            <td>WA :</td>
            <td>085335270074</td>
        </tr>
    <tr>
            <td>Email :</td>
            <td>muhammatsunan@gmail.com</td>
        </tr>
        <tr>
            <td>Social Media :</td>
            <td>Instagram : @muhammatsunan</td>
        </tr>
        </table>

</body>
</html>