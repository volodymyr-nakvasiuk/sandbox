$(document).ready(function () {
    var $autocomleteItems = $(".searchCityFrom, .searchCityTo");
    var autocomlete_domain = "http://e-travels.com.ua";

    $autocomleteItems.each(function () {
        $(this).hide()
            .before('<input type="text" class="form-control autocomplete" id="' + this.id + '_text" />');
        if (this.value){
            var label_id = this.id;
            $.get(autocomlete_domain + '/getCityByCID', {cid:this.value}, function(data){
                $('#' + label_id + '_text').val(data.label);
            },'json');
        }
    });

    $("input.autocomplete")
        .keyup(function () {
            if (this.value == '') {
                $('#' + this.id.replace(/_text$/, '')).attr('value', '');
            }
        }).autocomplete({
            source: autocomlete_domain + "/cityAutoComplete",
            appendTo: "#search_autocomplete",
            minLength: 3
        });
    $('body').on('click', 'li.ui-menu-item', function () {
        var selected = $(this).find('span');
        var targetItem = $('#' + selected.attr('target').replace(/_text$/, ''));
        targetItem.attr('value', selected.text());
    });
});