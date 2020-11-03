import pjax from 'jquery-pjax'
var InitProject = {
    init : function ()
    {
        this.runPjax()
    },
    runPjax()
    {
        $(document).pjax('a', '#pjax-container')
    }
}

$(function (){
    InitProject.init()
})
