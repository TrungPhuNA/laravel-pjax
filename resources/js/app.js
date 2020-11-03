import pjax from 'jquery-pjax'
var InitProject = {
    init : function ()
    {
        this.runPjax()
        this.submitGetForm()
    },
    runPjax()
    {
        $(document).pjax('a', '#pjax-container')
    },

    submitGetForm()
    {
        $(document).on('submit', 'form[name="pjax-container"]', function(event) {
            console.log(event)
            $.pjax.submit(event, '#pjax-container')
            return false;
        })
    }
}

$(function (){
    InitProject.init()
})
