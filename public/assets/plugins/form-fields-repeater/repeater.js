jQuery.fn.extend({
    createRepeater: function (options = {}) {        
        
        var hasOption = function (optionKey) {
            
            return options.hasOwnProperty(optionKey);
        };
        var option = function (optionKey) {
           
            return options[optionKey];
        };
        
        var addItem = function (items, key, fresh = true) {
           
            var itemContent = items;
            var group = itemContent.data("group");
            var item = itemContent;
            var input = item.find('input,select');
           
            //buat objek inputnya ngulang dua kali
            input.each(function (index, el) {
                // alert('each1');
                var attrName = $(el).data('name');                
                var skipName = $(el).data('skip-name');                           

                if (skipName != true) {
                    
                    $(el).attr("name",group + "[" + key + "]" + "[" + attrName + "]" );            
                } else {
                    if (attrName != 'undefined') {
                        $(el).attr("name", attrName);
                    }
                }
                if (fresh == true) {
                    // $(el).attr('value');
                }
            })
            var itemClone = items;

            /* Handling remove btn */
            var removeButton = itemClone.find('.remove-btn');

            if (key == 0) {
                removeButton.attr('disabled', true);
            } else {
                removeButton.attr('disabled', false);            
            }

            removeButton.attr('onclick', '$(this).parents(\'.items\').remove()');

            $("<div class='items'>" + itemClone.html() + "<div/>").appendTo(repeater);
        };
        /* find elements */
        var repeater = this;
        var items = repeater.find(".items");
        var key = items.length - 1;
        var addButton = repeater.find('.repeater-add-btn'); 
        var KeyForm = repeater.find(".keyFormMitra");
       
        
        //buat item div awalnya ini bakal diulang sesuai klikan
        items.each(function (index, item) {
         
            if(KeyForm.attr('value') != 0){
                // alert('nol');
                while(key < KeyForm.attr('value')){
                    addItem($(item), key);
                    key++;
                }
            }

            items.remove();
            if (hasOption('showFirstItemToDefault') && option('showFirstItemToDefault') == true) {
                addItem($(item), key);
                key++;
            } else {
                if (items.length > 1) {
                    addItem($(item), key);                    
                    key++;
                }
            }
        });

        /* handle click and add items */
        addButton.on("click", function () {
            
            addItem($(items[0]), key);
            KeyForm.attr('value', key);
            key++;
        });
    }
});