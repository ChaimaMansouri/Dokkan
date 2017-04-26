
$(function(){

    function act()
    {
        var modal = "";
        switch(this.name){
            case "add":
                $('#addModal').modal({
                    keyboard: true,
                    show: true
                });
                break;
            case "modify":
                $('#modifyModal').modal({
                    keyboard: true,
                    show: true
                });
                break;
            case "delete":
                $('#deleteModal').modal({
                    keyboard: true,
                    show: true
                });
                break;
            default:
                break;
        }
    }

    var links = document.getElementsByClassName('admin_action');

    for(var i=0;i<links.length;i++)
    {
        links[i].onclick = act;
    }
});