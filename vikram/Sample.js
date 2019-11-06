function Save()
{
var valid= false;
var p=document.myform.optradio;
for (var i=0;i<p.length;i++)
{
    if(p[i].checked)
    {
        valid=true;
        break;
    }
}
    if(valid)
    {
        
    }
    else
    {
        alert("Either choose an option");
        return false;
    }
var a=document.forms["myform"]["name"].value;
if(a=="")
{
    alert("Fill Your Name");
    return false;
}
if(a=="@" || a==".")
{
  alert("Name should not contain an any dot symbol")  
}
var r=document.forms["myform"]["email"].value;
if(r=="")
{
alert("Kindly Fill Your Email");
return false;
}
if(r.indexOf('@',0)<0)
{
alert("Add @ in it");
return false;
}
if(r.indexOf('.',0)<0)
{
    alert("Add . in it");
    return false;
}
var k=document.forms["myform"]["Mobile"].value;
if(k=="")
{
    alert("Kindly Fill your Contact No");
    return false;
}
if(k.length!=10)
{
    alert("No should be Equal to 10 digit");
    return false;
}
var t=document.forms["myform"]["Reference"].value;
if(t=="")
{
    alert("Kindly Fill the Reference No");
    return false;
}
if(t.length!=10)
{
    alert("No should be Equal to 10 digit");
    return false;
}
if(t==k)
{
    alert("Reference no and Mobile no should not be matched");
    return false;
}
var m=document.forms["myform"]["Home"].value;
if(m=="")
{
    alert("Kindly Fill your Home Address");
    return false;
}
var j=document.forms["myform"]["Venue"].value;
if(j=="")
{
    alert("Kindly Fill your Venue Address");
    return false;
}
}
    

