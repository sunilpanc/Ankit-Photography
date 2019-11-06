function Jumbo()
{
   var p=document.getElementsByName('education[]');
   var valid= false;
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
}