document.getElementById("DonorButton").addEventListener("click",f1);
    function f1()
    {
        $("#donorModal").modal("show");
    }

document.getElementById("donorClose").addEventListener("click",f2);
    function f2()
    {
    $("#donorModal").modal("hide");
    }
document.getElementById("close").addEventListener("click",f3);
    function f3()
    {
        alert("Hello");
   document.getElementById("alertdiv").style.display='none';
    }