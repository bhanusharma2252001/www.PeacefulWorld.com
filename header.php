<style>
    * body
{
    margin:0px;
}
.header
{
    background-color:brown;
    overflow: hidden;
    
}
.header  .logo 
{
    
   float: left;
   list-style: none;
   margin-bottom: 0px;
   padding:20px 0px 0px 0px;
}
.header .logo a
{
    text-decoration: none;
    color:white;
    padding:30px 20px 30px 20px;
    font-size: 18px;
}
.header .header-items
{
    float: right;
    padding-top: 0px;
}
.header .header-items list ul li
{
    list-style: none;
    float: left;
    padding:10px 10px 20px 10px;
    margin:0px;
    color:none;
}
.header .header-items list ul li a
{
color:white;
font-size: 18px;
text-decoration: none;
padding:10px 10px 10px 10px;
margin:0px 0px 0px 0px;
border-radius: 4px;
}
 a.active
{
color:white;
background-color: grey;
line-height: 30px;

}
.header a:hover{
    background-color:black;
    color:white;
}
@media screen and(max-widhth:500px)
{
    .header a{
        float:none;
        display: block;
        text-align:left;
        
    }
    .header-items
    {
        float:none;
    }
}

</style><div class="header">
<div class="logo">
<a href="#">Logo</a></div>
<div class="header-items">
<list>
<ul>
<li><a href="index.php" class="active">HOME</a></li>
<li><a href="Celebrities.php">CELEBRITIES</a></li>
<li><a href="Sportsperson.php">SPORTSPERSON</a></li>
<li><a href="Politician.php">POLITICIAN</a></li>
<li><a href="Entrepreneurs.php">ENTREPRENEURS</a></li>
<li><a href="WomensCorner.php">WOMENS CORNER</a></li>
</ul>
</list>
</div>
  </div>