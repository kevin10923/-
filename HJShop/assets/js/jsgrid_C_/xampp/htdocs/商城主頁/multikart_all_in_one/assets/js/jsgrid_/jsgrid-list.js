(function($) {
    "use strict";
    $("#basicScenario").jsGrid({
        width: "100%",
        filtering: true,
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        autoload: true,
        pActionSize: 15,
        pActionButtonCount: 5,
        deleteConfirm: "Do you really want to delete the client?",
        controller: db,
        fields: [
            { name: "商品名稱", field:"item_name", type: "text", width: 100},
            {
                name: "商品照片", id : "pic1",
                itemTemplate: function(val, item) {
                    return $("<img>").attr("src", val).css({ height: 50, width: 50 }).on("click", function() {
                        $("#imagePreview").attr("src", item.Img);
                        $("#dialog").dialog("open");
                    });
                },
                insertTemplate: function() {
                    var insertControl = this.insertControl = $("<input>").prop("type", "file");
                    return insertControl;
                },
                insertValue: function() {
                    return this.insertControl[0].files[0];
                },
                align: "center",
                width: 50
            },
            { name: "商品規格", id : "size", type: "text", width: 50},
            { name: "商品金額", id : "price", type: "number", width: 50},
            { name: "庫存數量", id : "layup", type: "number", width: 50},
            { name: "售出數量", id : "pic1", type: "number", width: 50},
            { type: "control" },
            {
            }
                
        ]
    });
})(jQuery);
