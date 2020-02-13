#text {
font-family: sans-serif;
border-bottom: 1px solid;
align: center;
}

#menu {
    width: 550px;
    height: 35px;
    font-size: 16px;
    font-family: Tahoma, Geneva, sans-serif;
    font-weight: bold;
    text-align: center;
    //text-shadow: 3px 2px 3px #333333;
    background-color: #8AD9FF;
        border-radius: 8px;
}

#menu ul {
    height: auto;
    padding: 8px 0px;
    margin: 0px;
}

#menu li { 
display: inline; 
position:relative;
padding: 20px; 
}




#menu li ul {
    display:none;
position:absolute;
}

#menu li:hover ul{
    display:block;
    background: #8AD9FF;
height:auto; width:10em;
}

#menu li ul li{
    clear:both;
border-style:none;
}
#menu a {
    text-decoration: none;
    color: #00F;
    padding: 8px 8px 8px 8px;
}


#menu a:hover {
    color: #F90;
    background-color: #FFF;
}