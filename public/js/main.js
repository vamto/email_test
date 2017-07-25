(function()
{
    $('#form').on('submit',function(e)
    {
        e.preventDefault();

        var _this=$(this);
        var m_method=_this.attr('method');
        var m_action=_this.attr('action');
        var m_data=_this.serialize();

        $.ajax({
            type: m_method,
            url: m_action,
            data: m_data,
            resetForm: 'true',
            dataType: "json",
            success: function(result)
            {
                result=JSON.parse(result);
                if (null === result)
                {
                    $('.modal-title').html("Ошибка отправки");
                    $('.modal-body').html("");
                }
                else if (result.error!=null)
                {
                    $('.modal-title').html("Ошибка отправки");
                    $('.modal-body').html(result.error);
                }
                else
                {
                    $('.modal-title').html("Сообщение успешно отправлено");
                    $('.modal-body').html("");
                    _this[0].reset();
                }
                $('#myModal').modal();
            }
        });
    });


})();